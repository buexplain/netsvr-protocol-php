<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: topicUniqIdCountReq.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *business向worker请求，获取网关中的主题包含的连接数
 *
 * Generated from protobuf message <code>netsvr.topicUniqIdCountReq.TopicUniqIdCountReq</code>
 */
class TopicUniqIdCountReq extends \Google\Protobuf\Internal\Message
{
    /**
     *worker会将该值赋给router.Cmd
     *
     * Generated from protobuf field <code>int32 routerCmd = 1;</code>
     */
    protected $routerCmd = 0;
    /**
     *worker会原样回传给business
     *
     * Generated from protobuf field <code>bytes ctxData = 2;</code>
     */
    protected $ctxData = '';
    /**
     *目标主题
     *
     * Generated from protobuf field <code>repeated string topics = 3;</code>
     */
    private $topics;
    /**
     *是否返回全部主题的连接数，如果设置为true，则网关会忽略topics字段的值
     *
     * Generated from protobuf field <code>bool countAll = 4;</code>
     */
    protected $countAll = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $routerCmd
     *          worker会将该值赋给router.Cmd
     *     @type string $ctxData
     *          worker会原样回传给business
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $topics
     *          目标主题
     *     @type bool $countAll
     *          是否返回全部主题的连接数，如果设置为true，则网关会忽略topics字段的值
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\TopicUniqIdCountReq::initOnce();
        parent::__construct($data);
    }

    /**
     *worker会将该值赋给router.Cmd
     *
     * Generated from protobuf field <code>int32 routerCmd = 1;</code>
     * @return int
     */
    public function getRouterCmd()
    {
        return $this->routerCmd;
    }

    /**
     *worker会将该值赋给router.Cmd
     *
     * Generated from protobuf field <code>int32 routerCmd = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRouterCmd($var)
    {
        GPBUtil::checkInt32($var);
        $this->routerCmd = $var;

        return $this;
    }

    /**
     *worker会原样回传给business
     *
     * Generated from protobuf field <code>bytes ctxData = 2;</code>
     * @return string
     */
    public function getCtxData()
    {
        return $this->ctxData;
    }

    /**
     *worker会原样回传给business
     *
     * Generated from protobuf field <code>bytes ctxData = 2;</code>
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
     *目标主题
     *
     * Generated from protobuf field <code>repeated string topics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     *目标主题
     *
     * Generated from protobuf field <code>repeated string topics = 3;</code>
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
     *是否返回全部主题的连接数，如果设置为true，则网关会忽略topics字段的值
     *
     * Generated from protobuf field <code>bool countAll = 4;</code>
     * @return bool
     */
    public function getCountAll()
    {
        return $this->countAll;
    }

    /**
     *是否返回全部主题的连接数，如果设置为true，则网关会忽略topics字段的值
     *
     * Generated from protobuf field <code>bool countAll = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCountAll($var)
    {
        GPBUtil::checkBool($var);
        $this->countAll = $var;

        return $this;
    }

}
