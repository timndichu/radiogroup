<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input only.
 * Filter on the job information of Application.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.ApplicationJobFilter</code>
 */
class ApplicationJobFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The job requisition id in the application. The API does an exact
     * match on the
     * [Job.requisition_id][google.cloud.talent.v4beta1.Job.requisition_id] of
     * [Application.job][google.cloud.talent.v4beta1.Application.job] in profiles.
     *
     * Generated from protobuf field <code>string job_requisition_id = 2;</code>
     */
    private $job_requisition_id = '';
    /**
     * Optional. The job title in the application. The API does an exact match on
     * the [Job.title][google.cloud.talent.v4beta1.Job.title] of
     * [Application.job][google.cloud.talent.v4beta1.Application.job] in profiles.
     *
     * Generated from protobuf field <code>string job_title = 3;</code>
     */
    private $job_title = '';
    /**
     * Optional. If true, the API excludes all profiles with any
     * [Application.job][google.cloud.talent.v4beta1.Application.job] matching the
     * filters.
     *
     * Generated from protobuf field <code>bool negated = 4;</code>
     */
    private $negated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $job_requisition_id
     *           Optional. The job requisition id in the application. The API does an exact
     *           match on the
     *           [Job.requisition_id][google.cloud.talent.v4beta1.Job.requisition_id] of
     *           [Application.job][google.cloud.talent.v4beta1.Application.job] in profiles.
     *     @type string $job_title
     *           Optional. The job title in the application. The API does an exact match on
     *           the [Job.title][google.cloud.talent.v4beta1.Job.title] of
     *           [Application.job][google.cloud.talent.v4beta1.Application.job] in profiles.
     *     @type bool $negated
     *           Optional. If true, the API excludes all profiles with any
     *           [Application.job][google.cloud.talent.v4beta1.Application.job] matching the
     *           filters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The job requisition id in the application. The API does an exact
     * match on the
     * [Job.requisition_id][google.cloud.talent.v4beta1.Job.requisition_id] of
     * [Application.job][google.cloud.talent.v4beta1.Application.job] in profiles.
     *
     * Generated from protobuf field <code>string job_requisition_id = 2;</code>
     * @return string
     */
    public function getJobRequisitionId()
    {
        return $this->job_requisition_id;
    }

    /**
     * Optional. The job requisition id in the application. The API does an exact
     * match on the
     * [Job.requisition_id][google.cloud.talent.v4beta1.Job.requisition_id] of
     * [Application.job][google.cloud.talent.v4beta1.Application.job] in profiles.
     *
     * Generated from protobuf field <code>string job_requisition_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJobRequisitionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_requisition_id = $var;

        return $this;
    }

    /**
     * Optional. The job title in the application. The API does an exact match on
     * the [Job.title][google.cloud.talent.v4beta1.Job.title] of
     * [Application.job][google.cloud.talent.v4beta1.Application.job] in profiles.
     *
     * Generated from protobuf field <code>string job_title = 3;</code>
     * @return string
     */
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * Optional. The job title in the application. The API does an exact match on
     * the [Job.title][google.cloud.talent.v4beta1.Job.title] of
     * [Application.job][google.cloud.talent.v4beta1.Application.job] in profiles.
     *
     * Generated from protobuf field <code>string job_title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setJobTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_title = $var;

        return $this;
    }

    /**
     * Optional. If true, the API excludes all profiles with any
     * [Application.job][google.cloud.talent.v4beta1.Application.job] matching the
     * filters.
     *
     * Generated from protobuf field <code>bool negated = 4;</code>
     * @return bool
     */
    public function getNegated()
    {
        return $this->negated;
    }

    /**
     * Optional. If true, the API excludes all profiles with any
     * [Application.job][google.cloud.talent.v4beta1.Application.job] matching the
     * filters.
     *
     * Generated from protobuf field <code>bool negated = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setNegated($var)
    {
        GPBUtil::checkBool($var);
        $this->negated = $var;

        return $this;
    }

}

