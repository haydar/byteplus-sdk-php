<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * **********************************************************************
 * 空间管理
 * **********************************************************************
 *
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodCreateSpaceRequest</code>
 */
class VodCreateSpaceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 项目名 
     *
     * Generated from protobuf field <code>string ProjectName = 2;</code>
     */
    protected $ProjectName = '';
    /**
     * 描述 
     *
     * Generated from protobuf field <code>string Description = 3;</code>
     */
    protected $Description = '';
    /**
     * 空间区域 
     *
     * Generated from protobuf field <code>string Region = 4;</code>
     */
    protected $Region = '';
    /**
     * 创建用户 
     *
     * Generated from protobuf field <code>string UserName = 5;</code>
     */
    protected $UserName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           空间名 
     *     @type string $ProjectName
     *           项目名 
     *     @type string $Description
     *           描述 
     *     @type string $Region
     *           空间区域 
     *     @type string $UserName
     *           创建用户 
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名 
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
     * 项目名 
     *
     * Generated from protobuf field <code>string ProjectName = 2;</code>
     * @return string
     */
    public function getProjectName()
    {
        return $this->ProjectName;
    }

    /**
     * 项目名 
     *
     * Generated from protobuf field <code>string ProjectName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->ProjectName = $var;

        return $this;
    }

    /**
     * 描述 
     *
     * Generated from protobuf field <code>string Description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * 描述 
     *
     * Generated from protobuf field <code>string Description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->Description = $var;

        return $this;
    }

    /**
     * 空间区域 
     *
     * Generated from protobuf field <code>string Region = 4;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * 空间区域 
     *
     * Generated from protobuf field <code>string Region = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Region = $var;

        return $this;
    }

    /**
     * 创建用户 
     *
     * Generated from protobuf field <code>string UserName = 5;</code>
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * 创建用户 
     *
     * Generated from protobuf field <code>string UserName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUserName($var)
    {
        GPBUtil::checkString($var, True);
        $this->UserName = $var;

        return $this;
    }

}

