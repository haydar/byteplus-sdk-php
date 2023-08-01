<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodUpdateVideoClassificationRequest</code>
 */
class VodUpdateVideoClassificationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Generated from protobuf field <code>int64 ClassificationId = 2;</code>
     */
    protected $ClassificationId = 0;
    /**
     * Generated from protobuf field <code>string Classification = 3;</code>
     */
    protected $Classification = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type int|string $ClassificationId
     *     @type string $Classification
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
     * Generated from protobuf field <code>int64 ClassificationId = 2;</code>
     * @return int|string
     */
    public function getClassificationId()
    {
        return $this->ClassificationId;
    }

    /**
     * Generated from protobuf field <code>int64 ClassificationId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClassificationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->ClassificationId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Classification = 3;</code>
     * @return string
     */
    public function getClassification()
    {
        return $this->Classification;
    }

    /**
     * Generated from protobuf field <code>string Classification = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClassification($var)
    {
        GPBUtil::checkString($var, True);
        $this->Classification = $var;

        return $this;
    }

}

