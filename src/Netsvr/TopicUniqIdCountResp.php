<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: topicUniqIdCountResp.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *worker响应business，返回网关中的主题包含的连接数
 *
 * Generated from protobuf message <code>netsvr.topicUniqIdCountResp.TopicUniqIdCountResp</code>
 */
class TopicUniqIdCountResp extends \Google\Protobuf\Internal\Message
{
    /**
     *网关唯一编号
     *
     * Generated from protobuf field <code>int32 serverId = 1;</code>
     */
    protected $serverId = 0;
    /**
     *key是topic，value是该主题的连接数
     *如果请求的topic没找到，则items中不会有该topic
     *
     * Generated from protobuf field <code>map<string, int32> items = 2;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $serverId
     *          网关唯一编号
     *     @type array|\Google\Protobuf\Internal\MapField $items
     *          key是topic，value是该主题的连接数
     *          如果请求的topic没找到，则items中不会有该topic
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\TopicUniqIdCountResp::initOnce();
        parent::__construct($data);
    }

    /**
     *网关唯一编号
     *
     * Generated from protobuf field <code>int32 serverId = 1;</code>
     * @return int
     */
    public function getServerId()
    {
        return $this->serverId;
    }

    /**
     *网关唯一编号
     *
     * Generated from protobuf field <code>int32 serverId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setServerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->serverId = $var;

        return $this;
    }

    /**
     *key是topic，value是该主题的连接数
     *如果请求的topic没找到，则items中不会有该topic
     *
     * Generated from protobuf field <code>map<string, int32> items = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     *key是topic，value是该主题的连接数
     *如果请求的topic没找到，则items中不会有该topic
     *
     * Generated from protobuf field <code>map<string, int32> items = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->items = $arr;

        return $this;
    }

}

