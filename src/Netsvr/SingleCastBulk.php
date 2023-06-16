<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: singleCast.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，进行批量单播
 *
 * Generated from protobuf message <code>netsvr.singleCast.SingleCastBulk</code>
 */
class SingleCastBulk extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .netsvr.singleCast.SingleCast items = 1;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Netsvr\SingleCast>|\Google\Protobuf\Internal\RepeatedField $items
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\SingleCast::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .netsvr.singleCast.SingleCast items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .netsvr.singleCast.SingleCast items = 1;</code>
     * @param array<\Netsvr\SingleCast>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Netsvr\SingleCast::class);
        $this->items = $arr;

        return $this;
    }

}

