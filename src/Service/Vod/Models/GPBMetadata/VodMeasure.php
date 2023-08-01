<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_measure.proto

namespace Byteplus\Service\Vod\Models\GPBMetadata;

class VodMeasure
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�,
\'byteplus/vod/business/vod_measure.protoByteplus.Vod.Models.Business"<
DescribeVodSpaceTranscodeItem
Name (	
Value ("�
%DescribeVodSpaceTranscodeDetailTVUnit
Time (	V
TranscodeItemList (2;.Byteplus.Vod.Models.Business.DescribeVodSpaceTranscodeItem"�
DescribeVodSpaceTranscodeDetail
Space (	
	TaskStage (	
Total (_
TranscodeUsageList (2C.Byteplus.Vod.Models.Business.DescribeVodSpaceTranscodeDetailTVUnit"�
#DescribeVodSpaceTranscodeDataResult
	SpaceList (	
	StartTime (	
EndTime (	



Aggregation (
DetailFieldList (	
TotalTranscodeData	 ([
TotalTranscodeDataList
 (2;.Byteplus.Vod.Models.Business.DescribeVodSpaceTranscodeItem^
TranscodeDataDetailList (2=.Byteplus.Vod.Models.Business.DescribeVodSpaceTranscodeDetail"B
 DescribeVodSpaceAIStatisDataItem
Time (	
Duration ("�
"DescribeVodSpaceAIStatisDataDetail
Space (	
	TaskStage (	W
AiUsageDataList (2>.Byteplus.Vod.Models.Business.DescribeVodSpaceAIStatisDataItem"�
"DescribeVodSpaceAIStatisDataResult
	SpaceList (	
	StartTime (	
EndTime (	
MediaAiType (	

Aggregation (
DetailFieldList (	
TotalAiUsageData (W
AiUsageDataList	 (2>.Byteplus.Vod.Models.Business.DescribeVodSpaceAIStatisDataItem_
AiUsageDataDetailList
 (2@.Byteplus.Vod.Models.Business.DescribeVodSpaceAIStatisDataDetail"E
&DescribeVodSpaceSubtitleStatisDataItem
Time (	
Usage ("�
(DescribeVodSpaceSubtitleStatisDataDetail
Space (	
	TaskStage (	c
SubtitleUsageDataList (2D.Byteplus.Vod.Models.Business.DescribeVodSpaceSubtitleStatisDataItem"�
(DescribeVodSpaceSubtitleStatisDataResult
	SpaceList (	
	StartTime (	
EndTime (	
SubtitleType (	

Aggregation (
DetailFieldList (	
TotalSubtitleUsageData (c
SubtitleUsageDataList	 (2D.Byteplus.Vod.Models.Business.DescribeVodSpaceSubtitleStatisDataItemk
SubtitleUsageDataDetailList
 (2F.Byteplus.Vod.Models.Business.DescribeVodSpaceSubtitleStatisDataDetail"C
$DescribeVodSpaceDetectStatisDataItem
Time (	
Usage ("�
&DescribeVodSpaceDetectStatisDataDetail
Space (	
	TaskStage (	_
DetectUsageDataList (2B.Byteplus.Vod.Models.Business.DescribeVodSpaceDetectStatisDataItem"�
&DescribeVodSpaceDetectStatisDataResult
	SpaceList (	
	StartTime (	
EndTime (	

DetectType (	

Aggregation (
DetailFieldList (	
TotalDetectUsageData (_
DetectUsageDataList	 (2B.Byteplus.Vod.Models.Business.DescribeVodSpaceDetectStatisDataItemg
DetectUsageDataDetailList
 (2D.Byteplus.Vod.Models.Business.DescribeVodSpaceDetectStatisDataDetail":
DescribeVodSnapshotDataItem
Time (	
Count ("�
DescribeVodSnapshotDataDetail
Space (	
	TaskStage (	
Total (	S
SnapshotDataList (29.Byteplus.Vod.Models.Business.DescribeVodSnapshotDataItem"�
DescribeVodSnapshotDataResult
	SpaceList (	
	StartTime (	
EndTime (	
SnapshotType (	

Aggregation (
DetailFieldList (	
TotalSnapshotData (S
SnapshotDataList	 (29.Byteplus.Vod.Models.Business.DescribeVodSnapshotDataItem[
SnapshotDetailDataList
 (2;.Byteplus.Vod.Models.Business.DescribeVodSnapshotDataDetail"�
%DescribeVodSpaceWorkflowTranscodeInfo
TemplateType (	
FileType (	
Duration (
Codec (	
Remux (

Definition (	
Width (
Height (
Slice	 (

 ("c
$DescribeVodSpaceWorkflowSnapshotInfo
TemplateType (	
Number (

\'DescribeVodSpaceWorkflowEnhanceExecInfo
TemplateType (	
Duration (

#DescribeVodSpaceWorkflowVideoAIInfo
TemplateType (	
Duration (
Number (

DescribeVodSpaceWorkflowDetail
RunId (	
Vid (	

TemplateId (	
	SpaceName (	
Status (	
	StartTime (	
EndTime (	Z

SnapshotInfo	 (2B.Byteplus.Vod.Models.Business.DescribeVodSpaceWorkflowSnapshotInfo^
EnhanceExecInfo
 (2E.Byteplus.Vod.Models.Business.DescribeVodSpaceWorkflowEnhanceExecInfoV
VideoAIInfo (2A.Byteplus.Vod.Models.Business.DescribeVodSpaceWorkflowVideoAIInfo"�
(DescribeVodSpaceWorkflowDetailDataResult
Region (	
Space (	
	StartTime (	
EndTime (	
PageSize (
PageNum (
Total (X
WorkflowDetailData (2<.Byteplus.Vod.Models.Business.DescribeVodSpaceWorkflowDetail"�
DescribeVodSpaceEditDetail
Time (	
	OutputVid (	
Space (	
Codec (	

Definition (	
Duration ("�
$DescribeVodSpaceEditDetailDataResult
Region (	
Space (	
	StartTime (	
EndTime (	
PageSize (
PageNum (
Total (P
EditDetailData (28.Byteplus.Vod.Models.Business.DescribeVodSpaceEditDetail"W
"DescribeVodPlayFileLogByDomainItem
Date (	
Domain (	
DownloadUrl (	"�
$DescribeVodPlayFileLogByDomainResult
	StartTime (	
EndTime (	

DomainList (	R
FileList (2@.Byteplus.Vod.Models.Business.DescribeVodPlayFileLogByDomainItemB�
\'com.byteplus.service.vod.model.businessB
VodMeasurePZGgithub.com/byteplus-sdk/byteplus-sdk-golang/service/vod/models/business���$Byteplus\\Service\\Vod\\Models\\Business�\'Byteplus\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}
