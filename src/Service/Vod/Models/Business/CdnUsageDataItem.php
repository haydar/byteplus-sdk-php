<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_cdn.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.CdnUsageDataItem</code>
 */
class CdnUsageDataItem extends \Google\Protobuf\Internal\Message
{
    /**
     * 时间戳
     *
     * Generated from protobuf field <code>int64 Time = 1;</code>
     */
    protected $Time = 0;
    /**
     * 国家/地区
     *
     * Generated from protobuf field <code>string Area = 2;</code>
     */
    protected $Area = '';
    /**
     * 流量，单位：Byte
     *
     * Generated from protobuf field <code>int64 Flow = 3;</code>
     */
    protected $Flow = 0;
    /**
     * http流量，单位： Byte
     *
     * Generated from protobuf field <code>int64 HttpFlow = 4;</code>
     */
    protected $HttpFlow = 0;
    /**
     * https流量，单位： Byte
     *
     * Generated from protobuf field <code>int64 HttpsFlow = 5;</code>
     */
    protected $HttpsFlow = 0;
    /**
     * 请求数
     *
     * Generated from protobuf field <code>int64 Conn = 6;</code>
     */
    protected $Conn = 0;
    /**
     * http请求数
     *
     * Generated from protobuf field <code>int64 HttpConn = 7;</code>
     */
    protected $HttpConn = 0;
    /**
     * https请求数
     *
     * Generated from protobuf field <code>int64 HttpsConn = 8;</code>
     */
    protected $HttpsConn = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $Time
     *           时间戳
     *     @type string $Area
     *           国家/地区
     *     @type int|string $Flow
     *           流量，单位：Byte
     *     @type int|string $HttpFlow
     *           http流量，单位： Byte
     *     @type int|string $HttpsFlow
     *           https流量，单位： Byte
     *     @type int|string $Conn
     *           请求数
     *     @type int|string $HttpConn
     *           http请求数
     *     @type int|string $HttpsConn
     *           https请求数
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * 时间戳
     *
     * Generated from protobuf field <code>int64 Time = 1;</code>
     * @return int|string
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * 时间戳
     *
     * Generated from protobuf field <code>int64 Time = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->Time = $var;

        return $this;
    }

    /**
     * 国家/地区
     *
     * Generated from protobuf field <code>string Area = 2;</code>
     * @return string
     */
    public function getArea()
    {
        return $this->Area;
    }

    /**
     * 国家/地区
     *
     * Generated from protobuf field <code>string Area = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setArea($var)
    {
        GPBUtil::checkString($var, True);
        $this->Area = $var;

        return $this;
    }

    /**
     * 流量，单位：Byte
     *
     * Generated from protobuf field <code>int64 Flow = 3;</code>
     * @return int|string
     */
    public function getFlow()
    {
        return $this->Flow;
    }

    /**
     * 流量，单位：Byte
     *
     * Generated from protobuf field <code>int64 Flow = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFlow($var)
    {
        GPBUtil::checkInt64($var);
        $this->Flow = $var;

        return $this;
    }

    /**
     * http流量，单位： Byte
     *
     * Generated from protobuf field <code>int64 HttpFlow = 4;</code>
     * @return int|string
     */
    public function getHttpFlow()
    {
        return $this->HttpFlow;
    }

    /**
     * http流量，单位： Byte
     *
     * Generated from protobuf field <code>int64 HttpFlow = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHttpFlow($var)
    {
        GPBUtil::checkInt64($var);
        $this->HttpFlow = $var;

        return $this;
    }

    /**
     * https流量，单位： Byte
     *
     * Generated from protobuf field <code>int64 HttpsFlow = 5;</code>
     * @return int|string
     */
    public function getHttpsFlow()
    {
        return $this->HttpsFlow;
    }

    /**
     * https流量，单位： Byte
     *
     * Generated from protobuf field <code>int64 HttpsFlow = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHttpsFlow($var)
    {
        GPBUtil::checkInt64($var);
        $this->HttpsFlow = $var;

        return $this;
    }

    /**
     * 请求数
     *
     * Generated from protobuf field <code>int64 Conn = 6;</code>
     * @return int|string
     */
    public function getConn()
    {
        return $this->Conn;
    }

    /**
     * 请求数
     *
     * Generated from protobuf field <code>int64 Conn = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConn($var)
    {
        GPBUtil::checkInt64($var);
        $this->Conn = $var;

        return $this;
    }

    /**
     * http请求数
     *
     * Generated from protobuf field <code>int64 HttpConn = 7;</code>
     * @return int|string
     */
    public function getHttpConn()
    {
        return $this->HttpConn;
    }

    /**
     * http请求数
     *
     * Generated from protobuf field <code>int64 HttpConn = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHttpConn($var)
    {
        GPBUtil::checkInt64($var);
        $this->HttpConn = $var;

        return $this;
    }

    /**
     * https请求数
     *
     * Generated from protobuf field <code>int64 HttpsConn = 8;</code>
     * @return int|string
     */
    public function getHttpsConn()
    {
        return $this->HttpsConn;
    }

    /**
     * https请求数
     *
     * Generated from protobuf field <code>int64 HttpsConn = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHttpsConn($var)
    {
        GPBUtil::checkInt64($var);
        $this->HttpsConn = $var;

        return $this;
    }

}

