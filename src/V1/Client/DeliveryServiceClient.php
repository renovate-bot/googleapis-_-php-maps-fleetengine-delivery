<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/maps/fleetengine/delivery/v1/delivery_api.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Maps\FleetEngine\Delivery\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Maps\FleetEngine\Delivery\V1\BatchCreateTasksRequest;
use Google\Maps\FleetEngine\Delivery\V1\BatchCreateTasksResponse;
use Google\Maps\FleetEngine\Delivery\V1\CreateDeliveryVehicleRequest;
use Google\Maps\FleetEngine\Delivery\V1\CreateTaskRequest;
use Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicle;
use Google\Maps\FleetEngine\Delivery\V1\GetDeliveryVehicleRequest;
use Google\Maps\FleetEngine\Delivery\V1\GetTaskRequest;
use Google\Maps\FleetEngine\Delivery\V1\GetTaskTrackingInfoRequest;
use Google\Maps\FleetEngine\Delivery\V1\ListDeliveryVehiclesRequest;
use Google\Maps\FleetEngine\Delivery\V1\ListTasksRequest;
use Google\Maps\FleetEngine\Delivery\V1\Task;
use Google\Maps\FleetEngine\Delivery\V1\TaskTrackingInfo;
use Google\Maps\FleetEngine\Delivery\V1\UpdateDeliveryVehicleRequest;
use Google\Maps\FleetEngine\Delivery\V1\UpdateTaskRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The Last Mile Delivery service.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface batchCreateTasksAsync(BatchCreateTasksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createDeliveryVehicleAsync(CreateDeliveryVehicleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createTaskAsync(CreateTaskRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDeliveryVehicleAsync(GetDeliveryVehicleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getTaskAsync(GetTaskRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getTaskTrackingInfoAsync(GetTaskTrackingInfoRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDeliveryVehiclesAsync(ListDeliveryVehiclesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listTasksAsync(ListTasksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDeliveryVehicleAsync(UpdateDeliveryVehicleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateTaskAsync(UpdateTaskRequest $request, array $optionalArgs = [])
 */
final class DeliveryServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'maps.fleetengine.delivery.v1.DeliveryService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'fleetengine.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'fleetengine.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/delivery_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/delivery_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/delivery_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/delivery_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * delivery_vehicle resource.
     *
     * @param string $provider
     * @param string $vehicle
     *
     * @return string The formatted delivery_vehicle resource.
     */
    public static function deliveryVehicleName(string $provider, string $vehicle): string
    {
        return self::getPathTemplate('deliveryVehicle')->render([
            'provider' => $provider,
            'vehicle' => $vehicle,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a provider
     * resource.
     *
     * @param string $provider
     *
     * @return string The formatted provider resource.
     */
    public static function providerName(string $provider): string
    {
        return self::getPathTemplate('provider')->render([
            'provider' => $provider,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a task
     * resource.
     *
     * @param string $provider
     * @param string $task
     *
     * @return string The formatted task resource.
     */
    public static function taskName(string $provider, string $task): string
    {
        return self::getPathTemplate('task')->render([
            'provider' => $provider,
            'task' => $task,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * task_tracking_info resource.
     *
     * @param string $provider
     * @param string $tracking
     *
     * @return string The formatted task_tracking_info resource.
     */
    public static function taskTrackingInfoName(string $provider, string $tracking): string
    {
        return self::getPathTemplate('taskTrackingInfo')->render([
            'provider' => $provider,
            'tracking' => $tracking,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - deliveryVehicle: providers/{provider}/deliveryVehicles/{vehicle}
     * - provider: providers/{provider}
     * - task: providers/{provider}/tasks/{task}
     * - taskTrackingInfo: providers/{provider}/taskTrackingInfo/{tracking}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'fleetengine.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates and returns a batch of new `Task` objects.
     *
     * The async variant is {@see DeliveryServiceClient::batchCreateTasksAsync()} .
     *
     * @example samples/V1/DeliveryServiceClient/batch_create_tasks.php
     *
     * @param BatchCreateTasksRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return BatchCreateTasksResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchCreateTasks(
        BatchCreateTasksRequest $request,
        array $callOptions = []
    ): BatchCreateTasksResponse {
        return $this->startApiCall('BatchCreateTasks', $request, $callOptions)->wait();
    }

    /**
     * Creates and returns a new `DeliveryVehicle`.
     *
     * The async variant is {@see DeliveryServiceClient::createDeliveryVehicleAsync()}
     * .
     *
     * @example samples/V1/DeliveryServiceClient/create_delivery_vehicle.php
     *
     * @param CreateDeliveryVehicleRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DeliveryVehicle
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createDeliveryVehicle(
        CreateDeliveryVehicleRequest $request,
        array $callOptions = []
    ): DeliveryVehicle {
        return $this->startApiCall('CreateDeliveryVehicle', $request, $callOptions)->wait();
    }

    /**
     * Creates and returns a new `Task` object.
     *
     * The async variant is {@see DeliveryServiceClient::createTaskAsync()} .
     *
     * @example samples/V1/DeliveryServiceClient/create_task.php
     *
     * @param CreateTaskRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Task
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTask(CreateTaskRequest $request, array $callOptions = []): Task
    {
        return $this->startApiCall('CreateTask', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified `DeliveryVehicle` instance.
     *
     * The async variant is {@see DeliveryServiceClient::getDeliveryVehicleAsync()} .
     *
     * @example samples/V1/DeliveryServiceClient/get_delivery_vehicle.php
     *
     * @param GetDeliveryVehicleRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DeliveryVehicle
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDeliveryVehicle(GetDeliveryVehicleRequest $request, array $callOptions = []): DeliveryVehicle
    {
        return $this->startApiCall('GetDeliveryVehicle', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a `Task`.
     *
     * The async variant is {@see DeliveryServiceClient::getTaskAsync()} .
     *
     * @example samples/V1/DeliveryServiceClient/get_task.php
     *
     * @param GetTaskRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Task
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTask(GetTaskRequest $request, array $callOptions = []): Task
    {
        return $this->startApiCall('GetTask', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified `TaskTrackingInfo` instance.
     *
     * The async variant is {@see DeliveryServiceClient::getTaskTrackingInfoAsync()} .
     *
     * @example samples/V1/DeliveryServiceClient/get_task_tracking_info.php
     *
     * @param GetTaskTrackingInfoRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TaskTrackingInfo
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTaskTrackingInfo(GetTaskTrackingInfoRequest $request, array $callOptions = []): TaskTrackingInfo
    {
        return $this->startApiCall('GetTaskTrackingInfo', $request, $callOptions)->wait();
    }

    /**
     * Gets all `DeliveryVehicle`s that meet the specified filtering criteria.
     *
     * The async variant is {@see DeliveryServiceClient::listDeliveryVehiclesAsync()} .
     *
     * @example samples/V1/DeliveryServiceClient/list_delivery_vehicles.php
     *
     * @param ListDeliveryVehiclesRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listDeliveryVehicles(
        ListDeliveryVehiclesRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListDeliveryVehicles', $request, $callOptions);
    }

    /**
     * Gets all `Task`s that meet the specified filtering criteria.
     *
     * The async variant is {@see DeliveryServiceClient::listTasksAsync()} .
     *
     * @example samples/V1/DeliveryServiceClient/list_tasks.php
     *
     * @param ListTasksRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listTasks(ListTasksRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTasks', $request, $callOptions);
    }

    /**
     * Writes updated `DeliveryVehicle` data to Fleet Engine, and assigns
     * `Tasks` to the `DeliveryVehicle`. You cannot update the name of the
     * `DeliveryVehicle`. You *can* update `remaining_vehicle_journey_segments`
     * though, but it must contain all of the `VehicleJourneySegment`s currently
     * on the `DeliveryVehicle`. The `task_id`s are retrieved from
     * `remaining_vehicle_journey_segments`, and their corresponding `Tasks` are
     * assigned to the `DeliveryVehicle` if they have not yet been assigned.
     *
     * The async variant is {@see DeliveryServiceClient::updateDeliveryVehicleAsync()}
     * .
     *
     * @example samples/V1/DeliveryServiceClient/update_delivery_vehicle.php
     *
     * @param UpdateDeliveryVehicleRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DeliveryVehicle
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateDeliveryVehicle(
        UpdateDeliveryVehicleRequest $request,
        array $callOptions = []
    ): DeliveryVehicle {
        return $this->startApiCall('UpdateDeliveryVehicle', $request, $callOptions)->wait();
    }

    /**
     * Updates `Task` data.
     *
     * The async variant is {@see DeliveryServiceClient::updateTaskAsync()} .
     *
     * @example samples/V1/DeliveryServiceClient/update_task.php
     *
     * @param UpdateTaskRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Task
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateTask(UpdateTaskRequest $request, array $callOptions = []): Task
    {
        return $this->startApiCall('UpdateTask', $request, $callOptions)->wait();
    }
}