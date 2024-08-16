<?php
/**
 * ReasonComment.
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
 * ReasonComment Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ReasonComment
{
    /**
     * Possible values of this enum.
     */
    const APPOINTMENT_REQUESTED_BY_MISTAKE   = 'APPOINTMENT_REQUESTED_BY_MISTAKE';
    const VEHICLE_DELAY = 'VEHICLE_DELAY';
    const SLOT_NOT_SUITABLE = 'SLOT_NOT_SUITABLE';
    const OUTSIDE_CARRIER_BUSINESS_HOURS = 'OUTSIDE_CARRIER_BUSINESS_HOURS';
    const UNFAVOURABLE_EXTERNAL_CONDITIONS = 'UNFAVOURABLE_EXTERNAL_CONDITIONS';
    const PROCUREMENT_DELAY = 'PROCUREMENT_DELAY';
    const SHIPPING_PLAN_CHANGED = 'SHIPPING_PLAN_CHANGED';
    const INCREASED_QUANTITY = 'INCREASED_QUANTITY';
    const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPOINTMENT_REQUESTED_BY_MISTAKE,
            self::VEHICLE_DELAY,
            self::SLOT_NOT_SUITABLE, 
            self::OUTSIDE_CARRIER_BUSINESS_HOURS,
            self::UNFAVOURABLE_EXTERNAL_CONDITIONS,
            self::PROCUREMENT_DELAY,
            self::SHIPPING_PLAN_CHANGED,
            self::INCREASED_QUANTITY,
            self::OTHER,
        ];
    }
}
