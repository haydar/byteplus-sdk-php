<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodListCdnAccessLogRequest</code>
 */
class VodListCdnAccessLogRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 域名（当前仅支持设置一个域名） 
     *
     * Generated from protobuf field <code>string Domains = 1;</code>
     */
    protected $Domains = '';
    /**
     * 查询起始时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 StartTimestamp = 2;</code>
     */
    protected $StartTimestamp = 0;
    /**
     * 查询结束时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 EndTimestamp = 3;</code>
     */
    protected $EndTimestamp = 0;
    /**
     * 空间名称 
     *
     * Generated from protobuf field <code>string SpaceName = 4;</code>
     */
    protected $SpaceName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Domains
     *           域名（当前仅支持设置一个域名） 
     *     @type int $StartTimestamp
     *           查询起始时间戳，单位：Unix秒级时间戳 
     *     @type int $EndTimestamp
     *           查询结束时间戳，单位：Unix秒级时间戳 
     *     @type string $SpaceName
     *           空间名称 
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 域名（当前仅支持设置一个域名） 
     *
     * Generated from protobuf field <code>string Domains = 1;</code>
     * @return string
     */
    public function getDomains()
    {
        return $this->Domains;
    }

    /**
     * 域名（当前仅支持设置一个域名） 
     *
     * Generated from protobuf field <code>string Domains = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomains($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domains = $var;

        return $this;
    }

    /**
     * 查询起始时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 StartTimestamp = 2;</code>
     * @return int
     */
    public function getStartTimestamp()
    {
        return $this->StartTimestamp;
    }

    /**
     * 查询起始时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 StartTimestamp = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkInt32($var);
        $this->StartTimestamp = $var;

        return $this;
    }

    /**
     * 查询结束时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 EndTimestamp = 3;</code>
     * @return int
     */
    public function getEndTimestamp()
    {
        return $this->EndTimestamp;
    }

    /**
     * 查询结束时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 EndTimestamp = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEndTimestamp($var)
    {
        GPBUtil::checkInt32($var);
        $this->EndTimestamp = $var;

        return $this;
    }

    /**
     * 空间名称 
     *
     * Generated from protobuf field <code>string SpaceName = 4;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名称 
     *
     * Generated from protobuf field <code>string SpaceName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

}

