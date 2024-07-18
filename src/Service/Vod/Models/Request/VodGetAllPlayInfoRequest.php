<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * **********************************************************************
 * 播放
 * **********************************************************************
 *
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodGetAllPlayInfoRequest</code>
 */
class VodGetAllPlayInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频ID 
     *
     * Generated from protobuf field <code>string Vids = 1;</code>
     */
    protected $Vids = '';
    /**
     * 封装格式，支持 mp4、dash、hls、mp3、m4a、ogg。多个Format
     * 组成的字符串，中间用","隔开。默认获取全部
     *
     * Generated from protobuf field <code>string Formats = 2;</code>
     */
    protected $Formats = '';
    /**
     * 编码格式，支持 mp3、aac、opus、H264、H265、H266。多个Codec
     * 组成的字符串，中间用","隔开。默认获取全部
     *
     * Generated from protobuf field <code>string Codecs = 3;</code>
     */
    protected $Codecs = '';
    /**
     * 视频流清晰度，默认返回全部，支持：240p，360p，480p，540p，720p，1080p。多个
     * Codec 组成的字符串，中间用","隔开。默认获取全部
     *
     * Generated from protobuf field <code>string Definitions = 4;</code>
     */
    protected $Definitions = '';
    /**
     * 流文件类型。支持：video-视频流, audio-音频流。
     * 多个 FileType 组成的字符串，中间用","隔开。默认获取全部类型
     *
     * Generated from protobuf field <code>string FileTypes = 5;</code>
     */
    protected $FileTypes = '';
    /**
     * 水印贴片标签 
     *
     * Generated from protobuf field <code>string LogoTypes = 6;</code>
     */
    protected $LogoTypes = '';
    /**
     * 是否加密, 支持: "encrypt"-加密流, "normal"-非加密流, 默认返回全部 
     *
     * Generated from protobuf field <code>string NeedEncryptStream = 7;</code>
     */
    protected $NeedEncryptStream = '';
    /**
     * 返回https播放地址，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string Ssl = 8;</code>
     */
    protected $Ssl = '';
    /**
     * 是否需要雪碧图（缩略图），默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedThumbs = 9;</code>
     */
    protected $NeedThumbs = '';
    /**
     * 是否需要蒙版弹幕，默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedBarrageMask = 10;</code>
     */
    protected $NeedBarrageMask = '';
    /**
     * 指定CDN类型, 默认不传为普通CDN, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string CdnType = 11;</code>
     */
    protected $CdnType = '';
    /**
     * 唯一性标识信息, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string UnionInfo = 12;</code>
     */
    protected $UnionInfo = '';
    /**
     * 播放场景，指定获取对应场景的音视频流。当前支持：preview-试看 
     *
     * Generated from protobuf field <code>string PlayScene = 13;</code>
     */
    protected $PlayScene = '';
    /**
     * DRM过期时间戳, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string DrmExpireTimestamp = 14;</code>
     */
    protected $DrmExpireTimestamp = '';
    /**
     * 默认获取全部。支持: "SDR", "PQHDR", "SLGHDR", 默认返回全部 
     *
     * Generated from protobuf field <code>string HDRType = 15;</code>
     */
    protected $HDRType = '';
    /**
     * 使用的帧对齐转码版本。支持: "1"-返回版本一, 默认不指定版本，全部返回 
     *
     * Generated from protobuf field <code>string KeyFrameAlignmentVersion = 16;</code>
     */
    protected $KeyFrameAlignmentVersion = '';
    /**
     * 发布状态, 支持: "Available"-发布, "NoAction"-未发布, 默认返回全部 
     *
     * Generated from protobuf field <code>string UserAction = 17;</code>
     */
    protected $UserAction = '';
    /**
     * 音频音质。当 FileType 为
     * audio时起作用，表示音频音质参数。支持：medium、higher、highest.默认返回所有音频流
     *
     * Generated from protobuf field <code>string Quality = 18;</code>
     */
    protected $Quality = '';
    /**
     *强行指定本次请求的时间戳防盗链 单位秒
     *
     * Generated from protobuf field <code>string ForceExpire = 19;</code>
     */
    protected $ForceExpire = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vids
     *           视频ID 
     *     @type string $Formats
     *           封装格式，支持 mp4、dash、hls、mp3、m4a、ogg。多个Format
     *           组成的字符串，中间用","隔开。默认获取全部
     *     @type string $Codecs
     *           编码格式，支持 mp3、aac、opus、H264、H265、H266。多个Codec
     *           组成的字符串，中间用","隔开。默认获取全部
     *     @type string $Definitions
     *           视频流清晰度，默认返回全部，支持：240p，360p，480p，540p，720p，1080p。多个
     *           Codec 组成的字符串，中间用","隔开。默认获取全部
     *     @type string $FileTypes
     *           流文件类型。支持：video-视频流, audio-音频流。
     *           多个 FileType 组成的字符串，中间用","隔开。默认获取全部类型
     *     @type string $LogoTypes
     *           水印贴片标签 
     *     @type string $NeedEncryptStream
     *           是否加密, 支持: "encrypt"-加密流, "normal"-非加密流, 默认返回全部 
     *     @type string $Ssl
     *           返回https播放地址，默认否, 1-是；0-否 
     *     @type string $NeedThumbs
     *           是否需要雪碧图（缩略图），默认否，1-是；0-否 
     *     @type string $NeedBarrageMask
     *           是否需要蒙版弹幕，默认否，1-是；0-否 
     *     @type string $CdnType
     *           指定CDN类型, 默认不传为普通CDN, 若需使用请联系技术支持 
     *     @type string $UnionInfo
     *           唯一性标识信息, 若需使用请联系技术支持 
     *     @type string $PlayScene
     *           播放场景，指定获取对应场景的音视频流。当前支持：preview-试看 
     *     @type string $DrmExpireTimestamp
     *           DRM过期时间戳, 若需使用请联系技术支持 
     *     @type string $HDRType
     *           默认获取全部。支持: "SDR", "PQHDR", "SLGHDR", 默认返回全部 
     *     @type string $KeyFrameAlignmentVersion
     *           使用的帧对齐转码版本。支持: "1"-返回版本一, 默认不指定版本，全部返回 
     *     @type string $UserAction
     *           发布状态, 支持: "Available"-发布, "NoAction"-未发布, 默认返回全部 
     *     @type string $Quality
     *           音频音质。当 FileType 为
     *           audio时起作用，表示音频音质参数。支持：medium、higher、highest.默认返回所有音频流
     *     @type string $ForceExpire
     *          强行指定本次请求的时间戳防盗链 单位秒
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 视频ID 
     *
     * Generated from protobuf field <code>string Vids = 1;</code>
     * @return string
     */
    public function getVids()
    {
        return $this->Vids;
    }

    /**
     * 视频ID 
     *
     * Generated from protobuf field <code>string Vids = 1;</code>
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
     * 封装格式，支持 mp4、dash、hls、mp3、m4a、ogg。多个Format
     * 组成的字符串，中间用","隔开。默认获取全部
     *
     * Generated from protobuf field <code>string Formats = 2;</code>
     * @return string
     */
    public function getFormats()
    {
        return $this->Formats;
    }

    /**
     * 封装格式，支持 mp4、dash、hls、mp3、m4a、ogg。多个Format
     * 组成的字符串，中间用","隔开。默认获取全部
     *
     * Generated from protobuf field <code>string Formats = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFormats($var)
    {
        GPBUtil::checkString($var, True);
        $this->Formats = $var;

        return $this;
    }

    /**
     * 编码格式，支持 mp3、aac、opus、H264、H265、H266。多个Codec
     * 组成的字符串，中间用","隔开。默认获取全部
     *
     * Generated from protobuf field <code>string Codecs = 3;</code>
     * @return string
     */
    public function getCodecs()
    {
        return $this->Codecs;
    }

    /**
     * 编码格式，支持 mp3、aac、opus、H264、H265、H266。多个Codec
     * 组成的字符串，中间用","隔开。默认获取全部
     *
     * Generated from protobuf field <code>string Codecs = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCodecs($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codecs = $var;

        return $this;
    }

    /**
     * 视频流清晰度，默认返回全部，支持：240p，360p，480p，540p，720p，1080p。多个
     * Codec 组成的字符串，中间用","隔开。默认获取全部
     *
     * Generated from protobuf field <code>string Definitions = 4;</code>
     * @return string
     */
    public function getDefinitions()
    {
        return $this->Definitions;
    }

    /**
     * 视频流清晰度，默认返回全部，支持：240p，360p，480p，540p，720p，1080p。多个
     * Codec 组成的字符串，中间用","隔开。默认获取全部
     *
     * Generated from protobuf field <code>string Definitions = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinitions($var)
    {
        GPBUtil::checkString($var, True);
        $this->Definitions = $var;

        return $this;
    }

    /**
     * 流文件类型。支持：video-视频流, audio-音频流。
     * 多个 FileType 组成的字符串，中间用","隔开。默认获取全部类型
     *
     * Generated from protobuf field <code>string FileTypes = 5;</code>
     * @return string
     */
    public function getFileTypes()
    {
        return $this->FileTypes;
    }

    /**
     * 流文件类型。支持：video-视频流, audio-音频流。
     * 多个 FileType 组成的字符串，中间用","隔开。默认获取全部类型
     *
     * Generated from protobuf field <code>string FileTypes = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFileTypes($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileTypes = $var;

        return $this;
    }

    /**
     * 水印贴片标签 
     *
     * Generated from protobuf field <code>string LogoTypes = 6;</code>
     * @return string
     */
    public function getLogoTypes()
    {
        return $this->LogoTypes;
    }

    /**
     * 水印贴片标签 
     *
     * Generated from protobuf field <code>string LogoTypes = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoTypes($var)
    {
        GPBUtil::checkString($var, True);
        $this->LogoTypes = $var;

        return $this;
    }

    /**
     * 是否加密, 支持: "encrypt"-加密流, "normal"-非加密流, 默认返回全部 
     *
     * Generated from protobuf field <code>string NeedEncryptStream = 7;</code>
     * @return string
     */
    public function getNeedEncryptStream()
    {
        return $this->NeedEncryptStream;
    }

    /**
     * 是否加密, 支持: "encrypt"-加密流, "normal"-非加密流, 默认返回全部 
     *
     * Generated from protobuf field <code>string NeedEncryptStream = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedEncryptStream($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedEncryptStream = $var;

        return $this;
    }

    /**
     * 返回https播放地址，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string Ssl = 8;</code>
     * @return string
     */
    public function getSsl()
    {
        return $this->Ssl;
    }

    /**
     * 返回https播放地址，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string Ssl = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSsl($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ssl = $var;

        return $this;
    }

    /**
     * 是否需要雪碧图（缩略图），默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedThumbs = 9;</code>
     * @return string
     */
    public function getNeedThumbs()
    {
        return $this->NeedThumbs;
    }

    /**
     * 是否需要雪碧图（缩略图），默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedThumbs = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedThumbs($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedThumbs = $var;

        return $this;
    }

    /**
     * 是否需要蒙版弹幕，默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedBarrageMask = 10;</code>
     * @return string
     */
    public function getNeedBarrageMask()
    {
        return $this->NeedBarrageMask;
    }

    /**
     * 是否需要蒙版弹幕，默认否，1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedBarrageMask = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedBarrageMask($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedBarrageMask = $var;

        return $this;
    }

    /**
     * 指定CDN类型, 默认不传为普通CDN, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string CdnType = 11;</code>
     * @return string
     */
    public function getCdnType()
    {
        return $this->CdnType;
    }

    /**
     * 指定CDN类型, 默认不传为普通CDN, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string CdnType = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCdnType($var)
    {
        GPBUtil::checkString($var, True);
        $this->CdnType = $var;

        return $this;
    }

    /**
     * 唯一性标识信息, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string UnionInfo = 12;</code>
     * @return string
     */
    public function getUnionInfo()
    {
        return $this->UnionInfo;
    }

    /**
     * 唯一性标识信息, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string UnionInfo = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setUnionInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->UnionInfo = $var;

        return $this;
    }

    /**
     * 播放场景，指定获取对应场景的音视频流。当前支持：preview-试看 
     *
     * Generated from protobuf field <code>string PlayScene = 13;</code>
     * @return string
     */
    public function getPlayScene()
    {
        return $this->PlayScene;
    }

    /**
     * 播放场景，指定获取对应场景的音视频流。当前支持：preview-试看 
     *
     * Generated from protobuf field <code>string PlayScene = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayScene($var)
    {
        GPBUtil::checkString($var, True);
        $this->PlayScene = $var;

        return $this;
    }

    /**
     * DRM过期时间戳, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string DrmExpireTimestamp = 14;</code>
     * @return string
     */
    public function getDrmExpireTimestamp()
    {
        return $this->DrmExpireTimestamp;
    }

    /**
     * DRM过期时间戳, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string DrmExpireTimestamp = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setDrmExpireTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->DrmExpireTimestamp = $var;

        return $this;
    }

    /**
     * 默认获取全部。支持: "SDR", "PQHDR", "SLGHDR", 默认返回全部 
     *
     * Generated from protobuf field <code>string HDRType = 15;</code>
     * @return string
     */
    public function getHDRType()
    {
        return $this->HDRType;
    }

    /**
     * 默认获取全部。支持: "SDR", "PQHDR", "SLGHDR", 默认返回全部 
     *
     * Generated from protobuf field <code>string HDRType = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setHDRType($var)
    {
        GPBUtil::checkString($var, True);
        $this->HDRType = $var;

        return $this;
    }

    /**
     * 使用的帧对齐转码版本。支持: "1"-返回版本一, 默认不指定版本，全部返回 
     *
     * Generated from protobuf field <code>string KeyFrameAlignmentVersion = 16;</code>
     * @return string
     */
    public function getKeyFrameAlignmentVersion()
    {
        return $this->KeyFrameAlignmentVersion;
    }

    /**
     * 使用的帧对齐转码版本。支持: "1"-返回版本一, 默认不指定版本，全部返回 
     *
     * Generated from protobuf field <code>string KeyFrameAlignmentVersion = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyFrameAlignmentVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->KeyFrameAlignmentVersion = $var;

        return $this;
    }

    /**
     * 发布状态, 支持: "Available"-发布, "NoAction"-未发布, 默认返回全部 
     *
     * Generated from protobuf field <code>string UserAction = 17;</code>
     * @return string
     */
    public function getUserAction()
    {
        return $this->UserAction;
    }

    /**
     * 发布状态, 支持: "Available"-发布, "NoAction"-未发布, 默认返回全部 
     *
     * Generated from protobuf field <code>string UserAction = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setUserAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->UserAction = $var;

        return $this;
    }

    /**
     * 音频音质。当 FileType 为
     * audio时起作用，表示音频音质参数。支持：medium、higher、highest.默认返回所有音频流
     *
     * Generated from protobuf field <code>string Quality = 18;</code>
     * @return string
     */
    public function getQuality()
    {
        return $this->Quality;
    }

    /**
     * 音频音质。当 FileType 为
     * audio时起作用，表示音频音质参数。支持：medium、higher、highest.默认返回所有音频流
     *
     * Generated from protobuf field <code>string Quality = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setQuality($var)
    {
        GPBUtil::checkString($var, True);
        $this->Quality = $var;

        return $this;
    }

    /**
     *强行指定本次请求的时间戳防盗链 单位秒
     *
     * Generated from protobuf field <code>string ForceExpire = 19;</code>
     * @return string
     */
    public function getForceExpire()
    {
        return $this->ForceExpire;
    }

    /**
     *强行指定本次请求的时间戳防盗链 单位秒
     *
     * Generated from protobuf field <code>string ForceExpire = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setForceExpire($var)
    {
        GPBUtil::checkString($var, True);
        $this->ForceExpire = $var;

        return $this;
    }

}

