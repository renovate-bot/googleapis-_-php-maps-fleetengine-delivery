<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/tasks.proto

namespace Google\Maps\FleetEngine\Delivery\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration message that defines when a data element of a Task should
 * be visible to the end users.
 *
 * Generated from protobuf message <code>maps.fleetengine.delivery.v1.TaskTrackingViewConfig</code>
 */
class TaskTrackingViewConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The field that specifies when route polyline points can be visible. If this
     * field is not specified, the project level default visibility configuration
     * for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption route_polyline_points_visibility = 1;</code>
     */
    protected $route_polyline_points_visibility = null;
    /**
     * The field that specifies when estimated arrival time can be visible. If
     * this field is not specified, the project level default visibility
     * configuration for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption estimated_arrival_time_visibility = 2;</code>
     */
    protected $estimated_arrival_time_visibility = null;
    /**
     * The field that specifies when estimated task completion time can be
     * visible. If this field is not specified, the project level default
     * visibility configuration for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption estimated_task_completion_time_visibility = 3;</code>
     */
    protected $estimated_task_completion_time_visibility = null;
    /**
     * The field that specifies when remaining driving distance can be visible. If
     * this field is not specified, the project level default visibility
     * configuration for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption remaining_driving_distance_visibility = 4;</code>
     */
    protected $remaining_driving_distance_visibility = null;
    /**
     * The field that specifies when remaining stop count can be visible. If this
     * field is not specified, the project level default visibility configuration
     * for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption remaining_stop_count_visibility = 5;</code>
     */
    protected $remaining_stop_count_visibility = null;
    /**
     * The field that specifies when vehicle location can be visible. If this
     * field is not specified, the project level default visibility configuration
     * for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption vehicle_location_visibility = 6;</code>
     */
    protected $vehicle_location_visibility = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $route_polyline_points_visibility
     *           The field that specifies when route polyline points can be visible. If this
     *           field is not specified, the project level default visibility configuration
     *           for this data will be used.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $estimated_arrival_time_visibility
     *           The field that specifies when estimated arrival time can be visible. If
     *           this field is not specified, the project level default visibility
     *           configuration for this data will be used.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $estimated_task_completion_time_visibility
     *           The field that specifies when estimated task completion time can be
     *           visible. If this field is not specified, the project level default
     *           visibility configuration for this data will be used.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $remaining_driving_distance_visibility
     *           The field that specifies when remaining driving distance can be visible. If
     *           this field is not specified, the project level default visibility
     *           configuration for this data will be used.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $remaining_stop_count_visibility
     *           The field that specifies when remaining stop count can be visible. If this
     *           field is not specified, the project level default visibility configuration
     *           for this data will be used.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $vehicle_location_visibility
     *           The field that specifies when vehicle location can be visible. If this
     *           field is not specified, the project level default visibility configuration
     *           for this data will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * The field that specifies when route polyline points can be visible. If this
     * field is not specified, the project level default visibility configuration
     * for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption route_polyline_points_visibility = 1;</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption|null
     */
    public function getRoutePolylinePointsVisibility()
    {
        return $this->route_polyline_points_visibility;
    }

    public function hasRoutePolylinePointsVisibility()
    {
        return isset($this->route_polyline_points_visibility);
    }

    public function clearRoutePolylinePointsVisibility()
    {
        unset($this->route_polyline_points_visibility);
    }

    /**
     * The field that specifies when route polyline points can be visible. If this
     * field is not specified, the project level default visibility configuration
     * for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption route_polyline_points_visibility = 1;</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $var
     * @return $this
     */
    public function setRoutePolylinePointsVisibility($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption::class);
        $this->route_polyline_points_visibility = $var;

        return $this;
    }

    /**
     * The field that specifies when estimated arrival time can be visible. If
     * this field is not specified, the project level default visibility
     * configuration for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption estimated_arrival_time_visibility = 2;</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption|null
     */
    public function getEstimatedArrivalTimeVisibility()
    {
        return $this->estimated_arrival_time_visibility;
    }

    public function hasEstimatedArrivalTimeVisibility()
    {
        return isset($this->estimated_arrival_time_visibility);
    }

    public function clearEstimatedArrivalTimeVisibility()
    {
        unset($this->estimated_arrival_time_visibility);
    }

    /**
     * The field that specifies when estimated arrival time can be visible. If
     * this field is not specified, the project level default visibility
     * configuration for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption estimated_arrival_time_visibility = 2;</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $var
     * @return $this
     */
    public function setEstimatedArrivalTimeVisibility($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption::class);
        $this->estimated_arrival_time_visibility = $var;

        return $this;
    }

    /**
     * The field that specifies when estimated task completion time can be
     * visible. If this field is not specified, the project level default
     * visibility configuration for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption estimated_task_completion_time_visibility = 3;</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption|null
     */
    public function getEstimatedTaskCompletionTimeVisibility()
    {
        return $this->estimated_task_completion_time_visibility;
    }

    public function hasEstimatedTaskCompletionTimeVisibility()
    {
        return isset($this->estimated_task_completion_time_visibility);
    }

    public function clearEstimatedTaskCompletionTimeVisibility()
    {
        unset($this->estimated_task_completion_time_visibility);
    }

    /**
     * The field that specifies when estimated task completion time can be
     * visible. If this field is not specified, the project level default
     * visibility configuration for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption estimated_task_completion_time_visibility = 3;</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $var
     * @return $this
     */
    public function setEstimatedTaskCompletionTimeVisibility($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption::class);
        $this->estimated_task_completion_time_visibility = $var;

        return $this;
    }

    /**
     * The field that specifies when remaining driving distance can be visible. If
     * this field is not specified, the project level default visibility
     * configuration for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption remaining_driving_distance_visibility = 4;</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption|null
     */
    public function getRemainingDrivingDistanceVisibility()
    {
        return $this->remaining_driving_distance_visibility;
    }

    public function hasRemainingDrivingDistanceVisibility()
    {
        return isset($this->remaining_driving_distance_visibility);
    }

    public function clearRemainingDrivingDistanceVisibility()
    {
        unset($this->remaining_driving_distance_visibility);
    }

    /**
     * The field that specifies when remaining driving distance can be visible. If
     * this field is not specified, the project level default visibility
     * configuration for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption remaining_driving_distance_visibility = 4;</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $var
     * @return $this
     */
    public function setRemainingDrivingDistanceVisibility($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption::class);
        $this->remaining_driving_distance_visibility = $var;

        return $this;
    }

    /**
     * The field that specifies when remaining stop count can be visible. If this
     * field is not specified, the project level default visibility configuration
     * for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption remaining_stop_count_visibility = 5;</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption|null
     */
    public function getRemainingStopCountVisibility()
    {
        return $this->remaining_stop_count_visibility;
    }

    public function hasRemainingStopCountVisibility()
    {
        return isset($this->remaining_stop_count_visibility);
    }

    public function clearRemainingStopCountVisibility()
    {
        unset($this->remaining_stop_count_visibility);
    }

    /**
     * The field that specifies when remaining stop count can be visible. If this
     * field is not specified, the project level default visibility configuration
     * for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption remaining_stop_count_visibility = 5;</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $var
     * @return $this
     */
    public function setRemainingStopCountVisibility($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption::class);
        $this->remaining_stop_count_visibility = $var;

        return $this;
    }

    /**
     * The field that specifies when vehicle location can be visible. If this
     * field is not specified, the project level default visibility configuration
     * for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption vehicle_location_visibility = 6;</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption|null
     */
    public function getVehicleLocationVisibility()
    {
        return $this->vehicle_location_visibility;
    }

    public function hasVehicleLocationVisibility()
    {
        return isset($this->vehicle_location_visibility);
    }

    public function clearVehicleLocationVisibility()
    {
        unset($this->vehicle_location_visibility);
    }

    /**
     * The field that specifies when vehicle location can be visible. If this
     * field is not specified, the project level default visibility configuration
     * for this data will be used.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TaskTrackingViewConfig.VisibilityOption vehicle_location_visibility = 6;</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption $var
     * @return $this
     */
    public function setVehicleLocationVisibility($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\TaskTrackingViewConfig\VisibilityOption::class);
        $this->vehicle_location_visibility = $var;

        return $this;
    }

}
