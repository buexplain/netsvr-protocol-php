<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Netsvr\Router;

use UnexpectedValueException;

/**
 *worker能够处理的指令，分为三块：1、worker单向转发给business的指令，2、business单向请求worker的指令，3、business请求worker，worker再响应business的指令
 *
 * Protobuf type <code>netsvr.router.Cmd</code>
 */
class Cmd
{
    /**
     *毫无意义的占位符，目的是避免枚举从零开始，把指令搞大一点的目的是避免和business的指令段冲突
     *
     * Generated from protobuf enum <code>Placeholder = 0;</code>
     */
    const Placeholder = 0;
    /**
     *--------------------------------worker单向转发给business的指令 开始--------------------------------
     *
     * Generated from protobuf enum <code>Transfer = 90001001;</code>
     */
    const Transfer = 90001001;
    /**
     *连接关闭
     *
     * Generated from protobuf enum <code>ConnClose = 90001002;</code>
     */
    const ConnClose = 90001002;
    /**
     *连接打开
     *
     * Generated from protobuf enum <code>ConnOpen = 90001003;</code>
     */
    const ConnOpen = 90001003;
    /**
     *--------------------------------business单向请求worker的指令，worker不会响应business 开始--------------------------------
     *
     * Generated from protobuf enum <code>Register = 90002001;</code>
     */
    const Register = 90002001;
    /**
     *取消注册，取消后不会再收到客户信息
     *
     * Generated from protobuf enum <code>Unregister = 90002002;</code>
     */
    const Unregister = 90002002;
    /**
     *更新连接的info信息
     *
     * Generated from protobuf enum <code>InfoUpdate = 90002003;</code>
     */
    const InfoUpdate = 90002003;
    /**
     *删除连接的info信息
     *
     * Generated from protobuf enum <code>InfoDelete = 90002004;</code>
     */
    const InfoDelete = 90002004;
    /**
     *广播
     *
     * Generated from protobuf enum <code>Broadcast = 90002005;</code>
     */
    const Broadcast = 90002005;
    /**
     *组播
     *
     * Generated from protobuf enum <code>Multicast = 90002006;</code>
     */
    const Multicast = 90002006;
    /**
     *单播
     *
     * Generated from protobuf enum <code>SingleCast = 90002007;</code>
     */
    const SingleCast = 90002007;
    /**
     *订阅
     *
     * Generated from protobuf enum <code>TopicSubscribe = 90002008;</code>
     */
    const TopicSubscribe = 90002008;
    /**
     *取消订阅
     *
     * Generated from protobuf enum <code>TopicUnsubscribe = 90002009;</code>
     */
    const TopicUnsubscribe = 90002009;
    /**
     *删除主题
     *
     * Generated from protobuf enum <code>TopicDelete = 90002010;</code>
     */
    const TopicDelete = 90002010;
    /**
     *发布
     *
     * Generated from protobuf enum <code>TopicPublish = 90002011;</code>
     */
    const TopicPublish = 90002011;
    /**
     *强制关闭某个连接
     *
     * Generated from protobuf enum <code>ForceOffline = 90002012;</code>
     */
    const ForceOffline = 90002012;
    /**
     *强制关闭某个空session值的连接
     *
     * Generated from protobuf enum <code>ForceOfflineGuest = 90002013;</code>
     */
    const ForceOfflineGuest = 90002013;
    /**
     *--------------------------------business请求worker的指令，worker会响应business，响应的指令是worker通过routerCmd自定义的 开始--------------------------------
     *
     * Generated from protobuf enum <code>CheckOnline = 90003001;</code>
     */
    const CheckOnline = 90003001;
    /**
     *获取网关中全部的uniqId
     *
     * Generated from protobuf enum <code>UniqIdList = 90003002;</code>
     */
    const UniqIdList = 90003002;
    /**
     *获取网关中uniqId的数量
     *
     * Generated from protobuf enum <code>UniqIdCount = 90003003;</code>
     */
    const UniqIdCount = 90003003;
    /**
     *获取网关中的主题数量
     *
     * Generated from protobuf enum <code>TopicCount = 90003004;</code>
     */
    const TopicCount = 90003004;
    /**
     *获取网关中的主题
     *
     * Generated from protobuf enum <code>TopicList = 90003005;</code>
     */
    const TopicList = 90003005;
    /**
     *获取网关中某个主题包含的uniqId
     *
     * Generated from protobuf enum <code>TopicUniqIdList = 90003006;</code>
     */
    const TopicUniqIdList = 90003006;
    /**
     *获取网关中的主题包含的连接数
     *
     * Generated from protobuf enum <code>TopicUniqIdCount = 90003007;</code>
     */
    const TopicUniqIdCount = 90003007;
    /**
     *获取连接的信息
     *
     * Generated from protobuf enum <code>Info = 90003008;</code>
     */
    const Info = 90003008;
    /**
     *获取网关统计的服务状态
     *
     * Generated from protobuf enum <code>Metrics = 90003009;</code>
     */
    const Metrics = 90003009;
    /**
     *更新限流配置、获取网关中的限流配置的真实情况
     *
     * Generated from protobuf enum <code>Limit = 90003010;</code>
     */
    const Limit = 90003010;

    private static $valueToName = [
        self::Placeholder => 'Placeholder',
        self::Transfer => 'Transfer',
        self::ConnClose => 'ConnClose',
        self::ConnOpen => 'ConnOpen',
        self::Register => 'Register',
        self::Unregister => 'Unregister',
        self::InfoUpdate => 'InfoUpdate',
        self::InfoDelete => 'InfoDelete',
        self::Broadcast => 'Broadcast',
        self::Multicast => 'Multicast',
        self::SingleCast => 'SingleCast',
        self::TopicSubscribe => 'TopicSubscribe',
        self::TopicUnsubscribe => 'TopicUnsubscribe',
        self::TopicDelete => 'TopicDelete',
        self::TopicPublish => 'TopicPublish',
        self::ForceOffline => 'ForceOffline',
        self::ForceOfflineGuest => 'ForceOfflineGuest',
        self::CheckOnline => 'CheckOnline',
        self::UniqIdList => 'UniqIdList',
        self::UniqIdCount => 'UniqIdCount',
        self::TopicCount => 'TopicCount',
        self::TopicList => 'TopicList',
        self::TopicUniqIdList => 'TopicUniqIdList',
        self::TopicUniqIdCount => 'TopicUniqIdCount',
        self::Info => 'Info',
        self::Metrics => 'Metrics',
        self::Limit => 'Limit',
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
