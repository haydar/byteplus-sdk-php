<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodStopDomainRequest</code>
 */
class VodStopDomainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Generated from protobuf field <code>string DomainType = 2;</code>
     */
    protected $DomainType = '';
    /**
     * Generated from protobuf field <code>string Domain = 3;</code>
     */
    protected $Domain = '';
    /**
     * 0未定义 1点播源站 2第三方源站
     *
     * Generated from protobuf field <code>int32 SourceStationType = 4;</code>
     */
    protected $SourceStationType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type string $DomainType
     *     @type string $Domain
     *     @type int $SourceStationType
     *           0未定义 1点播源站 2第三方源站
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
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
     * Generated from protobuf field <code>string DomainType = 2;</code>
     * @return string
     */
    public function getDomainType()
    {
        return $this->DomainType;
    }

    /**
     * Generated from protobuf field <code>string DomainType = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainType($var)
    {
        GPBUtil::checkString($var, True);
        $this->DomainType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Domain = 3;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * Generated from protobuf field <code>string Domain = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domain = $var;

        return $this;
    }

    /**
     * 0未定义 1点播源站 2第三方源站
     *
     * Generated from protobuf field <code>int32 SourceStationType = 4;</code>
     * @return int
     */
    public function getSourceStationType()
    {
        return $this->SourceStationType;
    }

    /**
     * 0未定义 1点播源站 2第三方源站
     *
     * Generated from protobuf field <code>int32 SourceStationType = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceStationType($var)
    {
        GPBUtil::checkInt32($var);
        $this->SourceStationType = $var;

        return $this;
    }

}

