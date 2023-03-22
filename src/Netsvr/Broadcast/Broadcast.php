<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: broadcast.proto

namespace Netsvr\Broadcast;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，进行广播
 *
 * Generated from protobuf message <code>netsvr.broadcast.Broadcast</code>
 */
class Broadcast extends \Google\Protobuf\Internal\Message
{
    /**
     *需要发给客户的数据
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *          需要发给客户的数据
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Broadcast::initOnce();
        parent::__construct($data);
    }

    /**
     *需要发给客户的数据
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     *需要发给客户的数据
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
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

