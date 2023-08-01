<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_upload.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.UploadAddress</code>
 */
class UploadAddress extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.StoreInfo StoreInfos = 1;</code>
     */
    private $StoreInfos;
    /**
     * Generated from protobuf field <code>repeated string UploadHosts = 2;</code>
     */
    private $UploadHosts;
    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.HeaderPair UploadHeader = 3;</code>
     */
    private $UploadHeader;
    /**
     * Generated from protobuf field <code>string SessionKey = 4;</code>
     */
    protected $SessionKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Vod\Models\Business\StoreInfo[]|\Google\Protobuf\Internal\RepeatedField $StoreInfos
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $UploadHosts
     *     @type \Byteplus\Service\Vod\Models\Business\HeaderPair[]|\Google\Protobuf\Internal\RepeatedField $UploadHeader
     *     @type string $SessionKey
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.StoreInfo StoreInfos = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStoreInfos()
    {
        return $this->StoreInfos;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.StoreInfo StoreInfos = 1;</code>
     * @param \Byteplus\Service\Vod\Models\Business\StoreInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStoreInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\StoreInfo::class);
        $this->StoreInfos = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string UploadHosts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUploadHosts()
    {
        return $this->UploadHosts;
    }

    /**
     * Generated from protobuf field <code>repeated string UploadHosts = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUploadHosts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->UploadHosts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.HeaderPair UploadHeader = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUploadHeader()
    {
        return $this->UploadHeader;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.HeaderPair UploadHeader = 3;</code>
     * @param \Byteplus\Service\Vod\Models\Business\HeaderPair[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUploadHeader($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\HeaderPair::class);
        $this->UploadHeader = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string SessionKey = 4;</code>
     * @return string
     */
    public function getSessionKey()
    {
        return $this->SessionKey;
    }

    /**
     * Generated from protobuf field <code>string SessionKey = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->SessionKey = $var;

        return $this;
    }

}

