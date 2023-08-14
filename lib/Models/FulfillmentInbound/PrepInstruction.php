<?php
/**
 * PrepInstruction.
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
 * PrepInstruction Class Doc Comment.
 *

 * @description Preparation instructions for shipping an item to Amazon&#x27;s fulfillment network. For more information about preparing items for shipment to Amazon&#x27;s fulfillment network, see the Seller Central Help for your marketplace.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PrepInstruction
{
    /**
     * Possible values of this enum.
     */
    const POLYBAGGING = 'Polybagging';
    const BUBBLE_WRAPPING = 'BubbleWrapping';
    const TAPING = 'Taping';
    const BLACK_SHRINK_WRAPPING = 'BlackShrinkWrapping';
    const LABELING = 'Labeling';
    const HANG_GARMENT = 'HangGarment';
    const SET_CREATION = 'SetCreation';
    const BOXING = 'Boxing';
    const REMOVE_FROM_HANGER = 'RemoveFromHanger';
    const DEBUNDLE = 'Debundle';
    const SUFFOCATION_STICKERING = 'SuffocationStickering';
    const CAP_SEALING = 'CapSealing';
    const SET_STICKERING = 'SetStickering';
    const BLANK_STICKERING = 'BlankStickering';
    const NO_PREP = 'NoPrep';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::POLYBAGGING,
            self::BUBBLE_WRAPPING,
            self::TAPING,
            self::BLACK_SHRINK_WRAPPING,
            self::LABELING,
            self::HANG_GARMENT,
            self::SET_CREATION,
            self::BOXING,
            self::REMOVE_FROM_HANGER,
            self::DEBUNDLE,
            self::SUFFOCATION_STICKERING,
            self::CAP_SEALING,
            self::SET_STICKERING,
            self::BLANK_STICKERING,
            self::NO_PREP,
        ];
    }
}
