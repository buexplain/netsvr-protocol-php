<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: connOpen.proto

namespace NetsvrProtocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *worker转发客户连接打开的信息到business
 *
 * Generated from protobuf message <code>netsvr.connOpen.ConnOpen</code>
 */
class ConnOpen extends \Google\Protobuf\Internal\Message
{
    /**
     *网关分配给连接的唯一id，格式是：网关进程的worker服务监听的ip地址(4字节)+网关进程的worker服务监听的port(2字节)+时间戳(4字节)+自增id(4字节)，共14字节，28个16进制的字符
     * php解码uniqId示例：
     * $ret =  unpack('Nip/nport/Ntimestamp/NincrId', pack('H*', '7f00000117ad6621e43b8baa1b9a'));
     * $ret['ip'] = long2ip($ret['ip']);
     * var_dump($ret);
     *
     * Generated from protobuf field <code>string uniqId = 1;</code>
     */
    protected $uniqId = '';
    /**
     *连接携带的GET参数
     *
     * Generated from protobuf field <code>string rawQuery = 2;</code>
     */
    protected $rawQuery = '';
    /**
     *连接携带的websocket子协议信息
     *
     * Generated from protobuf field <code>repeated string subProtocol = 3;</code>
     */
    private $subProtocol;
    /**
     *读取的header：X-Forwarded-For
     *
     * Generated from protobuf field <code>string xForwardedFor = 4;</code>
     */
    protected $xForwardedFor = '';
    /**
     *读取的header：X-Real-IP
     *
     * Generated from protobuf field <code>string xRealIp = 5;</code>
     */
    protected $xRealIp = '';
    /**
     *连接的IP地址，这是直接连接到网关的IP地址
     *
     * Generated from protobuf field <code>string remoteAddr = 6;</code>
     */
    protected $remoteAddr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uniqId
     *          网关分配给连接的唯一id，格式是：网关进程的worker服务监听的ip地址(4字节)+网关进程的worker服务监听的port(2字节)+时间戳(4字节)+自增id(4字节)，共14字节，28个16进制的字符
     *           php解码uniqId示例：
     *           $ret =  unpack('Nip/nport/Ntimestamp/NincrId', pack('H*', '7f00000117ad6621e43b8baa1b9a'));
     *           $ret['ip'] = long2ip($ret['ip']);
     *           var_dump($ret);
     *     @type string $rawQuery
     *          连接携带的GET参数
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $subProtocol
     *          连接携带的websocket子协议信息
     *     @type string $xForwardedFor
     *          读取的header：X-Forwarded-For
     *     @type string $xRealIp
     *          读取的header：X-Real-IP
     *     @type string $remoteAddr
     *          连接的IP地址，这是直接连接到网关的IP地址
     * }
     */
    public function __construct($data = NULL) {
        \NetsvrProtocol\GPBMetadata\ConnOpen::initOnce();
        parent::__construct($data);
    }

    /**
     *网关分配给连接的唯一id，格式是：网关进程的worker服务监听的ip地址(4字节)+网关进程的worker服务监听的port(2字节)+时间戳(4字节)+自增id(4字节)，共14字节，28个16进制的字符
     * php解码uniqId示例：
     * $ret =  unpack('Nip/nport/Ntimestamp/NincrId', pack('H*', '7f00000117ad6621e43b8baa1b9a'));
     * $ret['ip'] = long2ip($ret['ip']);
     * var_dump($ret);
     *
     * Generated from protobuf field <code>string uniqId = 1;</code>
     * @return string
     */
    public function getUniqId()
    {
        return $this->uniqId;
    }

    /**
     *网关分配给连接的唯一id，格式是：网关进程的worker服务监听的ip地址(4字节)+网关进程的worker服务监听的port(2字节)+时间戳(4字节)+自增id(4字节)，共14字节，28个16进制的字符
     * php解码uniqId示例：
     * $ret =  unpack('Nip/nport/Ntimestamp/NincrId', pack('H*', '7f00000117ad6621e43b8baa1b9a'));
     * $ret['ip'] = long2ip($ret['ip']);
     * var_dump($ret);
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
     *连接携带的GET参数
     *
     * Generated from protobuf field <code>string rawQuery = 2;</code>
     * @return string
     */
    public function getRawQuery()
    {
        return $this->rawQuery;
    }

    /**
     *连接携带的GET参数
     *
     * Generated from protobuf field <code>string rawQuery = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRawQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->rawQuery = $var;

        return $this;
    }

    /**
     *连接携带的websocket子协议信息
     *
     * Generated from protobuf field <code>repeated string subProtocol = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubProtocol()
    {
        return $this->subProtocol;
    }

    /**
     *连接携带的websocket子协议信息
     *
     * Generated from protobuf field <code>repeated string subProtocol = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubProtocol($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->subProtocol = $arr;

        return $this;
    }

    /**
     *读取的header：X-Forwarded-For
     *
     * Generated from protobuf field <code>string xForwardedFor = 4;</code>
     * @return string
     */
    public function getXForwardedFor()
    {
        return $this->xForwardedFor;
    }

    /**
     *读取的header：X-Forwarded-For
     *
     * Generated from protobuf field <code>string xForwardedFor = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setXForwardedFor($var)
    {
        GPBUtil::checkString($var, True);
        $this->xForwardedFor = $var;

        return $this;
    }

    /**
     *读取的header：X-Real-IP
     *
     * Generated from protobuf field <code>string xRealIp = 5;</code>
     * @return string
     */
    public function getXRealIp()
    {
        return $this->xRealIp;
    }

    /**
     *读取的header：X-Real-IP
     *
     * Generated from protobuf field <code>string xRealIp = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setXRealIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->xRealIp = $var;

        return $this;
    }

    /**
     *连接的IP地址，这是直接连接到网关的IP地址
     *
     * Generated from protobuf field <code>string remoteAddr = 6;</code>
     * @return string
     */
    public function getRemoteAddr()
    {
        return $this->remoteAddr;
    }

    /**
     *连接的IP地址，这是直接连接到网关的IP地址
     *
     * Generated from protobuf field <code>string remoteAddr = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->remoteAddr = $var;

        return $this;
    }

}

