<?php
/**
 * Stackability.
 *
 * PHP version 7
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v202406
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

/**
 * Stackability Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Stackability
{
    /**
     * Possible values of this enum.
     */
    const STACKABLE = 'STACKABLE';
    const NON_STACKABLE = 'NON_STACKABLE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STACKABLE,
            self::NON_STACKABLE,      
        ];
    }
}
