<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: topicListResp.proto

namespace Netsvr\TopicListResp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *worker响应business，返回网关中的主题
 *
 * Generated from protobuf message <code>netsvr.topicListResp.TopicListResp</code>
 */
class TopicListResp extends \Google\Protobuf\Internal\Message
{
    /**
     *worker原样回传给business
     *
     * Generated from protobuf field <code>bytes ctxData = 1;</code>
     */
    protected $ctxData = '';
    /**
     *网关中现存的主题
     *
     * Generated from protobuf field <code>repeated string topics = 2;</code>
     */
    private $topics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ctxData
     *          worker原样回传给business
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $topics
     *          网关中现存的主题
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\TopicListResp::initOnce();
        parent::__construct($data);
    }

    /**
     *worker原样回传给business
     *
     * Generated from protobuf field <code>bytes ctxData = 1;</code>
     * @return string
     */
    public function getCtxData()
    {
        return $this->ctxData;
    }

    /**
     *worker原样回传给business
     *
     * Generated from protobuf field <code>bytes ctxData = 1;</code>
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
     *网关中现存的主题
     *
     * Generated from protobuf field <code>repeated string topics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     *网关中现存的主题
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

}

