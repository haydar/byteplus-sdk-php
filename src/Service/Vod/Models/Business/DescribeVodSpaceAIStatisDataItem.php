<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_measure.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 媒体AI用量
 *
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.DescribeVodSpaceAIStatisDataItem</code>
 */
class DescribeVodSpaceAIStatisDataItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Time = 1;</code>
     */
    protected $Time = '';
    /**
     * Generated from protobuf field <code>int64 Duration = 2;</code>
     */
    protected $Duration = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Time
     *     @type int|string $Duration
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Time = 1;</code>
     * @return string
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * Generated from protobuf field <code>string Time = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->Time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Duration = 2;</code>
     * @return int|string
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * Generated from protobuf field <code>int64 Duration = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkInt64($var);
        $this->Duration = $var;

        return $this;
    }

}

