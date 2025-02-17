<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: unRegisterReq.proto

namespace NetsvrProtocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，取消一个已经被注册的连接
 *
 * Generated from protobuf message <code>netsvr.unRegisterReq.UnRegisterReq</code>
 */
class UnRegisterReq extends \Google\Protobuf\Internal\Message
{
    /**
     *连接id
     *
     * Generated from protobuf field <code>string connId = 1;</code>
     */
    protected $connId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $connId
     *          连接id
     * }
     */
    public function __construct($data = NULL) {
        \NetsvrProtocol\GPBMetadata\UnRegisterReq::initOnce();
        parent::__construct($data);
    }

    /**
     *连接id
     *
     * Generated from protobuf field <code>string connId = 1;</code>
     * @return string
     */
    public function getConnId()
    {
        return $this->connId;
    }

    /**
     *连接id
     *
     * Generated from protobuf field <code>string connId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConnId($var)
    {
        GPBUtil::checkString($var, True);
        $this->connId = $var;

        return $this;
    }

}

