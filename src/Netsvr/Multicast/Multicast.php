<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: multicast.proto

namespace Netsvr\Multicast;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，进行组播
 *
 * Generated from protobuf message <code>netsvr.multicast.Multicast</code>
 */
class Multicast extends \Google\Protobuf\Internal\Message
{
    /**
     *目标uniqId
     *
     * Generated from protobuf field <code>repeated string uniqIds = 1;</code>
     */
    private $uniqIds;
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
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $uniqIds
     *          目标uniqId
     *     @type string $data
     *          需要发给客户的数据
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Multicast::initOnce();
        parent::__construct($data);
    }

    /**
     *目标uniqId
     *
     * Generated from protobuf field <code>repeated string uniqIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUniqIds()
    {
        return $this->uniqIds;
    }

    /**
     *目标uniqId
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

