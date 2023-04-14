<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: limitReq.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *更新限流配置、获取网关中的限流配置的真实情况
 *这个配置不是永久生效的，网关进程重启后就以config.toml为准
 *如果配置的num是0，则更新不会生效
 *如果限流对象本身是个nilLimit，是个空壳子，则更新不会生效
 *如果nilLimit的情况下，需要限流，则必须重新配置config.toml，并重启网关
 *
 * Generated from protobuf message <code>netsvr.limitReq.LimitReq</code>
 */
class LimitReq extends \Google\Protobuf\Internal\Message
{
    /**
     *worker会将该值赋给router.Cmd
     *
     * Generated from protobuf field <code>int32 routerCmd = 1;</code>
     */
    protected $routerCmd = 0;
    /**
     *worker会原样回传给business
     *
     * Generated from protobuf field <code>bytes ctxData = 2;</code>
     */
    protected $ctxData = '';
    /**
     *要更新的限流配置，如果只想获取网关中的限流配置的真实情况，可以不传递
     *
     * Generated from protobuf field <code>repeated .netsvr.limitReq.LimitUpdateItem items = 3;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $routerCmd
     *          worker会将该值赋给router.Cmd
     *     @type string $ctxData
     *          worker会原样回传给business
     *     @type array<\Netsvr\LimitUpdateItem>|\Google\Protobuf\Internal\RepeatedField $items
     *          要更新的限流配置，如果只想获取网关中的限流配置的真实情况，可以不传递
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\LimitReq::initOnce();
        parent::__construct($data);
    }

    /**
     *worker会将该值赋给router.Cmd
     *
     * Generated from protobuf field <code>int32 routerCmd = 1;</code>
     * @return int
     */
    public function getRouterCmd()
    {
        return $this->routerCmd;
    }

    /**
     *worker会将该值赋给router.Cmd
     *
     * Generated from protobuf field <code>int32 routerCmd = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRouterCmd($var)
    {
        GPBUtil::checkInt32($var);
        $this->routerCmd = $var;

        return $this;
    }

    /**
     *worker会原样回传给business
     *
     * Generated from protobuf field <code>bytes ctxData = 2;</code>
     * @return string
     */
    public function getCtxData()
    {
        return $this->ctxData;
    }

    /**
     *worker会原样回传给business
     *
     * Generated from protobuf field <code>bytes ctxData = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCtxData($var)
    {
        GPBUtil::checkString($var, False);
        $this->ctxData = $var;

        return $this;
    }

    /**
     *要更新的限流配置，如果只想获取网关中的限流配置的真实情况，可以不传递
     *
     * Generated from protobuf field <code>repeated .netsvr.limitReq.LimitUpdateItem items = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     *要更新的限流配置，如果只想获取网关中的限流配置的真实情况，可以不传递
     *
     * Generated from protobuf field <code>repeated .netsvr.limitReq.LimitUpdateItem items = 3;</code>
     * @param array<\Netsvr\LimitUpdateItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Netsvr\LimitUpdateItem::class);
        $this->items = $arr;

        return $this;
    }

}
