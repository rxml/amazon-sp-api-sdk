<?php
/**
 * OperationStatus.
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
 * OperationStatus Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class OperationStatus
{
    /**
     * Possible values of this enum.
     */
    const SUCCESS   = 'SUCCESS';
    const FAILED = 'FAILED';
    const IN_PROGRESS = 'IN_PROGRESS';
    
    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCESS,
            self::FAILED,
            self::IN_PROGRESS,
        ];
    }
}
