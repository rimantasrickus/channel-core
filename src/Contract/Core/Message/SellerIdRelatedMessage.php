<?php

declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-11-25
 */

namespace JTL\SCX\Lib\Channel\Contract\Core\Message;

use JTL\SCX\Lib\Channel\Seller\ChannelSellerId;

interface SellerIdRelatedMessage
{
    public function getSellerId(): ChannelSellerId;
}
