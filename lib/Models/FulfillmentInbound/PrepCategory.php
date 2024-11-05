<?php
/**
 * PrepCategory.
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
 * PrepCategory Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PrepCategory
{
    /**
     * Possible values of this enum.
     */
    const CATEGORY_ADULT = 'ADULT';
    const CATEGORY_BABY = 'BABY';
    const CATEGORY_FC_PROVIDED = 'FC_PROVIDED';
    const CATEGORY_FRAGILE = 'FRAGILE';
    const CATEGORY_GRANULAR = 'GRANULAR';
    const CATEGORY_HANGER = 'HANGER';
    const CATEGORY_LIQUID = 'LIQUID';
    const CATEGORY_PERFORATED = 'PERFORATED';
    const CATEGORY_SET = 'SET';
    const CATEGORY_SHARP = 'SHARP';
    const CATEGORY_SMALL = 'SMALL';
    const CATEGORY_TEXTILE = 'TEXTILE';
    const CATEGORY_UNKNOWN = 'UNKNOWN';
    const CATEGORY_NONE = 'NONE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CATEGORY_ADULT,
            self::CATEGORY_BABY,
            self::CATEGORY_FC_PROVIDED,
            self::CATEGORY_FRAGILE,
            self::CATEGORY_GRANULAR,
            self::CATEGORY_HANGER,
            self::CATEGORY_LIQUID,
            self::CATEGORY_PERFORATED,
            self::CATEGORY_SET,
            self::CATEGORY_SHARP,
            self::CATEGORY_SMALL,
            self::CATEGORY_TEXTILE,
            self::CATEGORY_UNKNOWN,
            self::CATEGORY_NONE, 
        ];
    }
}
