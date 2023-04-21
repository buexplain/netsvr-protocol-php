<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: registerResp.proto

namespace Netsvr;

use UnexpectedValueException;

/**
 * Protobuf type <code>netsvr.registerResp.Code</code>
 */
class Code
{
    /**
     *注册成功
     *
     * Generated from protobuf enum <code>Success = 0;</code>
     */
    const Success = 0;
    /**
     *解析注册proto协议失败
     *
     * Generated from protobuf enum <code>UnmarshalError = 1;</code>
     */
    const UnmarshalError = 1;
    /**
     *workerId配置错误，溢出允许的范围
     *
     * Generated from protobuf enum <code>WorkerIdOverflow = 2;</code>
     */
    const WorkerIdOverflow = 2;
    /**
     *serverId配置错误，与网关配置的不一致
     *
     * Generated from protobuf enum <code>ServerIdInconsistent = 3;</code>
     */
    const ServerIdInconsistent = 3;
    /**
     *已经注册过，不允许重复发起注册请求
     *
     * Generated from protobuf enum <code>DuplicateRegister = 4;</code>
     */
    const DuplicateRegister = 4;

    private static $valueToName = [
        self::Success => 'Success',
        self::UnmarshalError => 'UnmarshalError',
        self::WorkerIdOverflow => 'WorkerIdOverflow',
        self::ServerIdInconsistent => 'ServerIdInconsistent',
        self::DuplicateRegister => 'DuplicateRegister',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

