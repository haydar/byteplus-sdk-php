<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/response/response_vod.proto

namespace Byteplus\Service\Vod\Models\Response;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Response.VodGetFairPlayCertInfoResponse</code>
 */
class VodGetFairPlayCertInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;
    /**
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodGetFairPlayCertInfoResult Result = 2;</code>
     */
    protected $Result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Base\Models\Base\ResponseMetadata $ResponseMetadata
     *     @type \Byteplus\Service\Vod\Models\Business\VodGetFairPlayCertInfoResult $Result
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\ResponseVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @return \Byteplus\Service\Base\Models\Base\ResponseMetadata|null
     */
    public function getResponseMetadata()
    {
        return $this->ResponseMetadata;
    }

    public function hasResponseMetadata()
    {
        return isset($this->ResponseMetadata);
    }

    public function clearResponseMetadata()
    {
        unset($this->ResponseMetadata);
    }

    /**
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @param \Byteplus\Service\Base\Models\Base\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Base\Models\Base\ResponseMetadata::class);
        $this->ResponseMetadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodGetFairPlayCertInfoResult Result = 2;</code>
     * @return \Byteplus\Service\Vod\Models\Business\VodGetFairPlayCertInfoResult|null
     */
    public function getResult()
    {
        return $this->Result;
    }

    public function hasResult()
    {
        return isset($this->Result);
    }

    public function clearResult()
    {
        unset($this->Result);
    }

    /**
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodGetFairPlayCertInfoResult Result = 2;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodGetFairPlayCertInfoResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Vod\Models\Business\VodGetFairPlayCertInfoResult::class);
        $this->Result = $var;

        return $this;
    }

}

