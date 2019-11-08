<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message configures which resources and services to monitor for
 * availability.
 *
 * Generated from protobuf message <code>google.monitoring.v3.UptimeCheckConfig</code>
 */
class UptimeCheckConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique resource name for this Uptime check configuration. The format is:
     *   `projects/[PROJECT_ID]/uptimeCheckConfigs/[UPTIME_CHECK_ID]`.
     * This field should be omitted when creating the Uptime check configuration;
     * on create, the resource name is assigned by the server and included in the
     * response.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A human-friendly name for the Uptime check configuration. The display name
     * should be unique within a Stackdriver Workspace in order to make it easier
     * to identify; however, uniqueness is not enforced. Required.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * How often, in seconds, the Uptime check is performed.
     * Currently, the only supported values are `60s` (1 minute), `300s`
     * (5 minutes), `600s` (10 minutes), and `900s` (15 minutes). Optional,
     * defaults to `60s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration period = 7;</code>
     */
    private $period = null;
    /**
     * The maximum amount of time to wait for the request to complete (must be
     * between 1 and 60 seconds). Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 8;</code>
     */
    private $timeout = null;
    /**
     * The content that is expected to appear in the data returned by the target
     * server against which the check is run.  Currently, only the first entry
     * in the `content_matchers` list is supported, and additional entries will
     * be ignored. This field is optional and should only be specified if a
     * content match is required as part of the/ Uptime check.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.UptimeCheckConfig.ContentMatcher content_matchers = 9;</code>
     */
    private $content_matchers;
    /**
     * The list of regions from which the check will be run.
     * Some regions contain one location, and others contain more than one.
     * If this field is specified, enough regions must be provided to include a
     * minimum of 3 locations.  Not specifying this field will result in Uptime
     * checks running from all available regions.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.UptimeCheckRegion selected_regions = 10;</code>
     */
    private $selected_regions;
    /**
     * The internal checkers that this check will egress from. If `is_internal` is
     * `true` and this list is empty, the check will egress from all the
     * InternalCheckers configured for the project that owns this
     * `UptimeCheckConfig`.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.InternalChecker internal_checkers = 14 [deprecated = true];</code>
     */
    private $internal_checkers;
    protected $resource;
    protected $check_request_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           A unique resource name for this Uptime check configuration. The format is:
     *             `projects/[PROJECT_ID]/uptimeCheckConfigs/[UPTIME_CHECK_ID]`.
     *           This field should be omitted when creating the Uptime check configuration;
     *           on create, the resource name is assigned by the server and included in the
     *           response.
     *     @type string $display_name
     *           A human-friendly name for the Uptime check configuration. The display name
     *           should be unique within a Stackdriver Workspace in order to make it easier
     *           to identify; however, uniqueness is not enforced. Required.
     *     @type \Google\Api\MonitoredResource $monitored_resource
     *           The [monitored
     *           resource](https://cloud.google.com/monitoring/api/resources) associated
     *           with the configuration.
     *           The following monitored resource types are supported for Uptime checks:
     *             `uptime_url`,
     *             `gce_instance`,
     *             `gae_app`,
     *             `aws_ec2_instance`,
     *             `aws_elb_load_balancer`
     *     @type \Google\Cloud\Monitoring\V3\UptimeCheckConfig\ResourceGroup $resource_group
     *           The group resource associated with the configuration.
     *     @type \Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck $http_check
     *           Contains information needed to make an HTTP or HTTPS check.
     *     @type \Google\Cloud\Monitoring\V3\UptimeCheckConfig\TcpCheck $tcp_check
     *           Contains information needed to make a TCP check.
     *     @type \Google\Protobuf\Duration $period
     *           How often, in seconds, the Uptime check is performed.
     *           Currently, the only supported values are `60s` (1 minute), `300s`
     *           (5 minutes), `600s` (10 minutes), and `900s` (15 minutes). Optional,
     *           defaults to `60s`.
     *     @type \Google\Protobuf\Duration $timeout
     *           The maximum amount of time to wait for the request to complete (must be
     *           between 1 and 60 seconds). Required.
     *     @type \Google\Cloud\Monitoring\V3\UptimeCheckConfig\ContentMatcher[]|\Google\Protobuf\Internal\RepeatedField $content_matchers
     *           The content that is expected to appear in the data returned by the target
     *           server against which the check is run.  Currently, only the first entry
     *           in the `content_matchers` list is supported, and additional entries will
     *           be ignored. This field is optional and should only be specified if a
     *           content match is required as part of the/ Uptime check.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $selected_regions
     *           The list of regions from which the check will be run.
     *           Some regions contain one location, and others contain more than one.
     *           If this field is specified, enough regions must be provided to include a
     *           minimum of 3 locations.  Not specifying this field will result in Uptime
     *           checks running from all available regions.
     *     @type \Google\Cloud\Monitoring\V3\InternalChecker[]|\Google\Protobuf\Internal\RepeatedField $internal_checkers
     *           The internal checkers that this check will egress from. If `is_internal` is
     *           `true` and this list is empty, the check will egress from all the
     *           InternalCheckers configured for the project that owns this
     *           `UptimeCheckConfig`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique resource name for this Uptime check configuration. The format is:
     *   `projects/[PROJECT_ID]/uptimeCheckConfigs/[UPTIME_CHECK_ID]`.
     * This field should be omitted when creating the Uptime check configuration;
     * on create, the resource name is assigned by the server and included in the
     * response.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A unique resource name for this Uptime check configuration. The format is:
     *   `projects/[PROJECT_ID]/uptimeCheckConfigs/[UPTIME_CHECK_ID]`.
     * This field should be omitted when creating the Uptime check configuration;
     * on create, the resource name is assigned by the server and included in the
     * response.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A human-friendly name for the Uptime check configuration. The display name
     * should be unique within a Stackdriver Workspace in order to make it easier
     * to identify; however, uniqueness is not enforced. Required.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * A human-friendly name for the Uptime check configuration. The display name
     * should be unique within a Stackdriver Workspace in order to make it easier
     * to identify; however, uniqueness is not enforced. Required.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The [monitored
     * resource](https://cloud.google.com/monitoring/api/resources) associated
     * with the configuration.
     * The following monitored resource types are supported for Uptime checks:
     *   `uptime_url`,
     *   `gce_instance`,
     *   `gae_app`,
     *   `aws_ec2_instance`,
     *   `aws_elb_load_balancer`
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource monitored_resource = 3;</code>
     * @return \Google\Api\MonitoredResource
     */
    public function getMonitoredResource()
    {
        return $this->readOneof(3);
    }

    /**
     * The [monitored
     * resource](https://cloud.google.com/monitoring/api/resources) associated
     * with the configuration.
     * The following monitored resource types are supported for Uptime checks:
     *   `uptime_url`,
     *   `gce_instance`,
     *   `gae_app`,
     *   `aws_ec2_instance`,
     *   `aws_elb_load_balancer`
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource monitored_resource = 3;</code>
     * @param \Google\Api\MonitoredResource $var
     * @return $this
     */
    public function setMonitoredResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MonitoredResource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The group resource associated with the configuration.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.ResourceGroup resource_group = 4;</code>
     * @return \Google\Cloud\Monitoring\V3\UptimeCheckConfig\ResourceGroup
     */
    public function getResourceGroup()
    {
        return $this->readOneof(4);
    }

    /**
     * The group resource associated with the configuration.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.ResourceGroup resource_group = 4;</code>
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig\ResourceGroup $var
     * @return $this
     */
    public function setResourceGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\UptimeCheckConfig_ResourceGroup::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Contains information needed to make an HTTP or HTTPS check.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck http_check = 5;</code>
     * @return \Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck
     */
    public function getHttpCheck()
    {
        return $this->readOneof(5);
    }

    /**
     * Contains information needed to make an HTTP or HTTPS check.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck http_check = 5;</code>
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck $var
     * @return $this
     */
    public function setHttpCheck($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\UptimeCheckConfig_HttpCheck::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Contains information needed to make a TCP check.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.TcpCheck tcp_check = 6;</code>
     * @return \Google\Cloud\Monitoring\V3\UptimeCheckConfig\TcpCheck
     */
    public function getTcpCheck()
    {
        return $this->readOneof(6);
    }

    /**
     * Contains information needed to make a TCP check.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.TcpCheck tcp_check = 6;</code>
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig\TcpCheck $var
     * @return $this
     */
    public function setTcpCheck($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\UptimeCheckConfig_TcpCheck::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * How often, in seconds, the Uptime check is performed.
     * Currently, the only supported values are `60s` (1 minute), `300s`
     * (5 minutes), `600s` (10 minutes), and `900s` (15 minutes). Optional,
     * defaults to `60s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration period = 7;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * How often, in seconds, the Uptime check is performed.
     * Currently, the only supported values are `60s` (1 minute), `300s`
     * (5 minutes), `600s` (10 minutes), and `900s` (15 minutes). Optional,
     * defaults to `60s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration period = 7;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->period = $var;

        return $this;
    }

    /**
     * The maximum amount of time to wait for the request to complete (must be
     * between 1 and 60 seconds). Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 8;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * The maximum amount of time to wait for the request to complete (must be
     * between 1 and 60 seconds). Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;

        return $this;
    }

    /**
     * The content that is expected to appear in the data returned by the target
     * server against which the check is run.  Currently, only the first entry
     * in the `content_matchers` list is supported, and additional entries will
     * be ignored. This field is optional and should only be specified if a
     * content match is required as part of the/ Uptime check.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.UptimeCheckConfig.ContentMatcher content_matchers = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContentMatchers()
    {
        return $this->content_matchers;
    }

    /**
     * The content that is expected to appear in the data returned by the target
     * server against which the check is run.  Currently, only the first entry
     * in the `content_matchers` list is supported, and additional entries will
     * be ignored. This field is optional and should only be specified if a
     * content match is required as part of the/ Uptime check.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.UptimeCheckConfig.ContentMatcher content_matchers = 9;</code>
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig\ContentMatcher[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContentMatchers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\UptimeCheckConfig\ContentMatcher::class);
        $this->content_matchers = $arr;

        return $this;
    }

    /**
     * The list of regions from which the check will be run.
     * Some regions contain one location, and others contain more than one.
     * If this field is specified, enough regions must be provided to include a
     * minimum of 3 locations.  Not specifying this field will result in Uptime
     * checks running from all available regions.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.UptimeCheckRegion selected_regions = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectedRegions()
    {
        return $this->selected_regions;
    }

    /**
     * The list of regions from which the check will be run.
     * Some regions contain one location, and others contain more than one.
     * If this field is specified, enough regions must be provided to include a
     * minimum of 3 locations.  Not specifying this field will result in Uptime
     * checks running from all available regions.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.UptimeCheckRegion selected_regions = 10;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectedRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Monitoring\V3\UptimeCheckRegion::class);
        $this->selected_regions = $arr;

        return $this;
    }

    /**
     * The internal checkers that this check will egress from. If `is_internal` is
     * `true` and this list is empty, the check will egress from all the
     * InternalCheckers configured for the project that owns this
     * `UptimeCheckConfig`.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.InternalChecker internal_checkers = 14 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInternalCheckers()
    {
        return $this->internal_checkers;
    }

    /**
     * The internal checkers that this check will egress from. If `is_internal` is
     * `true` and this list is empty, the check will egress from all the
     * InternalCheckers configured for the project that owns this
     * `UptimeCheckConfig`.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.InternalChecker internal_checkers = 14 [deprecated = true];</code>
     * @param \Google\Cloud\Monitoring\V3\InternalChecker[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInternalCheckers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\InternalChecker::class);
        $this->internal_checkers = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->whichOneof("resource");
    }

    /**
     * @return string
     */
    public function getCheckRequestType()
    {
        return $this->whichOneof("check_request_type");
    }

}

