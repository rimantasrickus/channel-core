<?php
/**
 * ChannelOrderStatusTest
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
 * ChannelOrderStatusTest Class Doc Comment
 *
 * @category    Class
 * @description The current order status.  * **UNACKED**: Order is created in Marketplace but a Seller acknowledge is required. * **CREATED**: Order is created but not yet completed. * **ACCEPTED**: Order is placed and checkout process is complete but not yet shipped. * (DEPRECATED) ~~SHIPPED~~: All items in the order have been shipped * (DEPRECATED) ~~PARTIALLY_SHIPPED~~: Some items (but not all) have been shipped. * (DEPRECATED) ~~CANCELED_BY_SELLER~~: Order is canceled by seller. * (DEPRECATED) ~~CANCELED_BY_BUYER~~: Order is canceled by buyer.
 * @package     JTL\SCX\Lib\Channel\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Lib\Channel\Client\Model\ChannelOrderStatus
 */
class ChannelOrderStatusTest extends AbstractApiModelTest
{
    /**
     * Test Enum Value "UNACKED"
     * @test
     */
    public function is_a_const_UNACKED(): void
    {
        self::assertEquals('UNACKED', ChannelOrderStatus::UNACKED);
        $sut = new ChannelOrderStatus('UNACKED');
        self::assertEquals('UNACKED', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "UNACKED"
     * @test
     */
    public function it_can_be_constructed_forUNACKED(): void
    {
        $sut = ChannelOrderStatus::UNACKED();
        self::assertInstanceOf(ChannelOrderStatus::class, $sut);
    }
    /**
     * Test Enum Value "CREATED"
     * @test
     */
    public function is_a_const_CREATED(): void
    {
        self::assertEquals('CREATED', ChannelOrderStatus::CREATED);
        $sut = new ChannelOrderStatus('CREATED');
        self::assertEquals('CREATED', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "CREATED"
     * @test
     */
    public function it_can_be_constructed_forCREATED(): void
    {
        $sut = ChannelOrderStatus::CREATED();
        self::assertInstanceOf(ChannelOrderStatus::class, $sut);
    }
    /**
     * Test Enum Value "ACCEPTED"
     * @test
     */
    public function is_a_const_ACCEPTED(): void
    {
        self::assertEquals('ACCEPTED', ChannelOrderStatus::ACCEPTED);
        $sut = new ChannelOrderStatus('ACCEPTED');
        self::assertEquals('ACCEPTED', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "ACCEPTED"
     * @test
     */
    public function it_can_be_constructed_forACCEPTED(): void
    {
        $sut = ChannelOrderStatus::ACCEPTED();
        self::assertInstanceOf(ChannelOrderStatus::class, $sut);
    }
    /**
     * Test Enum Value "SHIPPED"
     * @test
     */
    public function is_a_const_SHIPPED(): void
    {
        self::assertEquals('SHIPPED', ChannelOrderStatus::SHIPPED);
        $sut = new ChannelOrderStatus('SHIPPED');
        self::assertEquals('SHIPPED', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "SHIPPED"
     * @test
     */
    public function it_can_be_constructed_forSHIPPED(): void
    {
        $sut = ChannelOrderStatus::SHIPPED();
        self::assertInstanceOf(ChannelOrderStatus::class, $sut);
    }
    /**
     * Test Enum Value "PARTIALLY_SHIPPED"
     * @test
     */
    public function is_a_const_PARTIALLY_SHIPPED(): void
    {
        self::assertEquals('PARTIALLY_SHIPPED', ChannelOrderStatus::PARTIALLY_SHIPPED);
        $sut = new ChannelOrderStatus('PARTIALLY_SHIPPED');
        self::assertEquals('PARTIALLY_SHIPPED', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "PARTIALLY_SHIPPED"
     * @test
     */
    public function it_can_be_constructed_forPARTIALLY_SHIPPED(): void
    {
        $sut = ChannelOrderStatus::PARTIALLY_SHIPPED();
        self::assertInstanceOf(ChannelOrderStatus::class, $sut);
    }
    /**
     * Test Enum Value "CANCELED_BY_SELLER"
     * @test
     */
    public function is_a_const_CANCELED_BY_SELLER(): void
    {
        self::assertEquals('CANCELED_BY_SELLER', ChannelOrderStatus::CANCELED_BY_SELLER);
        $sut = new ChannelOrderStatus('CANCELED_BY_SELLER');
        self::assertEquals('CANCELED_BY_SELLER', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "CANCELED_BY_SELLER"
     * @test
     */
    public function it_can_be_constructed_forCANCELED_BY_SELLER(): void
    {
        $sut = ChannelOrderStatus::CANCELED_BY_SELLER();
        self::assertInstanceOf(ChannelOrderStatus::class, $sut);
    }
    /**
     * Test Enum Value "CANCELED_BY_BUYER"
     * @test
     */
    public function is_a_const_CANCELED_BY_BUYER(): void
    {
        self::assertEquals('CANCELED_BY_BUYER', ChannelOrderStatus::CANCELED_BY_BUYER);
        $sut = new ChannelOrderStatus('CANCELED_BY_BUYER');
        self::assertEquals('CANCELED_BY_BUYER', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "CANCELED_BY_BUYER"
     * @test
     */
    public function it_can_be_constructed_forCANCELED_BY_BUYER(): void
    {
        $sut = ChannelOrderStatus::CANCELED_BY_BUYER();
        self::assertInstanceOf(ChannelOrderStatus::class, $sut);
    }

    /**
     * Test allowed values from Enum
     * @test
     */
    public function it_has_correct_set_of_allowed_values(): void
    {
        $allowed = [
            ChannelOrderStatus::UNACKED,
            ChannelOrderStatus::CREATED,
            ChannelOrderStatus::ACCEPTED,
            ChannelOrderStatus::SHIPPED,
            ChannelOrderStatus::PARTIALLY_SHIPPED,
            ChannelOrderStatus::CANCELED_BY_SELLER,
            ChannelOrderStatus::CANCELED_BY_BUYER,
        ];
        self::assertEquals($allowed, ChannelOrderStatus::getAllowableEnumValues());
    }
}
