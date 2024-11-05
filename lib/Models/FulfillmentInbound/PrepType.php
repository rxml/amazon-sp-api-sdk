<?php
/**
 * PrepType.
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
 * PrepType Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PrepType
{
    /**
     * Possible values of this enum.
     */
    const ITEM_BLACK_SHRINKWRAP   = 'ITEM_BLACK_SHRINKWRAP';
    const ITEM_BLANKSTK   = 'ITEM_BLANKSTK';
    const ITEM_BOXING   = 'ITEM_BOXING';
    const ITEM_BUBBLEWRAP   = 'ITEM_BUBBLEWRAP';
    const ITEM_CAP_SEALING   = 'ITEM_CAP_SEALING';
    const ITEM_DEBUNDLE   = 'ITEM_DEBUNDLE';
    const ITEM_HANG_GARMENT   = 'ITEM_HANG_GARMENT';
    const ITEM_LABELING   = 'ITEM_LABELING';
    const ITEM_NO_PREP   = 'ITEM_NO_PREP';
    const ITEM_POLYBAGGING   = 'ITEM_POLYBAGGING';
    const ITEM_RMOVHANG   = 'ITEM_RMOVHANG';
    const ITEM_SETCREAT   = 'ITEM_SETCREAT';
    const ITEM_SETSTK   = 'ITEM_SETSTK';
    const ITEM_SIOC   = 'ITEM_SIOC';
    const ITEM_SUFFOSTK   = 'ITEM_SUFFOSTK';
    const ITEM_TAPING   = 'ITEM_TAPING';
    
    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ITEM_BLACK_SHRINKWRAP,
            self::ITEM_BLANKSTK,
            self::ITEM_BOXING,
            self::ITEM_BUBBLEWRAP,
            self::ITEM_CAP_SEALING,
            self::ITEM_DEBUNDLE,
            self::ITEM_HANG_GARMENT,
            self::ITEM_LABELING,
            self::ITEM_NO_PREP,
            self::ITEM_POLYBAGGING,
            self::ITEM_RMOVHANG,
            self::ITEM_SETCREAT,
            self::ITEM_SETSTK,
            self::ITEM_SIOC,
            self::ITEM_SUFFOSTK,
            self::ITEM_TAPING,
        ];
    }
}
