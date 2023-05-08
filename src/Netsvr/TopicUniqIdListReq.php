<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: topicUniqIdListReq.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，获取网关中某几个主题包含的uniqId
 *
 * Generated from protobuf message <code>netsvr.topicUniqIdListReq.TopicUniqIdListReq</code>
 */
class TopicUniqIdListReq extends \Google\Protobuf\Internal\Message
{
    /**
     *目标主题
     *
     * Generated from protobuf field <code>repeated string topics = 1;</code>
     */
    private $topics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $topics
     *          目标主题
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\TopicUniqIdListReq::initOnce();
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

}

