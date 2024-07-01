<?php
/**
 * BoxContentInformationSource.
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
 * BoxContentInformationSource Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class BoxContentInformationSource
{
    /**
     * Possible values of this enum.
     */
    const BOX_CONTENT_PROVIDED = 'BOX_CONTENT_PROVIDED';
    const MANUAL_PROCESS = 'MANUAL_PROCESS';
    const BARCODE_2D = 'BARCODE_2D';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOX_CONTENT_PROVIDED,
            self::MANUAL_PROCESS,
            self::BARCODE_2D,        
        ];
    }
}
