<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_cdn.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodDomainConfigInfo</code>
 */
class VodDomainConfigInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间名称
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 播放分发加速配置
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodDomainInstanceInfos PlayInstanceInfo = 2;</code>
     */
    protected $PlayInstanceInfo = null;
    /**
     * 图片分发加速配置
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodDomainInstanceInfos ImageInstanceInfo = 3;</code>
     */
    protected $ImageInstanceInfo = null;
    /**
     *默认播放域名
     *
     * Generated from protobuf field <code>string DefaultPlayDomain = 4;</code>
     */
    protected $DefaultPlayDomain = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           空间名称
     *     @type \Byteplus\Service\Vod\Models\Business\VodDomainInstanceInfos $PlayInstanceInfo
     *           播放分发加速配置
     *     @type \Byteplus\Service\Vod\Models\Business\VodDomainInstanceInfos $ImageInstanceInfo
     *           图片分发加速配置
     *     @type string $DefaultPlayDomain
     *          默认播放域名
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间名称
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名称
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
     * 播放分发加速配置
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodDomainInstanceInfos PlayInstanceInfo = 2;</code>
     * @return \Byteplus\Service\Vod\Models\Business\VodDomainInstanceInfos|null
     */
    public function getPlayInstanceInfo()
    {
        return $this->PlayInstanceInfo;
    }

    public function hasPlayInstanceInfo()
    {
        return isset($this->PlayInstanceInfo);
    }

    public function clearPlayInstanceInfo()
    {
        unset($this->PlayInstanceInfo);
    }

    /**
     * 播放分发加速配置
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodDomainInstanceInfos PlayInstanceInfo = 2;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodDomainInstanceInfos $var
     * @return $this
     */
    public function setPlayInstanceInfo($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Vod\Models\Business\VodDomainInstanceInfos::class);
        $this->PlayInstanceInfo = $var;

        return $this;
    }

    /**
     * 图片分发加速配置
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodDomainInstanceInfos ImageInstanceInfo = 3;</code>
     * @return \Byteplus\Service\Vod\Models\Business\VodDomainInstanceInfos|null
     */
    public function getImageInstanceInfo()
    {
        return $this->ImageInstanceInfo;
    }

    public function hasImageInstanceInfo()
    {
        return isset($this->ImageInstanceInfo);
    }

    public function clearImageInstanceInfo()
    {
        unset($this->ImageInstanceInfo);
    }

    /**
     * 图片分发加速配置
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodDomainInstanceInfos ImageInstanceInfo = 3;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodDomainInstanceInfos $var
     * @return $this
     */
    public function setImageInstanceInfo($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Vod\Models\Business\VodDomainInstanceInfos::class);
        $this->ImageInstanceInfo = $var;

        return $this;
    }

    /**
     *默认播放域名
     *
     * Generated from protobuf field <code>string DefaultPlayDomain = 4;</code>
     * @return string
     */
    public function getDefaultPlayDomain()
    {
        return $this->DefaultPlayDomain;
    }

    /**
     *默认播放域名
     *
     * Generated from protobuf field <code>string DefaultPlayDomain = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultPlayDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->DefaultPlayDomain = $var;

        return $this;
    }

}

