<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodDescribeVodSpaceStorageDataRequest</code>
 */
class VodDescribeVodSpaceStorageDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * SpaceList, multiple space names are divided by
     *
     * Generated from protobuf field <code>string SpaceList = 1;</code>
     */
    protected $SpaceList = '';
    /**
     * commas
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     */
    protected $StartTime = '';
    /**
     * end time of query rfc3339
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     */
    protected $EndTime = '';
    /**
     * default and only supports 86400
     *
     * Generated from protobuf field <code>int32 Aggregation = 4;</code>
     */
    protected $Aggregation = 0;
    /**
     * hot default, lowfreq, punish
     *
     * Generated from protobuf field <code>string Type = 5;</code>
     */
    protected $Type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceList
     *           SpaceList, multiple space names are divided by
     *     @type string $StartTime
     *           commas
     *     @type string $EndTime
     *           end time of query rfc3339
     *     @type int $Aggregation
     *           default and only supports 86400
     *     @type string $Type
     *           hot default, lowfreq, punish
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * SpaceList, multiple space names are divided by
     *
     * Generated from protobuf field <code>string SpaceList = 1;</code>
     * @return string
     */
    public function getSpaceList()
    {
        return $this->SpaceList;
    }

    /**
     * SpaceList, multiple space names are divided by
     *
     * Generated from protobuf field <code>string SpaceList = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceList($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceList = $var;

        return $this;
    }

    /**
     * commas
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * commas
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartTime = $var;

        return $this;
    }

    /**
     * end time of query rfc3339
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * end time of query rfc3339
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->EndTime = $var;

        return $this;
    }

    /**
     * default and only supports 86400
     *
     * Generated from protobuf field <code>int32 Aggregation = 4;</code>
     * @return int
     */
    public function getAggregation()
    {
        return $this->Aggregation;
    }

    /**
     * default and only supports 86400
     *
     * Generated from protobuf field <code>int32 Aggregation = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAggregation($var)
    {
        GPBUtil::checkInt32($var);
        $this->Aggregation = $var;

        return $this;
    }

    /**
     * hot default, lowfreq, punish
     *
     * Generated from protobuf field <code>string Type = 5;</code>
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * hot default, lowfreq, punish
     *
     * Generated from protobuf field <code>string Type = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

}

