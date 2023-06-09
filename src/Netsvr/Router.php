<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *路由
 *
 * Generated from protobuf message <code>netsvr.router.Router</code>
 */
class Router extends \Google\Protobuf\Internal\Message
{
    /**
     *命令
     *
     * Generated from protobuf field <code>.netsvr.router.Cmd cmd = 1;</code>
     */
    protected $cmd = 0;
    /**
     *命令携带的数据
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cmd
     *          命令
     *     @type string $data
     *          命令携带的数据
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     *命令
     *
     * Generated from protobuf field <code>.netsvr.router.Cmd cmd = 1;</code>
     * @return int
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     *命令
     *
     * Generated from protobuf field <code>.netsvr.router.Cmd cmd = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCmd($var)
    {
        GPBUtil::checkEnum($var, \Netsvr\Cmd::class);
        $this->cmd = $var;

        return $this;
    }

    /**
     *命令携带的数据
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     *命令携带的数据
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

