<?php
/**
 * OwnerConstraint.
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
 * OwnerConstraint Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class OwnerConstraint
{
    /**
     * Possible values of this enum.
     */
    const AMAZON_ONLY = 'AMAZON_ONLY';
    const NONE_ONLY = 'NONE_ONLY';
    const SELLER_ONLY = 'SELLER_ONLY';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON_ONLY,
            self::NONE_ONLY,
            self::SELLER_ONLY,        
        ];
    }
}
