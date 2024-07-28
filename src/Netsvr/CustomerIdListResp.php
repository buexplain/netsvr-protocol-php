<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: customerIdListResp.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *worker响应business，返回网关中全部的customerId
 *
 * Generated from protobuf message <code>netsvr.customerIdListResp.CustomerIdListResp</code>
 */
class CustomerIdListResp extends \Google\Protobuf\Internal\Message
{
    /**
     *网关包含的customerId
     *
     * Generated from protobuf field <code>repeated string customerIds = 1;</code>
     */
    private $customerIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $customerIds
     *          网关包含的customerId
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\CustomerIdListResp::initOnce();
        parent::__construct($data);
    }

    /**
     *网关包含的customerId
     *
     * Generated from protobuf field <code>repeated string customerIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomerIds()
    {
        return $this->customerIds;
    }

    /**
     *网关包含的customerId
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

}

