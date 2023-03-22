<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: uniqIdListReq.proto

namespace Netsvr\UniqIdListReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，获取网关中全部的uniqId
 *
 * Generated from protobuf message <code>netsvr.uniqIdListReq.UniqIdListReq</code>
 */
class UniqIdListReq extends \Google\Protobuf\Internal\Message
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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $routerCmd
     *          worker会将该值赋给router.Cmd
     *     @type string $ctxData
     *          worker会原样回传给business
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UniqIdListReq::initOnce();
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

}

