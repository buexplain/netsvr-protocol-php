<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: topicSubscribe.proto

namespace Netsvr\TopicSubscribe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，进行订阅操作
 *
 * Generated from protobuf message <code>netsvr.topicSubscribe.TopicSubscribe</code>
 */
class TopicSubscribe extends \Google\Protobuf\Internal\Message
{
    /**
     *目标uniqId
     *
     * Generated from protobuf field <code>string uniqId = 1;</code>
     */
    protected $uniqId = '';
    /**
     *需要订阅的主题
     *
     * Generated from protobuf field <code>repeated string topics = 2;</code>
     */
    private $topics;
    /**
     *订阅主题后，需要发给客户的数据，如果没有，可以不传
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uniqId
     *          目标uniqId
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $topics
     *          需要订阅的主题
     *     @type string $data
     *          订阅主题后，需要发给客户的数据，如果没有，可以不传
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\TopicSubscribe::initOnce();
        parent::__construct($data);
    }

    /**
     *目标uniqId
     *
     * Generated from protobuf field <code>string uniqId = 1;</code>
     * @return string
     */
    public function getUniqId()
    {
        return $this->uniqId;
    }

    /**
     *目标uniqId
     *
     * Generated from protobuf field <code>string uniqId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUniqId($var)
    {
        GPBUtil::checkString($var, True);
        $this->uniqId = $var;

        return $this;
    }

    /**
     *需要订阅的主题
     *
     * Generated from protobuf field <code>repeated string topics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     *需要订阅的主题
     *
     * Generated from protobuf field <code>repeated string topics = 2;</code>
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
     *订阅主题后，需要发给客户的数据，如果没有，可以不传
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     *订阅主题后，需要发给客户的数据，如果没有，可以不传
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
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

