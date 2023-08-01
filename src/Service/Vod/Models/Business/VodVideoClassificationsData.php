<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_media.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodVideoClassificationsData</code>
 */
class VodVideoClassificationsData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodClassification ClassificationTrees = 1;</code>
     */
    private $ClassificationTrees;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Vod\Models\Business\VodClassification[]|\Google\Protobuf\Internal\RepeatedField $ClassificationTrees
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodClassification ClassificationTrees = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClassificationTrees()
    {
        return $this->ClassificationTrees;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodClassification ClassificationTrees = 1;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodClassification[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClassificationTrees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\VodClassification::class);
        $this->ClassificationTrees = $arr;

        return $this;
    }

}
