<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_measure.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.DescribeVodPlayedStatisDataResult</code>
 */
class DescribeVodPlayedStatisDataResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间
     *
     * Generated from protobuf field <code>string Space = 1;</code>
     */
    protected $Space = '';
    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     */
    protected $StartTime = '';
    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     */
    protected $EndTime = '';
    /**
     * 查询的Vid列表，多个Vid用逗号分割
     *
     * Generated from protobuf field <code>repeated string VidList = 4;</code>
     */
    private $VidList;
    /**
     * 排序类型
     *
     * Generated from protobuf field <code>string OrderType = 5;</code>
     */
    protected $OrderType = '';
    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.DescribeVodPlayedStatisDataItem PlayStatInfos = 6;</code>
     */
    private $PlayStatInfos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Space
     *           空间
     *     @type string $StartTime
     *           查询的起始时间, rfc3339
     *     @type string $EndTime
     *           查询的结束时间, rfc3339；查询时间跨度不超过93天
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $VidList
     *           查询的Vid列表，多个Vid用逗号分割
     *     @type string $OrderType
     *           排序类型
     *     @type \Byteplus\Service\Vod\Models\Business\DescribeVodPlayedStatisDataItem[]|\Google\Protobuf\Internal\RepeatedField $PlayStatInfos
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间
     *
     * Generated from protobuf field <code>string Space = 1;</code>
     * @return string
     */
    public function getSpace()
    {
        return $this->Space;
    }

    /**
     * 空间
     *
     * Generated from protobuf field <code>string Space = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpace($var)
    {
        GPBUtil::checkString($var, True);
        $this->Space = $var;

        return $this;
    }

    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * 查询的起始时间, rfc3339
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
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天
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
     * 查询的Vid列表，多个Vid用逗号分割
     *
     * Generated from protobuf field <code>repeated string VidList = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVidList()
    {
        return $this->VidList;
    }

    /**
     * 查询的Vid列表，多个Vid用逗号分割
     *
     * Generated from protobuf field <code>repeated string VidList = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVidList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->VidList = $arr;

        return $this;
    }

    /**
     * 排序类型
     *
     * Generated from protobuf field <code>string OrderType = 5;</code>
     * @return string
     */
    public function getOrderType()
    {
        return $this->OrderType;
    }

    /**
     * 排序类型
     *
     * Generated from protobuf field <code>string OrderType = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderType($var)
    {
        GPBUtil::checkString($var, True);
        $this->OrderType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.DescribeVodPlayedStatisDataItem PlayStatInfos = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlayStatInfos()
    {
        return $this->PlayStatInfos;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.DescribeVodPlayedStatisDataItem PlayStatInfos = 6;</code>
     * @param \Byteplus\Service\Vod\Models\Business\DescribeVodPlayedStatisDataItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlayStatInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\DescribeVodPlayedStatisDataItem::class);
        $this->PlayStatInfos = $arr;

        return $this;
    }

}

