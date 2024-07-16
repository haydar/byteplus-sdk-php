<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * **********************************************************************
 * 播放列表
 * **********************************************************************
 *
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodCreatePlaylistRequest</code>
 */
class VodCreatePlaylistRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 播放列表名
     *
     * Generated from protobuf field <code>string Name = 1;</code>
     */
    protected $Name = '';
    /**
     * 封装格式，支持 mp4、dash、hls、mp3、m4a、ogg, 默认mp4
     *
     * Generated from protobuf field <code>string Format = 2;</code>
     */
    protected $Format = '';
    /**
     * 编码格式，支持 mp3、aac、opus、H264、H265、H266, 视频默认H264
     *
     * Generated from protobuf field <code>string Codec = 3;</code>
     */
    protected $Codec = '';
    /**
     * 视频流清晰度，支持：240p,360p,480p,540p,720p,1080p,2k,4k,od,oe.
     *
     * Generated from protobuf field <code>string Definition = 4;</code>
     */
    protected $Definition = '';
    /**
     * 以,分隔，最多100个
     *
     * Generated from protobuf field <code>string Vids = 5;</code>
     */
    protected $Vids = '';
    /**
     * 以秒为单位的时间戳
     *
     * Generated from protobuf field <code>string StartTime = 6;</code>
     */
    protected $StartTime = '';
    /**
     * 以秒为单位的时间戳，大于StartTime
     *
     * Generated from protobuf field <code>string EndTime = 7;</code>
     */
    protected $EndTime = '';
    /**
     * 0代表无限循环，默认为0
     *
     * Generated from protobuf field <code>string Cycles = 8;</code>
     */
    protected $Cycles = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Name
     *           播放列表名
     *     @type string $Format
     *           封装格式，支持 mp4、dash、hls、mp3、m4a、ogg, 默认mp4
     *     @type string $Codec
     *           编码格式，支持 mp3、aac、opus、H264、H265、H266, 视频默认H264
     *     @type string $Definition
     *           视频流清晰度，支持：240p,360p,480p,540p,720p,1080p,2k,4k,od,oe.
     *     @type string $Vids
     *           以,分隔，最多100个
     *     @type string $StartTime
     *           以秒为单位的时间戳
     *     @type string $EndTime
     *           以秒为单位的时间戳，大于StartTime
     *     @type string $Cycles
     *           0代表无限循环，默认为0
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 播放列表名
     *
     * Generated from protobuf field <code>string Name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * 播放列表名
     *
     * Generated from protobuf field <code>string Name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * 封装格式，支持 mp4、dash、hls、mp3、m4a、ogg, 默认mp4
     *
     * Generated from protobuf field <code>string Format = 2;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * 封装格式，支持 mp4、dash、hls、mp3、m4a、ogg, 默认mp4
     *
     * Generated from protobuf field <code>string Format = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Format = $var;

        return $this;
    }

    /**
     * 编码格式，支持 mp3、aac、opus、H264、H265、H266, 视频默认H264
     *
     * Generated from protobuf field <code>string Codec = 3;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     * 编码格式，支持 mp3、aac、opus、H264、H265、H266, 视频默认H264
     *
     * Generated from protobuf field <code>string Codec = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codec = $var;

        return $this;
    }

    /**
     * 视频流清晰度，支持：240p,360p,480p,540p,720p,1080p,2k,4k,od,oe.
     *
     * Generated from protobuf field <code>string Definition = 4;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->Definition;
    }

    /**
     * 视频流清晰度，支持：240p,360p,480p,540p,720p,1080p,2k,4k,od,oe.
     *
     * Generated from protobuf field <code>string Definition = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->Definition = $var;

        return $this;
    }

    /**
     * 以,分隔，最多100个
     *
     * Generated from protobuf field <code>string Vids = 5;</code>
     * @return string
     */
    public function getVids()
    {
        return $this->Vids;
    }

    /**
     * 以,分隔，最多100个
     *
     * Generated from protobuf field <code>string Vids = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVids($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vids = $var;

        return $this;
    }

    /**
     * 以秒为单位的时间戳
     *
     * Generated from protobuf field <code>string StartTime = 6;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * 以秒为单位的时间戳
     *
     * Generated from protobuf field <code>string StartTime = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartTime = $var;

        return $this;
    }

    /**
     * 以秒为单位的时间戳，大于StartTime
     *
     * Generated from protobuf field <code>string EndTime = 7;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * 以秒为单位的时间戳，大于StartTime
     *
     * Generated from protobuf field <code>string EndTime = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->EndTime = $var;

        return $this;
    }

    /**
     * 0代表无限循环，默认为0
     *
     * Generated from protobuf field <code>string Cycles = 8;</code>
     * @return string
     */
    public function getCycles()
    {
        return $this->Cycles;
    }

    /**
     * 0代表无限循环，默认为0
     *
     * Generated from protobuf field <code>string Cycles = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCycles($var)
    {
        GPBUtil::checkString($var, True);
        $this->Cycles = $var;

        return $this;
    }

}

