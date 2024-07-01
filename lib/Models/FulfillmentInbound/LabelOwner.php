<?php
/**
 * LabelOwner.
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
 * LabelOwner Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class LabelOwner
{
    /**
     * Possible values of this enum.
     */
    const LABEL_NONE = 'NONE';
    const LABEL_SELLER = 'SELLER';
    const LABEL_AMAZON = 'AMAZON';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LABEL_NONE,
self::LABEL_SELLER,
self::LABEL_AMAZON,        ];
    }
}
