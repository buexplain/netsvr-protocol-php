<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: registerResp.proto

namespace Netsvr\GPBMetadata;

class RegisterResp
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
registerResp.protonetsvr.registerResp"d
RegisterResp3
code (2%.netsvr.registerResp.RegisterRespCode
message (	
connId (	*\\
RegisterRespCode
Success 
UnmarshalError
InvalidEvent
DuplicateRegisterB\'Znetsvr/�Netsvr�Netsvr\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

