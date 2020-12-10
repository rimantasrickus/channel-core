<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-12-08
 */

namespace JTL\SCX\Lib\Channel\Order;

class OrderCancellationItem
{
    private string $orderItemId;
    private string $quantity;

    public function __construct(string $orderItemId, string $quantity)
    {
        $this->orderItemId = $orderItemId;
        $this->quantity = $quantity;
    }

    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }
}
