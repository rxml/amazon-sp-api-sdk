<?php
/**
 * ItemLabelPageType.
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
 * ItemLabelPageType Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ItemLabelPageType
{
    /**
     * Possible values of this enum.
     */
    const A4_21   = 'A4_21';
    const A4_24   = 'A4_24';
    const A4_24_64x33   = 'A4_24_64x33';
    const A4_24_66x35   = 'A4_24_66x35';
    const A4_24_70x36   = 'A4_24_70x36';
    const A4_24_70x37   = 'A4_24_70x37';
    const A4_24i        = 'A4_24i';
    const A4_27         = 'A4_27';
    const A4_40_52x29   = 'A4_40_52x29';
    const A4_44_48x25   = 'A4_44_48x25';
    const Letter_30     = 'Letter_30';
    
    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::A4_21,
            self::A4_24,
            self::A4_24_64x33,
            self::A4_24_66x35,
            self::A4_24_70x36,
            self::A4_24_70x37,
            self::A4_24i,
            self::A4_27,
            self::A4_40_52x29,
            self::A4_44_48x25,
            self::Letter_30,
        ];
    }
}
