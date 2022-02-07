<?php
/**
 * ConditionTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SCX Channel API
 *
 * SCX Channel API
 *
 * The version of the OpenAPI document: 1.0.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace JTL\SCX\Lib\Channel\Client\Model;

use JTL\SCX\Lib\Channel\Client\AbstractApiModelTest;

/**
 * ConditionTest Class Doc Comment
 *
 * @category    Class
 * @description Condition
 * @package     JTL\SCX\Lib\Channel\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Lib\Channel\Client\Model\Condition
 */
class ConditionTest extends AbstractApiModelTest
{
    /**
     * Test Enum Value "ORIGINAL_PACKAGING"
     * @test
     */
    public function is_a_const_ORIGINAL_PACKAGING(): void
    {
        self::assertEquals('ORIGINAL_PACKAGING', Condition::ORIGINAL_PACKAGING);
        $sut = new Condition('ORIGINAL_PACKAGING');
        self::assertEquals('ORIGINAL_PACKAGING', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "ORIGINAL_PACKAGING"
     * @test
     */
    public function it_can_be_constructed_forORIGINAL_PACKAGING(): void
    {
        $sut = Condition::ORIGINAL_PACKAGING();
        self::assertInstanceOf(Condition::class, $sut);
    }
    /**
     * Test Enum Value "MINT_CONDITION"
     * @test
     */
    public function is_a_const_MINT_CONDITION(): void
    {
        self::assertEquals('MINT_CONDITION', Condition::MINT_CONDITION);
        $sut = new Condition('MINT_CONDITION');
        self::assertEquals('MINT_CONDITION', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "MINT_CONDITION"
     * @test
     */
    public function it_can_be_constructed_forMINT_CONDITION(): void
    {
        $sut = Condition::MINT_CONDITION();
        self::assertInstanceOf(Condition::class, $sut);
    }
    /**
     * Test Enum Value "SLIGHTLY_USED"
     * @test
     */
    public function is_a_const_SLIGHTLY_USED(): void
    {
        self::assertEquals('SLIGHTLY_USED', Condition::SLIGHTLY_USED);
        $sut = new Condition('SLIGHTLY_USED');
        self::assertEquals('SLIGHTLY_USED', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "SLIGHTLY_USED"
     * @test
     */
    public function it_can_be_constructed_forSLIGHTLY_USED(): void
    {
        $sut = Condition::SLIGHTLY_USED();
        self::assertInstanceOf(Condition::class, $sut);
    }
    /**
     * Test Enum Value "HEAVILY_USED"
     * @test
     */
    public function is_a_const_HEAVILY_USED(): void
    {
        self::assertEquals('HEAVILY_USED', Condition::HEAVILY_USED);
        $sut = new Condition('HEAVILY_USED');
        self::assertEquals('HEAVILY_USED', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "HEAVILY_USED"
     * @test
     */
    public function it_can_be_constructed_forHEAVILY_USED(): void
    {
        $sut = Condition::HEAVILY_USED();
        self::assertInstanceOf(Condition::class, $sut);
    }
    /**
     * Test Enum Value "DAMAGED"
     * @test
     */
    public function is_a_const_DAMAGED(): void
    {
        self::assertEquals('DAMAGED', Condition::DAMAGED);
        $sut = new Condition('DAMAGED');
        self::assertEquals('DAMAGED', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "DAMAGED"
     * @test
     */
    public function it_can_be_constructed_forDAMAGED(): void
    {
        $sut = Condition::DAMAGED();
        self::assertInstanceOf(Condition::class, $sut);
    }
    /**
     * Test Enum Value "INCOMPLETE_DELIVERY"
     * @test
     */
    public function is_a_const_INCOMPLETE_DELIVERY(): void
    {
        self::assertEquals('INCOMPLETE_DELIVERY', Condition::INCOMPLETE_DELIVERY);
        $sut = new Condition('INCOMPLETE_DELIVERY');
        self::assertEquals('INCOMPLETE_DELIVERY', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "INCOMPLETE_DELIVERY"
     * @test
     */
    public function it_can_be_constructed_forINCOMPLETE_DELIVERY(): void
    {
        $sut = Condition::INCOMPLETE_DELIVERY();
        self::assertInstanceOf(Condition::class, $sut);
    }
    /**
     * Test Enum Value "FRAUD"
     * @test
     */
    public function is_a_const_FRAUD(): void
    {
        self::assertEquals('FRAUD', Condition::FRAUD);
        $sut = new Condition('FRAUD');
        self::assertEquals('FRAUD', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "FRAUD"
     * @test
     */
    public function it_can_be_constructed_forFRAUD(): void
    {
        $sut = Condition::FRAUD();
        self::assertInstanceOf(Condition::class, $sut);
    }

    /**
     * Test allowed values from Enum
     * @test
     */
    public function it_has_correct_set_of_allowed_values(): void
    {
        $allowed = [
            Condition::ORIGINAL_PACKAGING,
            Condition::MINT_CONDITION,
            Condition::SLIGHTLY_USED,
            Condition::HEAVILY_USED,
            Condition::DAMAGED,
            Condition::INCOMPLETE_DELIVERY,
            Condition::FRAUD,
        ];
        self::assertEquals($allowed, Condition::getAllowableEnumValues());
    }
}
