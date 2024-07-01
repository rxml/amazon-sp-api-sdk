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

    public function createInboundPlanAsync($body)
    {
        return $this->createInboundPlanAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function createInboundPlanAsyncWithHttpInfo($body)
    {
        $request = $this->createInboundPlanRequest($body);

        return $this->sendRequestAsync($request, CreateInboundShipmentPlanResponse::class);
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
        if (null !== $inbound_plan_id) {
            $resourcePath = str_replace(
                '{'.'inboundPlanId'.'}',
                ObjectSerializer::toPathValue($inbound_plan_id),
                $resourcePath
            );
        }
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
        if (null !== $inbound_plan_id) {
            $resourcePath = str_replace(
                '{'.'inboundPlanId'.'}',
                ObjectSerializer::toPathValue($inbound_plan_id),
                $resourcePath
            );
        }
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

}
