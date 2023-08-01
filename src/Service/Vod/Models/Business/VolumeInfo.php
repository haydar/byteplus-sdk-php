<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_workflow.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VolumeInfo</code>
 */
class VolumeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * 响度, 单位：LUFS
     *
     * Generated from protobuf field <code>double Loudness = 1;</code>
     */
    protected $Loudness = 0.0;
    /**
     * 峰值，范围：（0, 1.0], 峰值归一化
     *
     * Generated from protobuf field <code>double Peak = 2;</code>
     */
    protected $Peak = 0.0;
    /**
     * 均值，单位：dB
     *
     * Generated from protobuf field <code>double MeanVolume = 3;</code>
     */
    protected $MeanVolume = 0.0;
    /**
     * 最大值，单位：dB
     *
     * Generated from protobuf field <code>double MaxVolume = 4;</code>
     */
    protected $MaxVolume = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $Loudness
     *           响度, 单位：LUFS
     *     @type float $Peak
     *           峰值，范围：（0, 1.0], 峰值归一化
     *     @type float $MeanVolume
     *           均值，单位：dB
     *     @type float $MaxVolume
     *           最大值，单位：dB
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 响度, 单位：LUFS
     *
     * Generated from protobuf field <code>double Loudness = 1;</code>
     * @return float
     */
    public function getLoudness()
    {
        return $this->Loudness;
    }

    /**
     * 响度, 单位：LUFS
     *
     * Generated from protobuf field <code>double Loudness = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setLoudness($var)
    {
        GPBUtil::checkDouble($var);
        $this->Loudness = $var;

        return $this;
    }

    /**
     * 峰值，范围：（0, 1.0], 峰值归一化
     *
     * Generated from protobuf field <code>double Peak = 2;</code>
     * @return float
     */
    public function getPeak()
    {
        return $this->Peak;
    }

    /**
     * 峰值，范围：（0, 1.0], 峰值归一化
     *
     * Generated from protobuf field <code>double Peak = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setPeak($var)
    {
        GPBUtil::checkDouble($var);
        $this->Peak = $var;

        return $this;
    }

    /**
     * 均值，单位：dB
     *
     * Generated from protobuf field <code>double MeanVolume = 3;</code>
     * @return float
     */
    public function getMeanVolume()
    {
        return $this->MeanVolume;
    }

    /**
     * 均值，单位：dB
     *
     * Generated from protobuf field <code>double MeanVolume = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setMeanVolume($var)
    {
        GPBUtil::checkDouble($var);
        $this->MeanVolume = $var;

        return $this;
    }

    /**
     * 最大值，单位：dB
     *
     * Generated from protobuf field <code>double MaxVolume = 4;</code>
     * @return float
     */
    public function getMaxVolume()
    {
        return $this->MaxVolume;
    }

    /**
     * 最大值，单位：dB
     *
     * Generated from protobuf field <code>double MaxVolume = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setMaxVolume($var)
    {
        GPBUtil::checkDouble($var);
        $this->MaxVolume = $var;

        return $this;
    }

}

