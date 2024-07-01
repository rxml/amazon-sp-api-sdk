<?php
/**
 * UnitOfWeightInput.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

/**
 * UnitOfWeightInput Class Doc Comment.
 *

 * @description Indicates the unit of weight.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class UnitOfWeightInput
{
    /**
     * Possible values of this enum.
     */
    const POUNDS = 'LB';
    const KILOGRAMS = 'KG';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::POUNDS,
self::KILOGRAMS,        ];
    }
}
