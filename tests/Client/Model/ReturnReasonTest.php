<?php
/**
 * ReturnReasonTest
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
 * ReturnReasonTest Class Doc Comment
 *
 * @category    Class
 * @description ReturnReason
 * @package     JTL\SCX\Lib\Channel\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Lib\Channel\Client\Model\ReturnReason
 */
class ReturnReasonTest extends AbstractApiModelTest
{
    /**
     * Test Enum Value "NO_REASON"
     * @test
     */
    public function is_a_const_NO_REASON(): void
    {
        self::assertEquals('NO_REASON', ReturnReason::NO_REASON);
        $sut = new ReturnReason('NO_REASON');
        self::assertEquals('NO_REASON', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "NO_REASON"
     * @test
     */
    public function it_can_be_constructed_forNO_REASON(): void
    {
        $sut = ReturnReason::NO_REASON();
        self::assertInstanceOf(ReturnReason::class, $sut);
    }
    /**
     * Test Enum Value "DEFECT"
     * @test
     */
    public function is_a_const_DEFECT(): void
    {
        self::assertEquals('DEFECT', ReturnReason::DEFECT);
        $sut = new ReturnReason('DEFECT');
        self::assertEquals('DEFECT', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "DEFECT"
     * @test
     */
    public function it_can_be_constructed_forDEFECT(): void
    {
        $sut = ReturnReason::DEFECT();
        self::assertInstanceOf(ReturnReason::class, $sut);
    }
    /**
     * Test Enum Value "WRONG_ITEM"
     * @test
     */
    public function is_a_const_WRONG_ITEM(): void
    {
        self::assertEquals('WRONG_ITEM', ReturnReason::WRONG_ITEM);
        $sut = new ReturnReason('WRONG_ITEM');
        self::assertEquals('WRONG_ITEM', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "WRONG_ITEM"
     * @test
     */
    public function it_can_be_constructed_forWRONG_ITEM(): void
    {
        $sut = ReturnReason::WRONG_ITEM();
        self::assertInstanceOf(ReturnReason::class, $sut);
    }
    /**
     * Test Enum Value "WRONG_SIZE"
     * @test
     */
    public function is_a_const_WRONG_SIZE(): void
    {
        self::assertEquals('WRONG_SIZE', ReturnReason::WRONG_SIZE);
        $sut = new ReturnReason('WRONG_SIZE');
        self::assertEquals('WRONG_SIZE', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "WRONG_SIZE"
     * @test
     */
    public function it_can_be_constructed_forWRONG_SIZE(): void
    {
        $sut = ReturnReason::WRONG_SIZE();
        self::assertInstanceOf(ReturnReason::class, $sut);
    }
    /**
     * Test Enum Value "TOO_LATE"
     * @test
     */
    public function is_a_const_TOO_LATE(): void
    {
        self::assertEquals('TOO_LATE', ReturnReason::TOO_LATE);
        $sut = new ReturnReason('TOO_LATE');
        self::assertEquals('TOO_LATE', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "TOO_LATE"
     * @test
     */
    public function it_can_be_constructed_forTOO_LATE(): void
    {
        $sut = ReturnReason::TOO_LATE();
        self::assertInstanceOf(ReturnReason::class, $sut);
    }
    /**
     * Test Enum Value "BAD_QUALITY"
     * @test
     */
    public function is_a_const_BAD_QUALITY(): void
    {
        self::assertEquals('BAD_QUALITY', ReturnReason::BAD_QUALITY);
        $sut = new ReturnReason('BAD_QUALITY');
        self::assertEquals('BAD_QUALITY', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "BAD_QUALITY"
     * @test
     */
    public function it_can_be_constructed_forBAD_QUALITY(): void
    {
        $sut = ReturnReason::BAD_QUALITY();
        self::assertInstanceOf(ReturnReason::class, $sut);
    }

    /**
     * Test allowed values from Enum
     * @test
     */
    public function it_has_correct_set_of_allowed_values(): void
    {
        $allowed = [
            ReturnReason::NO_REASON,
            ReturnReason::DEFECT,
            ReturnReason::WRONG_ITEM,
            ReturnReason::WRONG_SIZE,
            ReturnReason::TOO_LATE,
            ReturnReason::BAD_QUALITY,
        ];
        self::assertEquals($allowed, ReturnReason::getAllowableEnumValues());
    }
}
