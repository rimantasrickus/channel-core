<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/09
 */

namespace JTL\SCX\Lib\Channel\Core;

use CachedContainer;
use Exception;
use JTL\Nachricht\Message\Cache\MessageCache;
use JTL\Nachricht\Message\Cache\MessageCacheCreator;
use Psr\Container\ContainerInterface;
use Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\ProxyDumper;
use Symfony\Component\Config\ConfigCache;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Console\DependencyInjection\AddConsoleCommandPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Reference;

abstract class AbstractApplicationContext
{
    /**
     * @var bool
     */
    private $isDevelopment;

    /**
     * @var string
     */
    private $rootDirectory;

    /**
     * @var ContainerInterface|null
     */
    private $container;

    /**
     * @var string
     */
    private $containerCacheFile;

    /**
     * @var string
     */
    private $listenerCacheFile;

    /**
     * AbstractCore constructor.
     * @param bool $isDevelopment
     * @param string $rootDirectory
     * @param string $containerCacheFile
     * @param string $listenerCacheFile
     */
    public function __construct(
        bool $isDevelopment,
        string $rootDirectory,
        string $containerCacheFile,
        string $listenerCacheFile
    ) {
        $this->isDevelopment = $isDevelopment;
        $this->rootDirectory = $rootDirectory;
        $this->containerCacheFile = $containerCacheFile;
        $this->listenerCacheFile = $listenerCacheFile;
    }

    /**
     * @throws Exception
     */
    public function bootstrap(): void
    {
        putenv('ROOT_DIRECTORY=' . $this->rootDirectory);
        $this->initializeContainer();
    }

    /**
     * @return ContainerInterface|null
     */
    public function getContainer(): ?ContainerInterface
    {
        return $this->container;
    }

    /**
     * @param ContainerBuilder $containerBuilder
     * @param LoaderInterface $loader
     * @throws Exception
     */
    protected function configureContainer(ContainerBuilder $containerBuilder, LoaderInterface $loader): void
    {
        $containerBuilder->addCompilerPass(new AddConsoleCommandPass());
        $loader->load(__DIR__ . '/../../config/core-service.yaml');

        if (isset($_ENV['CORE_DEV_CONTAINER_SERVICE_YAML'])) {
            $serviceConfigFile = $this->rootDirectory . '/' . $_ENV['CORE_DEV_CONTAINER_SERVICE_YAML'];
            $loader->load($serviceConfigFile);
        }
    }

    /**
     * @throws Exception
     */
    private function initializeContainer(): void
    {
        $configCache = new ConfigCache(
            $this->containerCacheFile,
            $this->isDevelopment
        );

        if (!$configCache->isFresh()) {
            $containerBuilder = new ContainerBuilder();
            $loader = new YamlFileLoader($containerBuilder, new FileLocator($this->rootDirectory));
            $this->configureContainer($containerBuilder, $loader);
            $this->registerListenerCacheInContainer($containerBuilder);

            $containerBuilder->compile();

            $this->dumpContainer($containerBuilder, $configCache);
        }

        require_once $this->containerCacheFile;

        // this class is getting auto generated by symfony DI
        /** @phpstan-ignore-next-line */
        $this->container = new CachedContainer();
    }

    /**
     * @param ContainerBuilder $containerBuilder
     * @param ConfigCache $configCache
     */
    private function dumpContainer(ContainerBuilder $containerBuilder, ConfigCache $configCache): void
    {
        $proxyDumper = new ProxyDumper();
        $dumper = new PhpDumper($containerBuilder);
        $dumper->setProxyDumper($proxyDumper);

        $configCache->write(
            $dumper->dump(['class' => 'CachedContainer']),
            $containerBuilder->getResources()
        );
    }

    /**
     * @param ContainerBuilder $containerBuilder
     */
    private function registerListenerCacheInContainer(ContainerBuilder $containerBuilder): void
    {
        $containerBuilder->register(MessageCache::class)
            ->setFactory([new Reference(MessageCacheCreator::class), 'create'])
            ->setArgument('$cacheFile', $this->listenerCacheFile)
            ->setArgument('$lookupPathList', [$this->rootDirectory . '/src', __DIR__ . '/../'])
            ->setArgument('$isDevelopment', $this->isDevelopment)
            ->setArgument('$excludePathList', [__DIR__ . '/../Client']);
    }
}
