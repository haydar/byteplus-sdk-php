<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_measure.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.DescribeVodSpaceWorkflowSnapshotInfo</code>
 */
class DescribeVodSpaceWorkflowSnapshotInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string TemplateType = 1;</code>
     */
    protected $TemplateType = '';
    /**
     * Generated from protobuf field <code>int64 Number = 2;</code>
     */
    protected $Number = 0;
    /**
     * Generated from protobuf field <code>bool IsLowPriority = 3;</code>
     */
    protected $IsLowPriority = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $TemplateType
     *     @type int|string $Number
     *     @type bool $IsLowPriority
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string TemplateType = 1;</code>
     * @return string
     */
    public function getTemplateType()
    {
        return $this->TemplateType;
    }

    /**
     * Generated from protobuf field <code>string TemplateType = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateType($var)
    {
        GPBUtil::checkString($var, True);
        $this->TemplateType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Number = 2;</code>
     * @return int|string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * Generated from protobuf field <code>int64 Number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->Number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsLowPriority = 3;</code>
     * @return bool
     */
    public function getIsLowPriority()
    {
        return $this->IsLowPriority;
    }

    /**
     * Generated from protobuf field <code>bool IsLowPriority = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLowPriority($var)
    {
        GPBUtil::checkBool($var);
        $this->IsLowPriority = $var;

        return $this;
    }

}

