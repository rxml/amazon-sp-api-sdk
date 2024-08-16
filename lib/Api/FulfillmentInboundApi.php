<?php
/**
 * FulfillmentInboundApi.
 *
 * @author  molin
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
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GenerateDeliveryWindowOptionsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ConfirmPlacementOptionResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ConfirmDeliveryWindowOptionsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ConfirmTransportationOptionsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GetLabelsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GetBillOfLadingResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\UpdateShipmentTrackingDetailsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListShipmentItemsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\CancelInboundPlanResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListInboundPlanItemsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\UpdateInboundPlanNameResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListPackingGroupBoxesResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListInboundPlanPalletsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListShipmentBoxesResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListShipmentContentUpdatePreviewsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GenerateShipmentContentUpdatePreviewsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GetShipmentContentUpdatePreviewResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ConfirmShipmentContentUpdatePreviewResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GetDeliveryChallanDocumentResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListDeliveryWindowOptionsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\UpdateShipmentNameResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ListShipmentPalletsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\CancelSelfShipAppointmentResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GetSelfShipAppointmentSlotsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GenerateSelfShipAppointmentSlotsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ScheduleSelfShipAppointmentResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\UpdateShipmentSourceAddressResponse;

use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * FulfillmentInboundApi Class Doc Comment.
 *
 * @author  molin
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
        list($response) = $this->cancelInboundPlanWithHttpInfo($inbound_plan_id);

        return $response;
    }

    public function cancelInboundPlanWithHttpInfo($inbound_plan_id)
    {
        $request = $this->cancelInboundPlanRequest($inbound_plan_id);

        return $this->sendRequest($request, CancelInboundPlanResponse::class);
    }

    protected function cancelInboundPlanRequest($inbound_plan_id)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling cancelInboundPlan');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/cancellation';
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

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    public function listInboundPlanItems($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listInboundPlanItemsWithHttpInfo($inbound_plan_id, $page_size, $pagination_token);

        return $response;
    }

    public function listInboundPlanItemsWithHttpInfo($inbound_plan_id, $page_size = null, $pagination_token = null){
        $request = $this->listInboundPlanItemsRequest($inbound_plan_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListInboundPlanItemsResponse::class);
    }

    protected function listInboundPlanItemsRequest($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listInboundPlanItems');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/items';
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

    public function updateInboundPlanName($inbound_plan_id, $body)
    {
        list($response) = $this->updateInboundPlanNameWithHttpInfo($inbound_plan_id, $body);

        return $response;
    }

    public function updateInboundPlanNameWithHttpInfo($inbound_plan_id, $body)
    {
        $request = $this->updateInboundPlanNameRequest($inbound_plan_id, $body);

        return $this->sendRequest($request, UpdateInboundPlanNameResponse::class);
    }

    protected function updateInboundPlanNameRequest($inbound_plan_id, $body)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling updateInboundPlanName');
        }

        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateInboundPlanName');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/name';
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

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    public function listPackingGroupBoxes($inbound_plan_id, $packing_group_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listPackingGroupBoxesWithHttpInfo($inbound_plan_id,$packing_group_id,$page_size, $pagination_token);

        return $response;
    }

    public function listPackingGroupBoxesWithHttpInfo($inbound_plan_id, $packing_group_id, $page_size = null, $pagination_token = null){
        $request = $this->listPackingGroupBoxesRequest($inbound_plan_id, $packing_group_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListPackingGroupBoxesResponse::class);
    }

    protected function listPackingGroupBoxesRequest($inbound_plan_id, $packing_group_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listPackingGroupBoxes');
        }
        if (null === $packing_group_id) {
            throw new \InvalidArgumentException('Missing the required parameter $packing_group_id when calling listPackingGroupBoxes');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingGroups/{packingGroupId}/boxes';
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
        list($response) = $this->listInboundPlanPalletsWithHttpInfo($inbound_plan_id, $page_size, $pagination_token);

        return $response;
    }

    public function listInboundPlanPalletsWithHttpInfo($inbound_plan_id, $page_size = null, $pagination_token = null){
        $request = $this->listInboundPlanPalletsRequest($inbound_plan_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListInboundPlanPalletsResponse::class);
    }

    protected function listInboundPlanPalletsRequest($inbound_plan_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listInboundPlanPallets');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/pallets';
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
        list($response) = $this->confirmPlacementOptionWithHttpInfo($inbound_plan_id, $placement_option_id);

        return $response;
    }

    public function confirmPlacementOptionWithHttpInfo($inbound_plan_id, $placement_option_id)
    {
        $request = $this->confirmPlacementOptionRequest($inbound_plan_id, $placement_option_id);

        return $this->sendRequest($request, ConfirmPlacementOptionResponse::class);
    }

    protected function confirmPlacementOptionRequest($inbound_plan_id, $placement_option_id)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling confirmPlacementOption');
        }
        if (null === $placement_option_id) {
            throw new \InvalidArgumentException('Missing the required parameter $placement_option_id when calling confirmPlacementOption');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/placementOptions/{placementOptionId}/confirmation';
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
            '{placementOptionId}',
            ObjectSerializer::toPathValue($placement_option_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function getShipment($inbound_plan_id, $shipment_id)
    {
        list($response) = $this->getShipmentWithHttpInfo($inbound_plan_id, $shipment_id);

        return $response;
    }

    public function getShipmentWithHttpInfo($inbound_plan_id, $shipment_id){
        $request = $this->getShipmentRequest($inbound_plan_id, $shipment_id);

        return $this->sendRequest($request, ShipmentResponse::class);
    }

    protected function getShipmentRequest($inbound_plan_id, $shipment_id)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling getShipment');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling getShipment');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function listShipmentBoxes($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listShipmentBoxesWithHttpInfo($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $response;
    }

    public function listShipmentBoxesWithHttpInfo($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null){
        $request = $this->listShipmentBoxesRequest($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListShipmentBoxesResponse::class);
    }

    protected function listShipmentBoxesRequest($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listShipmentBoxes');
        }

        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling listShipmentBoxes');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/boxes';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
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

    public function listShipmentContentUpdatePreviews($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listShipmentContentUpdatePreviewsWithHttpInfo($inbound_plan_id,  $shipment_id, $page_size, $pagination_token);

        return $response;
    }

    public function listShipmentContentUpdatePreviewsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null){
        $request = $this->listShipmentContentUpdatePreviewsRequest($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListShipmentContentUpdatePreviewsResponse::class);
    }

    protected function listShipmentContentUpdatePreviewsRequest($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listShipmentContentUpdatePreviews');
        }

        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling listShipmentContentUpdatePreviews');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/contentUpdatePreviews';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
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

    public function generateShipmentContentUpdatePreviews($inbound_plan_id, $shipment_id, $body)
    {
        list($response) = $this->generateShipmentContentUpdatePreviewsWithHttpInfo($inbound_plan_id,  $shipment_id, $body);

        return $response;
    }

    public function generateShipmentContentUpdatePreviewsWithHttpInfo($inbound_plan_id, $shipment_id, $body)
    {
        $request = $this->generateShipmentContentUpdatePreviewsRequest($inbound_plan_id, $shipment_id, $body);

        return $this->sendRequest($request, GenerateShipmentContentUpdatePreviewsResponse::class);
    }

    protected function generateShipmentContentUpdatePreviewsRequest($inbound_plan_id, $shipment_id, $body)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling generateShipmentContentUpdatePreviews');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling generateShipmentContentUpdatePreviews');
        }
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling generateShipmentContentUpdatePreviews');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/contentUpdatePreviews';
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
        $resourcePath = str_replace(
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function getShipmentContentUpdatePreview($inbound_plan_id, $shipment_id, $content_update_preview_id)
    {
        list($response) = $this->getShipmentContentUpdatePreviewWithHttpInfo($inbound_plan_id,  $shipment_id, $content_update_preview_id);

        return $response;
    }

    public function getShipmentContentUpdatePreviewWithHttpInfo($inbound_plan_id, $shipment_id, $content_update_preview_id){
        $request = $this->getShipmentContentUpdatePreviewRequest($inbound_plan_id, $shipment_id, $content_update_preview_id);

        return $this->sendRequest($request, GetShipmentContentUpdatePreviewResponse::class);
    }

    protected function getShipmentContentUpdatePreviewRequest($inbound_plan_id,  $shipment_id, $content_update_preview_id)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling getShipmentContentUpdatePreview');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling getShipmentContentUpdatePreview');
        }
        if (null === $content_update_preview_id) {
            throw new \InvalidArgumentException('Missing the required parameter $content_update_preview_id when calling getShipmentContentUpdatePreview');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/contentUpdatePreviews/{contentUpdatePreviewId}';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );
        $resourcePath = str_replace(
            '{contentUpdatePreviewId}',
            ObjectSerializer::toPathValue($content_update_preview_id),
            $resourcePath
        );
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function confirmShipmentContentUpdatePreview($inbound_plan_id, $shipment_id, $content_update_preview_id)
    {
        list($response) = $this->confirmShipmentContentUpdatePreviewWithHttpInfo($inbound_plan_id, $shipment_id, $content_update_preview_id);

        return $response;
    }

    public function confirmShipmentContentUpdatePreviewWithHttpInfo($inbound_plan_id, $shipment_id, $content_update_preview_id)
    {
        $request = $this->confirmShipmentContentUpdatePreviewRequest($inbound_plan_id, $shipment_id, $content_update_preview_id);

        return $this->sendRequest($request, ConfirmShipmentContentUpdatePreviewResponse::class);
    }

    protected function confirmShipmentContentUpdatePreviewRequest($inbound_plan_id, $shipment_id, $content_update_preview_id)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling confirmShipmentContentUpdatePreview');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling confirmShipmentContentUpdatePreview');
        }
        if (null === $content_update_preview_id) {
            throw new \InvalidArgumentException('Missing the required parameter $delivery_window_option_id when calling confirmShipmentContentUpdatePreview');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/contentUpdatePreviews/{contentUpdatePreviewId}/confirmation';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );

        $resourcePath = str_replace(
            '{contentUpdatePreviewId}',
            ObjectSerializer::toPathValue($content_update_preview_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function getDeliveryChallanDocument($inbound_plan_id, $shipment_id)
    {
        list($response) = $this->getDeliveryChallanDocumentWithHttpInfo($inbound_plan_id,  $shipment_id);

        return $response;
    }

    public function getDeliveryChallanDocumentWithHttpInfo($inbound_plan_id, $shipment_id){
        $request = $this->getDeliveryChallanDocumentRequest($inbound_plan_id, $shipment_id);

        return $this->sendRequest($request, GetDeliveryChallanDocumentResponse::class);
    }

    protected function getDeliveryChallanDocumentRequest($inbound_plan_id,  $shipment_id)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling getDeliveryChallanDocument');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling getDeliveryChallanDocument');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryChallanDocument';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function listDeliveryWindowOptions($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listDeliveryWindowOptionsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $response;
    }

    public function listDeliveryWindowOptionsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null){
        $request = $this->listDeliveryWindowOptionsRequest($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListDeliveryWindowOptionsResponse::class);
    }

    protected function listDeliveryWindowOptionsRequest($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listDeliveryWindowOptions');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling listDeliveryWindowOptions');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryWindowOptions';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
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

    public function generateDeliveryWindowOptions($inbound_plan_id, $shipment_id)
    {
        list($response) = $this->generateDeliveryWindowOptionsWithHttpInfo($inbound_plan_id,  $shipment_id);

        return $response;
    }

     public function generateDeliveryWindowOptionsWithHttpInfo($inbound_plan_id, $shipment_id)
    {
        $request = $this->generateDeliveryWindowOptionsRequest($inbound_plan_id, $shipment_id);

        return $this->sendRequest($request, GenerateDeliveryWindowOptionsResponse::class);
    }

    protected function generateDeliveryWindowOptionsRequest($inbound_plan_id, $shipment_id)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling generateDeliveryWindowOptions');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling generateDeliveryWindowOptions');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryWindowOptions';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function confirmDeliveryWindowOptions($inbound_plan_id, $shipment_id, $delivery_window_option_id)
    {
        list($response) = $this->confirmDeliveryWindowOptionsWithHttpInfo($inbound_plan_id, $shipment_id, $delivery_window_option_id);

        return $response;
    }

    public function confirmDeliveryWindowOptionsWithHttpInfo($inbound_plan_id, $shipment_id, $delivery_window_option_id)
    {
        $request = $this->confirmDeliveryWindowOptionsRequest($inbound_plan_id, $shipment_id, $delivery_window_option_id);

        return $this->sendRequest($request, ConfirmDeliveryWindowOptionsResponse::class);
    }

    protected function confirmDeliveryWindowOptionsRequest($inbound_plan_id, $shipment_id, $delivery_window_option_id)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling confirmDeliveryWindowOptions');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling confirmDeliveryWindowOptions');
        }
        if (null === $delivery_window_option_id) {
            throw new \InvalidArgumentException('Missing the required parameter $delivery_window_option_id when calling confirmDeliveryWindowOptions');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryWindowOptions/{deliveryWindowOptionId}/confirmation';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );

        $resourcePath = str_replace(
            '{deliveryWindowOptionId}',
            ObjectSerializer::toPathValue($delivery_window_option_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function listShipmentItems($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listShipmentItemsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $response;
    }

    public function listShipmentItemsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null){
        $request = $this->listShipmentItemsRequest($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListShipmentItemsResponse::class);
    }

    protected function listShipmentItemsRequest($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listShipmentItems');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling listShipmentItems');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/items';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
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

    public function updateShipmentName($inbound_plan_id, $shipment_id, $body)
    {
        list($response) = $this->updateShipmentNameWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        return $response;
    }

    public function updateShipmentNameWithHttpInfo($inbound_plan_id, $shipment_id, $body)
    {
        $request = $this->updateShipmentNameRequest($inbound_plan_id, $shipment_id, $body);

        return $this->sendRequest($request, UpdateShipmentNameResponse::class);
    }

    protected function updateShipmentNameRequest($inbound_plan_id, $shipment_id, $body)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling updateShipmentName');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling updateShipmentName');
        }

        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateShipmentName');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/name';
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
        $resourcePath = str_replace(
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    public function listShipmentPallets($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->listShipmentPalletsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $response;
    }

    public function listShipmentPalletsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null){
        $request = $this->listShipmentPalletsRequest($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $this->sendRequest($request, ListShipmentPalletsResponse::class);
    }

    protected function listShipmentPalletsRequest($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling listShipmentPallets');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling listShipmentPallets');
        }
        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/pallets';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
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

    public function cancelSelfShipAppointment($inbound_plan_id, $shipment_id, $body)
    {
        list($response) = $this->cancelSelfShipAppointmentWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        return $response;
    }

    public function cancelSelfShipAppointmentWithHttpInfo($inbound_plan_id, $shipment_id, $body)
    {
        $request = $this->cancelSelfShipAppointmentRequest($inbound_plan_id, $shipment_id, $body);

        return $this->sendRequest($request, CancelSelfShipAppointmentResponse::class);
    }

    protected function cancelSelfShipAppointmentRequest($inbound_plan_id, $shipment_id, $body)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling cancelSelfShipAppointment');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling cancelSelfShipAppointment');
        }
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling cancelSelfShipAppointment');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentCancellation';
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
        $resourcePath = str_replace(
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    public function getSelfShipAppointmentSlots($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        list($response) = $this->getSelfShipAppointmentSlotsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $response;
    }

    public function getSelfShipAppointmentSlotsWithHttpInfo($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        $request = $this->getSelfShipAppointmentSlotsRequest($inbound_plan_id, $shipment_id, $page_size, $pagination_token);

        return $this->sendRequest($request, GetSelfShipAppointmentSlotsResponse::class);
    }

    protected function getSelfShipAppointmentSlotsRequest($inbound_plan_id, $shipment_id, $page_size = null, $pagination_token = null)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling getSelfShipAppointmentSlots');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling getSelfShipAppointmentSlots');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots';
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
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
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

    public function generateSelfShipAppointmentSlots($inbound_plan_id, $shipment_id, $body)
    {
        list($response) = $this->generateSelfShipAppointmentSlotsWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        return $response;
    }

    public function generateSelfShipAppointmentSlotsWithHttpInfo($inbound_plan_id, $shipment_id, $body)
    {
        $request = $this->generateSelfShipAppointmentSlotsRequest($inbound_plan_id, $shipment_id, $body);

        return $this->sendRequest($request, GenerateSelfShipAppointmentSlotsResponse::class);
    }

    protected function generateSelfShipAppointmentSlotsRequest($inbound_plan_id, $shipment_id, $body)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling generateSelfShipAppointmentSlots');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling generateSelfShipAppointmentSlots');
        }
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling generateSelfShipAppointmentSlots');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots';
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
        $resourcePath = str_replace(
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function scheduleSelfShipAppointment($inbound_plan_id, $shipment_id, $slot_id, $body)
    {
        list($response) = $this->scheduleSelfShipAppointmentWithHttpInfo($inbound_plan_id, $shipment_id, $slot_id, $body);

        return $response;
    }

    public function scheduleSelfShipAppointmentWithHttpInfo($inbound_plan_id, $shipment_id, $slot_id, $body)
    {
        $request = $this->scheduleSelfShipAppointmentRequest($inbound_plan_id, $shipment_id, $slot_id, $body);

        return $this->sendRequest($request, ScheduleSelfShipAppointmentResponse::class);
    }

    protected function scheduleSelfShipAppointmentRequest($inbound_plan_id, $shipment_id, $slot_id, $body)
    {
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling scheduleSelfShipAppointment');
        }
        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling scheduleSelfShipAppointment');
        }
        if (null === $slot_id) {
            throw new \InvalidArgumentException('Missing the required parameter $slot_id when calling scheduleSelfShipAppointment');
        }
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling scheduleSelfShipAppointment');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots/{slotId}/schedule';
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
        $resourcePath = str_replace(
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );
        $resourcePath = str_replace(
            '{slotId}',
            ObjectSerializer::toPathValue($slot_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function updateShipmentSourceAddress($inbound_plan_id, $shipment_id, $body)
    {
        list($response) = $this->updateShipmentSourceAddressWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        return $response;
    }

    public function updateShipmentSourceAddressWithHttpInfo($inbound_plan_id, $shipment_id, $body)
    {
        $request = $this->updateShipmentSourceAddressRequest($inbound_plan_id, $shipment_id, $body);

        return $this->sendRequest($request, UpdateShipmentSourceAddressResponse::class);
    }

    protected function updateShipmentSourceAddressRequest($inbound_plan_id, $shipment_id, $body)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling updateShipmentSourceAddress');
        }

        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling updateShipmentSourceAddress');
        }

        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateShipmentSourceAddress');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/sourceAddress';
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
        $resourcePath = str_replace(
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    public function updateShipmentTrackingDetails($inbound_plan_id, $shipment_id, $body)
    {
        list($response) = $this->updateShipmentTrackingDetailsWithHttpInfo($inbound_plan_id, $shipment_id, $body);

        return $response;
    }

    public function updateShipmentTrackingDetailsWithHttpInfo($inbound_plan_id, $shipment_id, $body)
    {
        $request = $this->updateShipmentTrackingDetailsRequest($inbound_plan_id, $shipment_id, $body);

        return $this->sendRequest($request, UpdateShipmentTrackingDetailsResponse::class);
    }

    protected function updateShipmentTrackingDetailsRequest($inbound_plan_id, $shipment_id, $body)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling updateShipmentTrackingDetails');
        }

        if (null === $shipment_id) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling updateShipmentTrackingDetails');
        }

        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateShipmentTrackingDetails');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/trackingDetails';
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
        $resourcePath = str_replace(
            '{shipmentId}',
            ObjectSerializer::toPathValue($shipment_id),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
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
        list($response) = $this->confirmTransportationOptionsWithHttpInfo($inbound_plan_id, $body);

        return $response;
    }

    public function confirmTransportationOptionsWithHttpInfo($inbound_plan_id, $body)
    {
        $request = $this->confirmTransportationOptionsRequest($inbound_plan_id, $body);

        return $this->sendRequest($request, ConfirmTransportationOptionsResponse::class);
    }

    protected function confirmTransportationOptionsRequest($inbound_plan_id, $body)
    {
        // verify the required parameter 'body' is set
        if (null === $inbound_plan_id) {
            throw new \InvalidArgumentException('Missing the required parameter $inbound_plan_id when calling confirmTransportationOptions');
        }

        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling confirmTransportationOptions');
        }

        $resourcePath = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/transportationOptions/confirmation';
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

    public function getLabels($shipment_id, $page_type, $label_type, $number_of_packages = null, $package_labels_to_print = null, $number_of_pallets = null, $page_size = null, $page_start_index = null)
    {
        list($response) = $this->getLabelsWithHttpInfo($shipment_id, $page_type, $label_type, $number_of_packages, $package_labels_to_print, $number_of_pallets, $page_size, $page_start_index);

        return $response;
    }

    public function getLabelsWithHttpInfo($shipment_id, $page_type, $label_type, $number_of_packages = null, $package_labels_to_print = null, $number_of_pallets = null, $page_size = null, $page_start_index = null)
    {
        $request = $this->getLabelsRequest($shipment_id, $page_type, $label_type, $number_of_packages, $package_labels_to_print, $number_of_pallets, $page_size, $page_start_index);

        return $this->sendRequest($request, GetLabelsResponse::class);
    }

    protected function getLabelsRequest($shipment_id, $page_type, $label_type, $number_of_packages = null, $package_labels_to_print = null, $number_of_pallets = null, $page_size = null, $page_start_index = null)
    {
        // verify the required parameter 'shipment_id' is set
        if (null === $shipment_id || (is_array($shipment_id) && 0 === count($shipment_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling getLabels');
        }
        // verify the required parameter 'page_type' is set
        if (null === $page_type || (is_array($page_type) && 0 === count($page_type))) {
            throw new \InvalidArgumentException('Missing the required parameter $page_type when calling getLabels');
        }
        // verify the required parameter 'label_type' is set
        if (null === $label_type || (is_array($label_type) && 0 === count($label_type))) {
            throw new \InvalidArgumentException('Missing the required parameter $label_type when calling getLabels');
        }

        $resourcePath = '/fba/inbound/v0/shipments/{shipmentId}/labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $page_type) {
            $queryParams['PageType'] = ObjectSerializer::toQueryValue($page_type);
        }
        // query params
        if (null !== $label_type) {
            $queryParams['LabelType'] = ObjectSerializer::toQueryValue($label_type);
        }
        // query params
        if (null !== $number_of_packages) {
            $queryParams['NumberOfPackages'] = ObjectSerializer::toQueryValue($number_of_packages);
        }
        // query params
        if (null !== $page_size) {
            $queryParams['PageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (null !== $page_start_index) {
            $queryParams['PageStartIndex'] = ObjectSerializer::toQueryValue($page_start_index);
        }
        // query params
        if (is_array($package_labels_to_print)) {
            $package_labels_to_print = ObjectSerializer::serializeCollection($package_labels_to_print, 'csv', true);
        }
        if (null !== $package_labels_to_print) {
            $queryParams['PackageLabelsToPrint'] = ObjectSerializer::toQueryValue($package_labels_to_print);
        }
        // query params
        if (null !== $number_of_pallets) {
            $queryParams['NumberOfPallets'] = ObjectSerializer::toQueryValue($number_of_pallets);
        }

        // path params
        if (null !== $shipment_id) {
            $resourcePath = str_replace(
                '{'.'shipmentId'.'}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function getBillOfLading($shipment_id)
    {
        list($response) = $this->getBillOfLadingWithHttpInfo($shipment_id);

        return $response;
    }

    public function getBillOfLadingWithHttpInfo($shipment_id)
    {
        $request = $this->getBillOfLadingRequest($shipment_id);

        return $this->sendRequest($request, GetBillOfLadingResponse::class);
    }

    protected function getBillOfLadingRequest($shipment_id)
    {
        // verify the required parameter 'shipment_id' is set
        if (null === $shipment_id || (is_array($shipment_id) && 0 === count($shipment_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $shipment_id when calling getBillOfLading');
        }

        $resourcePath = '/fba/inbound/v0/shipments/{shipmentId}/billOfLading';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $shipment_id) {
            $resourcePath = str_replace(
                '{'.'shipmentId'.'}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }



}
