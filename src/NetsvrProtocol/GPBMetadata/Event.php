<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: event.proto

namespace NetsvrProtocol\GPBMetadata;

class Event
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
¶
event.protonetsvr.event*@
Event
Placeholder 

OnOpen
OnClose
	OnMessageB?ZnetsvrProtocol/ NetsvrProtocol‚NetsvrProtocol\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

