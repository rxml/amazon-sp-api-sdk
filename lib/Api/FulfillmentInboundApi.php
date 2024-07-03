<?php
/**
 * FulfillmentInboundApi.
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

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListInboundPlansResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\CreateInboundPlanResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GetInboundPlanResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListInboundPlanBoxesResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GeneratePackingOptionsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListPackingOptionsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListPackingGroupItemsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ConfirmPackingOptionResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SetPackingInformationResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GeneratePlacementOptionsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListPlacementOptionsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GenerateTransportationOptionsResponse;

use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * FbaInboundApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentInboundApi
{
    use SellingPartnerApiRequest;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(Configuration $config)
    {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function listInboundPlans($page_size = null, $pagination_token = null, $status = null, $sort_by = null, $sort_order = null)
    {
        list($response) = $this->listInboundPlansWithHttpInfo($page_size, $pagination_token, $status, $sort_by, $sort_order);

        return $response;
    }

    public function listInboundPlansWithHttpInfo($page_size = null, $pagination_token = null, $status = null, $sort_by = null, $sort_order = null){
        $request = $this->listInboundPlansRequest($page_size, $pagination_token, $status, $sort_by, $sort_order);

        return $this->sendRequest($request, ListInboundPlansResponse::class);
    }

    protected function listInboundPlansRequest($page_size = null, $pagination_token = null, $status = null, $sort_by = null, $sort_order = null)
    {

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $page_size) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (null !== $pagination_token) {
            $queryParams['paginationToken'] = ObjectSerializer::toQueryValue($pagination_token);
        }
        // query params
        if (null !== $status) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if (null !== $sort_by) {
            $queryParams['sortBy'] = ObjectSerializer::toQueryValue($sort_by);
        }
        // query params
        if (null !== $sort_order) {
            $queryParams['sortOrder'] = ObjectSerializer::toQueryValue($sort_order);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }


    public function createInboundPlan($body)
    {
        list($response) = $this->createInboundPlanWithHttpInfo($body);

        return $response;
    }

    public function createInboundPlanWithHttpInfo($body)
    {
        $request = $this->createInboundPlanRequest($body);

        return $this->sendRequest($request, CreateInboundPlanResponse::class);
    }

    protected function createInboundPlanRequest($body)
    {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createInboundPlan');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function getInboundPlan($inbound_plan_id)
    {
        list($response) = $this->getInboundPlanWithHttpInfo($inbound_plan_id);

        return $response;
    }

    public function getInboundPlanWithHttpInfo($inbound_plan_id){
        $request = $this->getInboundPlanRequest($inbound_plan_id);

        return $this->sendRequest($request, GetInboundPlanResponse::class);
    }

    protected function getInboundPlanRequest($inbound_plan_id)
    {

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function listInboundPlanBoxes($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listInboundPlanBoxesWithHttpInfo($inbound_plan_id, $page_size, $pagination_token);

        return $response;
    }

    public function listInboundPlanBoxesWithHttpInfo($inbound_plan_id, $page_size = null, $pagination_token = null){
        $request = $this->listInboundPlanBoxesRequest($inbound_plan_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListInboundPlanBoxesResponse::class);
    }

    protected function listInboundPlanBoxesRequest($inbound_plan_id, $page_size = null, $pagination_token = null)
    {

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/boxes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );
        // query params
        if (null !== $page_size) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (null !== $pagination_token) {
            $queryParams['paginationToken'] = ObjectSerializer::toQueryValue($pagination_token);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function cancelInboundPlan($inbound_plan_id)
    {
        // list($response) = $this->cancelInboundPlanWithHttpInfo($inbound_plan_id);

        // return $response;
    }

    public function listInboundPlanItems($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        // list($response) = $this->listInboundPlanItemsWithHttpInfo($inbound_plan_id, $page_size, $pagination_token);

        // return $response;
    }

    public function updateInboundPlanName($inbound_plan_id, $body)
    {
        // list($response) = $this->updateInboundPlanNameWithHttpInfo($inbound_plan_id,$body);

        // return $response;
    }

    public function listPackingGroupBoxes($inbound_plan_id, $packing_group_id, $page_size = null, $pagination_token = null)
    {
        // list($response) = $this->listPackingGroupBoxesWithHttpInfo($inbound_plan_id,$packing_group_id,$page_size, $pagination_token);

        // return $response;
    }

    public function listPackingGroupItems($inbound_plan_id, $packing_group_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listPackingGroupItemsWithHttpInfo($inbound_plan_id,$packing_group_id,$page_size, $pagination_token);

        return $response;
    }

    public function listPackingGroupItemsWithHttpInfo($inbound_plan_id, $packing_group_id, $page_size = null, $pagination_token = null){
        $request = $this->listPackingGroupItemsRequest($inbound_plan_id, $packing_group_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListPackingGroupItemsResponse::class);
    }

    protected function listPackingGroupItemsRequest($inbound_plan_id, $packing_group_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listPackingGroupItems');
        }
        if (null === $packing_group_id) {
            throw new \InvalidArgumentException('Missing the required parameter $packing_group_id when calling listPackingGroupItems');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingGroups/{packingGroupId}/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );
        $resourcePath = str_replace(
            '{packingGroupId}',
            ObjectSerializer::toPathValue($packing_group_id),
            $resourcePath
        );
        // query params
        if (null !== $page_size) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (null !== $pagination_token) {
            $queryParams['paginationToken'] = ObjectSerializer::toQueryValue($pagination_token);
        }
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function setPackingInformation($inbound_plan_id, $body)
    {
        list($response) = $this->setPackingInformationWithHttpInfo($inbound_plan_id, $body);

        return $response;
    }

    public function setPackingInformationWithHttpInfo($inbound_plan_id, $body)
    {
        $request = $this->setPackingInformationRequest($inbound_plan_id, $body);

        return $this->sendRequest($request, SetPackingInformationResponse::class);
    }

    protected function setPackingInformationRequest($inbound_plan_id, $body)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling setPackingInformation');
        }

        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling setPackingInformation');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingInformation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function listPackingOptions($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listPackingOptionsWithHttpInfo($inbound_plan_id, $page_size, $pagination_token);

        return $response;
    }

    public function listPackingOptionsWithHttpInfo($inbound_plan_id, $page_size = null, $pagination_token = null){
        $request = $this->listPackingOptionsRequest($inbound_plan_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListPackingOptionsResponse::class);
    }

    protected function listPackingOptionsRequest($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listPackingOptions');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );
        // query params
        if (null !== $page_size) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (null !== $pagination_token) {
            $queryParams['paginationToken'] = ObjectSerializer::toQueryValue($pagination_token);
        }
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function generatePackingOptions($inbound_plan_id)
    {
        list($response) = $this->generatePackingOptionsWithHttpInfo($inbound_plan_id);

        return $response;
    }

    public function generatePackingOptionsWithHttpInfo($inbound_plan_id)
    {
        $request = $this->generatePackingOptionsRequest($inbound_plan_id);

        return $this->sendRequest($request, GeneratePackingOptionsResponse::class);
    }

    protected function generatePackingOptionsRequest($inbound_plan_id)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling generatePackingOptions');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function confirmPackingOption($inbound_plan_id, $packing_option_id)
    {
        list($response) = $this->confirmPackingOptionWithHttpInfo($inbound_plan_id, $packing_option_id);

        return $response;
    }

    public function confirmPackingOptionWithHttpInfo($inbound_plan_id, $packing_option_id)
    {
        $request = $this->confirmPackingOptionRequest($inbound_plan_id, $packing_option_id);

        return $this->sendRequest($request, ConfirmPackingOptionResponse::class);
    }

    protected function confirmPackingOptionRequest($inbound_plan_id, $packing_option_id)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling confirmPackingOption');
        }
        if (null === $packing_option_id) {
            throw new \InvalidArgumentException('Missing the required parameter $packing_option_id when calling confirmPackingOption');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions/{packingOptionId}/confirmation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );
        $resourcePath = str_replace(
            '{packingOptionId}',
            ObjectSerializer::toPathValue($packing_option_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }


    public function listInboundPlanPallets($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        // list($response) = $this->listInboundPlanPalletsWithHttpInfo($inbound_plan_id, $page_size, $pagination_token);

        // return $response;
    }

    public function listPlacementOptions($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listPlacementOptionsWithHttpInfo($inbound_plan_id, $page_size, $pagination_token);

        return $response;
    }

    public function listPlacementOptionsWithHttpInfo($inbound_plan_id, $page_size = null, $pagination_token = null){
        $request = $this->listPlacementOptionsRequest($inbound_plan_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListPlacementOptionsResponse::class);
    }

    protected function listPlacementOptionsRequest($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listPackingOptions');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/placementOptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );
        // query params
        if (null !== $page_size) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (null !== $pagination_token) {
            $queryParams['paginationToken'] = ObjectSerializer::toQueryValue($pagination_token);
        }
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function generatePlacementOptions($inbound_plan_id, $body)
    {
        list($response) = $this->generatePlacementOptionsWithHttpInfo($inbound_plan_id, $body);

        return $response;
    }

    public function generatePlacementOptionsWithHttpInfo($inbound_plan_id, $body)
    {
        $request = $this->generatePlacementOptionsRequest($inbound_plan_id, $body);

        return $this->sendRequest($request, GeneratePlacementOptionsResponse::class);
    }

    protected function generatePlacementOptionsRequest($inbound_plan_id, $body)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling generatePlacementOptions');
        }
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling generatePlacementOptions');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function confirmPlacementOption($inbound_plan_id, $placement_option_id)
    {
        // list($response) = $this->confirmPlacementOptionWithHttpInfo($inbound_plan_id,$placement_option_id);

        // return $response;
    }

    public function getShipment($inbound_plan_id, $shipment_id)
    {
        // list($response) = $this->getShipmentWithHttpInfo($inbound_plan_id,$shipment_id);

        // return $response;
    }

    public function listShipmentBoxes($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        // list($response) = $this->listShipmentBoxesWithHttpInfo($inbound_plan_id,  $shipment_id, $page_size, $pagination_token);

        // return $response;
    }

    public function listShipmentContentUpdatePreviews($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        // list($response) = $this->listShipmentContentUpdatePreviewsWithHttpInfo($inbound_plan_id,  $shipment_id, $page_size, $pagination_token);

        // return $response;
    }

    public function generateShipmentContentUpdatePreviews($inbound_plan_id, $shipment_id, $body)
    {
        // list($response) = $this->generateShipmentContentUpdatePreviewsWithHttpInfo($inbound_plan_id,  $shipment_id, $body);

        // return $response;
    }

    public function getShipmentContentUpdatePreview($inbound_plan_id, $shipment_id, $content_update_preview_id)
    {
        // list($response) = $this->getShipmentContentUpdatePreviewWithHttpInfo($inbound_plan_id,  $shipment_id, $content_update_preview_id);

        // return $response;
    }

    public function confirmShipmentContentUpdatePreview($inbound_plan_id, $shipment_id, $content_update_preview_id)
    {
        // list($response) = $this->confirmShipmentContentUpdatePreviewWithHttpInfo($inbound_plan_id,  $shipment_id, $content_update_preview_id);

        // return $response;
    }

    public function getDeliveryChallanDocument($inbound_plan_id, $shipment_id)
    {
        // list($response) = $this->getDeliveryChallanDocumentWithHttpInfo($inbound_plan_id,  $shipment_id);

        // return $response;
    }

    public function listDeliveryWindowOptions($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        // list($response) = $this->listDeliveryWindowOptionsWithHttpInfo($inbound_plan_id,  $shipment_id, $page_size, $pagination_token);

        // return $response;
    }

    public function generateDeliveryWindowOptions($inbound_plan_id, $shipment_id)
    {
        // list($response) = $this->generateDeliveryWindowOptionsWithHttpInfo($inbound_plan_id,  $shipment_id);

        // return $response;
    }

    public function confirmDeliveryWindowOptions($inbound_plan_id, $shipment_id,$delivery_window_option_id)
    {
        // list($response) = $this->confirmDeliveryWindowOptionsWithHttpInfo($inbound_plan_id, $shipment_id, $delivery_window_option_id);

        // return $response;
    }

    public function listShipmentItems($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        // list($response) = $this->listShipmentItemsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        // return $response;
    }

    public function updateShipmentName($inbound_plan_id, $shipment_id, $body)
    {
        // list($response) = $this->updateShipmentNameWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        // return $response;
    }

    public function listShipmentPallets($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        // list($response) = $this->listShipmentPalletsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        // return $response;
    }

    public function cancelSelfShipAppointment($inbound_plan_id, $shipment_id, $body)
    {
        // list($response) = $this->cancelSelfShipAppointmentWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        // return $response;
    }

    public function getSelfShipAppointmentSlots($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        // list($response) = $this->getSelfShipAppointmentSlotsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        // return $response;
    }

    public function generateSelfShipAppointmentSlots($inbound_plan_id, $shipment_id, $body)
    {
        // list($response) = $this->generateSelfShipAppointmentSlotsWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        // return $response;
    }

    public function scheduleSelfShipAppointment($inbound_plan_id, $shipment_id, $slot_id, $body)
    {
        // list($response) = $this->scheduleSelfShipAppointmentWithHttpInfo($inbound_plan_id, $shipment_id, $slot_id, $body);

        // return $response;
    }

    public function updateShipmentSourceAddress($inbound_plan_id, $shipment_id, $body)
    {
        // list($response) = $this->updateShipmentSourceAddressWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        // return $response;
    }

    public function updateShipmentTrackingDetails($inbound_plan_id, $shipment_id, $body)
    {
        // list($response) = $this->updateShipmentTrackingDetailsWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        // return $response;
    }

    public function listTransportationOptions($inbound_plan_id, $page_size = null, $pagination_token = null, $placement_option_id = null, $shipment_id = null)
    {
        // list($response) = $this->listTransportationOptionsWithHttpInfo($inbound_plan_id, $page_size, $pagination_token, $placement_option_id, $shipment_id);

        // return $response;
    }

    public function generateTransportationOptions($inbound_plan_id, $body)
    {
        list($response) = $this->generateTransportationOptionsWithHttpInfo($inbound_plan_id, $body);

        return $response;
    }

    public function generateTransportationOptionsWithHttpInfo($inbound_plan_id, $body)
    {
        $request = $this->generateTransportationOptionsRequest($inbound_plan_id, $body);

        return $this->sendRequest($request, GenerateTransportationOptionsResponse::class);
    }

    protected function generateTransportationOptionsRequest($inbound_plan_id, $body)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling generateTransportationOptions');
        }
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling generateTransportationOptions');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/transportationOptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;
        $resourcePath = str_replace(
            '{inboundPlanId}',
            ObjectSerializer::toPathValue($inbound_plan_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }


    public function confirmTransportationOptions($inbound_plan_id, $body)
    {
        // list($response) = $this->confirmTransportationOptionsWithHttpInfo($inbound_plan_id, $body);

        // return $response;
    }

    public function listItemComplianceDetails($mskus, $marketplace_id)
    {
        // list($response) = $this->listItemComplianceDetailsWithHttpInfo($mskus, $marketplace_id);

        // return $response;
    }

    public function updateItemComplianceDetails($marketplace_id, $body)
    {
        // list($response) = $this->updateItemComplianceDetailsWithHttpInfo($marketplace_id, $body);

        // return $response;
    }

    public function createMarketplaceItemLabels($body)
    {
        // list($response) = $this->createMarketplaceItemLabelsWithHttpInfo($body);

        // return $response;
    }

    public function getInboundOperationStatus($operation_id)
    {
        // list($response) = $this->getInboundOperationStatusWithHttpInfo($operation_id);

        // return $response;
    }



}
