<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: connInfoResp.proto

namespace NetsvrProtocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>netsvr.connInfoResp.ConnInfoRespItem</code>
 */
class ConnInfoRespItem extends \Google\Protobuf\Internal\Message
{
    /**
     *当前连接的session
     *
     * Generated from protobuf field <code>string session = 1;</code>
     */
    protected $session = '';
    /**
     *当前连接绑定的客户id
     *
     * Generated from protobuf field <code>string customerId = 2;</code>
     */
    protected $customerId = '';
    /**
     *当前连接订阅的主题
     *
     * Generated from protobuf field <code>repeated string topics = 3;</code>
     */
    private $topics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *          当前连接的session
     *     @type string $customerId
     *          当前连接绑定的客户id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $topics
     *          当前连接订阅的主题
     * }
     */
    public function __construct($data = NULL) {
        \NetsvrProtocol\GPBMetadata\ConnInfoResp::initOnce();
        parent::__construct($data);
    }

    /**
     *当前连接的session
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     *当前连接的session
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     *当前连接绑定的客户id
     *
     * Generated from protobuf field <code>string customerId = 2;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     *当前连接绑定的客户id
     *
     * Generated from protobuf field <code>string customerId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customerId = $var;

        return $this;
    }

    /**
     *当前连接订阅的主题
     *
     * Generated from protobuf field <code>repeated string topics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     *当前连接订阅的主题
     *
     * Generated from protobuf field <code>repeated string topics = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->topics = $arr;

        return $this;
    }

}

