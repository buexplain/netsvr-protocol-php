<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: multicastByCustomerId.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，进行组播
 *
 * Generated from protobuf message <code>netsvr.multicastByCustomerId.MulticastByCustomerId</code>
 */
class MulticastByCustomerId extends \Google\Protobuf\Internal\Message
{
    /**
     *目标customerId
     *
     * Generated from protobuf field <code>repeated string customerIds = 1;</code>
     */
    private $customerIds;
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
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $customerIds
     *          目标customerId
     *     @type string $data
     *          需要发给客户的数据
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\MulticastByCustomerId::initOnce();
        parent::__construct($data);
    }

    /**
     *目标customerId
     *
     * Generated from protobuf field <code>repeated string customerIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomerIds()
    {
        return $this->customerIds;
    }

    /**
     *目标customerId
     *
     * Generated from protobuf field <code>repeated string customerIds = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomerIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->customerIds = $arr;

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

