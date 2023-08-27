<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: topicPublish.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，给某几个主题发布信息，一份消息发布到多个主题
 *
 * Generated from protobuf message <code>netsvr.topicPublish.TopicPublish</code>
 */
class TopicPublish extends \Google\Protobuf\Internal\Message
{
    /**
     *目标主题
     *
     * Generated from protobuf field <code>repeated string topics = 1;</code>
     */
    private $topics;
    /**
     *需要发给客户的数据
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
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $topics
     *          目标主题
     *     @type string $data
     *          需要发给客户的数据
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\TopicPublish::initOnce();
        parent::__construct($data);
    }

    /**
     *目标主题
     *
     * Generated from protobuf field <code>repeated string topics = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     *目标主题
     *
     * Generated from protobuf field <code>repeated string topics = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->topics = $arr;

        return $this;
    }

    /**
     *需要发给客户的数据
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     *需要发给客户的数据
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

