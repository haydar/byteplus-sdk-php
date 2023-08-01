<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodGetMediaListRequest</code>
 */
class VodGetMediaListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     */
    protected $Vid = '';
    /**
     *视频状态
     *
     * Generated from protobuf field <code>string Status = 3;</code>
     */
    protected $Status = '';
    /**
     *排序规则
     *
     * Generated from protobuf field <code>string Order = 4;</code>
     */
    protected $Order = '';
    /**
     *标签，多个用","隔开
     *
     * Generated from protobuf field <code>string Tags = 5;</code>
     */
    protected $Tags = '';
    /**
     *查询时间范围下限
     *
     * Generated from protobuf field <code>string StartTime = 6;</code>
     */
    protected $StartTime = '';
    /**
     *查询时间范围上限
     *
     * Generated from protobuf field <code>string EndTime = 7;</code>
     */
    protected $EndTime = '';
    /**
     *数据偏移量
     *
     * Generated from protobuf field <code>string Offset = 8;</code>
     */
    protected $Offset = '';
    /**
     *分页大小
     *
     * Generated from protobuf field <code>string PageSize = 9;</code>
     */
    protected $PageSize = '';
    /**
     *分类id列表
     *
     * Generated from protobuf field <code>string ClassificationIds = 10;</code>
     */
    protected $ClassificationIds = '';
    /**
     * tos存储类型(Standard, Archive)，多个用","隔开
     *
     * Generated from protobuf field <code>string TosStorageClasses = 11;</code>
     */
    protected $TosStorageClasses = '';
    /**
     * 音视频上传来源，多个用","隔开
     *
     * Generated from protobuf field <code>string VodUploadSources = 12;</code>
     */
    protected $VodUploadSources = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *          空间名
     *     @type string $Vid
     *          视频ID
     *     @type string $Status
     *          视频状态
     *     @type string $Order
     *          排序规则
     *     @type string $Tags
     *          标签，多个用","隔开
     *     @type string $StartTime
     *          查询时间范围下限
     *     @type string $EndTime
     *          查询时间范围上限
     *     @type string $Offset
     *          数据偏移量
     *     @type string $PageSize
     *          分页大小
     *     @type string $ClassificationIds
     *          分类id列表
     *     @type string $TosStorageClasses
     *           tos存储类型(Standard, Archive)，多个用","隔开
     *     @type string $VodUploadSources
     *           音视频上传来源，多个用","隔开
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     *空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     *空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     *视频状态
     *
     * Generated from protobuf field <code>string Status = 3;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     *视频状态
     *
     * Generated from protobuf field <code>string Status = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->Status = $var;

        return $this;
    }

    /**
     *排序规则
     *
     * Generated from protobuf field <code>string Order = 4;</code>
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     *排序规则
     *
     * Generated from protobuf field <code>string Order = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkString($var, True);
        $this->Order = $var;

        return $this;
    }

    /**
     *标签，多个用","隔开
     *
     * Generated from protobuf field <code>string Tags = 5;</code>
     * @return string
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     *标签，多个用","隔开
     *
     * Generated from protobuf field <code>string Tags = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTags($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tags = $var;

        return $this;
    }

    /**
     *查询时间范围下限
     *
     * Generated from protobuf field <code>string StartTime = 6;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     *查询时间范围下限
     *
     * Generated from protobuf field <code>string StartTime = 6;</code>
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
     *查询时间范围上限
     *
     * Generated from protobuf field <code>string EndTime = 7;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     *查询时间范围上限
     *
     * Generated from protobuf field <code>string EndTime = 7;</code>
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
     *数据偏移量
     *
     * Generated from protobuf field <code>string Offset = 8;</code>
     * @return string
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     *数据偏移量
     *
     * Generated from protobuf field <code>string Offset = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkString($var, True);
        $this->Offset = $var;

        return $this;
    }

    /**
     *分页大小
     *
     * Generated from protobuf field <code>string PageSize = 9;</code>
     * @return string
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     *分页大小
     *
     * Generated from protobuf field <code>string PageSize = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkString($var, True);
        $this->PageSize = $var;

        return $this;
    }

    /**
     *分类id列表
     *
     * Generated from protobuf field <code>string ClassificationIds = 10;</code>
     * @return string
     */
    public function getClassificationIds()
    {
        return $this->ClassificationIds;
    }

    /**
     *分类id列表
     *
     * Generated from protobuf field <code>string ClassificationIds = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setClassificationIds($var)
    {
        GPBUtil::checkString($var, True);
        $this->ClassificationIds = $var;

        return $this;
    }

    /**
     * tos存储类型(Standard, Archive)，多个用","隔开
     *
     * Generated from protobuf field <code>string TosStorageClasses = 11;</code>
     * @return string
     */
    public function getTosStorageClasses()
    {
        return $this->TosStorageClasses;
    }

    /**
     * tos存储类型(Standard, Archive)，多个用","隔开
     *
     * Generated from protobuf field <code>string TosStorageClasses = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setTosStorageClasses($var)
    {
        GPBUtil::checkString($var, True);
        $this->TosStorageClasses = $var;

        return $this;
    }

    /**
     * 音视频上传来源，多个用","隔开
     *
     * Generated from protobuf field <code>string VodUploadSources = 12;</code>
     * @return string
     */
    public function getVodUploadSources()
    {
        return $this->VodUploadSources;
    }

    /**
     * 音视频上传来源，多个用","隔开
     *
     * Generated from protobuf field <code>string VodUploadSources = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setVodUploadSources($var)
    {
        GPBUtil::checkString($var, True);
        $this->VodUploadSources = $var;

        return $this;
    }

}

