<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: topicUniqIdListResp.proto

namespace Netsvr\GPBMetadata;

class TopicUniqIdListResp
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
topicUniqIdListResp.protonetsvr.topicUniqIdListResp"�
TopicUniqIdListRespI
items (2:.netsvr.topicUniqIdListResp.TopicUniqIdListResp.ItemsEntrya

ItemsEntry
key (	B
value (23.netsvr.topicUniqIdListResp.TopicUniqIdListRespItem:8"*
TopicUniqIdListRespItem
uniqIds (	B\'Znetsvr/�Netsvr�Netsvr\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

