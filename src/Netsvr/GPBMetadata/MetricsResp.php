<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: metricsResp.proto

namespace Netsvr\GPBMetadata;

class MetricsResp
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
metricsResp.protonetsvr.metricsResp"�
MetricsResp9
items (2*.netsvr.metricsResp.MetricsResp.ItemsEntryQ

ItemsEntry
key (2
value (2#.netsvr.metricsResp.MetricsRespItem:8"n
MetricsRespItem
item (
count (
meanRate (
rate1 (
rate5 (
rate15	 (B\'Znetsvr/�Netsvr�Netsvr\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

