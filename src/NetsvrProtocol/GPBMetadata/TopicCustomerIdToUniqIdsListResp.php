<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: topicCustomerIdToUniqIdsListResp.proto

namespace NetsvrProtocol\GPBMetadata;

class TopicCustomerIdToUniqIdsListResp
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
&topicCustomerIdToUniqIdsListResp.proto\'netsvr.topicCustomerIdToUniqIdsListResp"�
 TopicCustomerIdToUniqIdsListRespc
items (2T.netsvr.topicCustomerIdToUniqIdsListResp.TopicCustomerIdToUniqIdsListResp.ItemsEntry{

ItemsEntry
key (	\\
value (2M.netsvr.topicCustomerIdToUniqIdsListResp.TopicCustomerIdToUniqIdsListRespItem:8"�
$TopicCustomerIdToUniqIdsListRespItemg
items (2X.netsvr.topicCustomerIdToUniqIdsListResp.TopicCustomerIdToUniqIdsListRespItem.ItemsEntryr

ItemsEntry
key (	S
value (2D.netsvr.topicCustomerIdToUniqIdsListResp.CustomerIdToUniqIdsRespItem:8".
CustomerIdToUniqIdsRespItem
uniqIds (	B?ZnetsvrProtocol/�NetsvrProtocol�NetsvrProtocol\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

