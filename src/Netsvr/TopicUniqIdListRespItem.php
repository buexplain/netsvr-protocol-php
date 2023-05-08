<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: topicUniqIdListResp.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>netsvr.topicUniqIdListResp.TopicUniqIdListRespItem</code>
 */
class TopicUniqIdListRespItem extends \Google\Protobuf\Internal\Message
{
    /**
     *当前主题包含的uniqId
     *
     * Generated from protobuf field <code>repeated string uniqIds = 1;</code>
     */
    private $uniqIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $uniqIds
     *          当前主题包含的uniqId
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\TopicUniqIdListResp::initOnce();
        parent::__construct($data);
    }

    /**
     *当前主题包含的uniqId
     *
     * Generated from protobuf field <code>repeated string uniqIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUniqIds()
    {
        return $this->uniqIds;
    }

    /**
     *当前主题包含的uniqId
     *
     * Generated from protobuf field <code>repeated string uniqIds = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUniqIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uniqIds = $arr;

        return $this;
    }

}

