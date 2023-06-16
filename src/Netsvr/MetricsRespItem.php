<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: metricsResp.proto

namespace Netsvr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>netsvr.metricsResp.MetricsRespItem</code>
 */
class MetricsRespItem extends \Google\Protobuf\Internal\Message
{
    /**
     *总数
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     */
    protected $count = 0;
    /**
     *每秒速率
     *
     * Generated from protobuf field <code>float meanRate = 2;</code>
     */
    protected $meanRate = 0.0;
    /**
     *每秒速率的最大值
     *
     * Generated from protobuf field <code>float meanRateMax = 3;</code>
     */
    protected $meanRateMax = 0.0;
    /**
     *每1分钟速率
     *
     * Generated from protobuf field <code>float rate1 = 4;</code>
     */
    protected $rate1 = 0.0;
    /**
     *每1分钟速率的最大值
     *
     * Generated from protobuf field <code>float rate1Max = 5;</code>
     */
    protected $rate1Max = 0.0;
    /**
     *每5分钟速率
     *
     * Generated from protobuf field <code>float rate5 = 6;</code>
     */
    protected $rate5 = 0.0;
    /**
     *每5分钟速率的最大值
     *
     * Generated from protobuf field <code>float rate5Max = 7;</code>
     */
    protected $rate5Max = 0.0;
    /**
     *每15分钟速率
     *
     * Generated from protobuf field <code>float rate15 = 8;</code>
     */
    protected $rate15 = 0.0;
    /**
     *每15分钟速率的最大值
     *
     * Generated from protobuf field <code>float rate15Max = 9;</code>
     */
    protected $rate15Max = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $count
     *          总数
     *     @type float $meanRate
     *          每秒速率
     *     @type float $meanRateMax
     *          每秒速率的最大值
     *     @type float $rate1
     *          每1分钟速率
     *     @type float $rate1Max
     *          每1分钟速率的最大值
     *     @type float $rate5
     *          每5分钟速率
     *     @type float $rate5Max
     *          每5分钟速率的最大值
     *     @type float $rate15
     *          每15分钟速率
     *     @type float $rate15Max
     *          每15分钟速率的最大值
     * }
     */
    public function __construct($data = NULL) {
        \Netsvr\GPBMetadata\MetricsResp::initOnce();
        parent::__construct($data);
    }

    /**
     *总数
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     *总数
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     *每秒速率
     *
     * Generated from protobuf field <code>float meanRate = 2;</code>
     * @return float
     */
    public function getMeanRate()
    {
        return $this->meanRate;
    }

    /**
     *每秒速率
     *
     * Generated from protobuf field <code>float meanRate = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setMeanRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->meanRate = $var;

        return $this;
    }

    /**
     *每秒速率的最大值
     *
     * Generated from protobuf field <code>float meanRateMax = 3;</code>
     * @return float
     */
    public function getMeanRateMax()
    {
        return $this->meanRateMax;
    }

    /**
     *每秒速率的最大值
     *
     * Generated from protobuf field <code>float meanRateMax = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setMeanRateMax($var)
    {
        GPBUtil::checkFloat($var);
        $this->meanRateMax = $var;

        return $this;
    }

    /**
     *每1分钟速率
     *
     * Generated from protobuf field <code>float rate1 = 4;</code>
     * @return float
     */
    public function getRate1()
    {
        return $this->rate1;
    }

    /**
     *每1分钟速率
     *
     * Generated from protobuf field <code>float rate1 = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setRate1($var)
    {
        GPBUtil::checkFloat($var);
        $this->rate1 = $var;

        return $this;
    }

    /**
     *每1分钟速率的最大值
     *
     * Generated from protobuf field <code>float rate1Max = 5;</code>
     * @return float
     */
    public function getRate1Max()
    {
        return $this->rate1Max;
    }

    /**
     *每1分钟速率的最大值
     *
     * Generated from protobuf field <code>float rate1Max = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setRate1Max($var)
    {
        GPBUtil::checkFloat($var);
        $this->rate1Max = $var;

        return $this;
    }

    /**
     *每5分钟速率
     *
     * Generated from protobuf field <code>float rate5 = 6;</code>
     * @return float
     */
    public function getRate5()
    {
        return $this->rate5;
    }

    /**
     *每5分钟速率
     *
     * Generated from protobuf field <code>float rate5 = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setRate5($var)
    {
        GPBUtil::checkFloat($var);
        $this->rate5 = $var;

        return $this;
    }

    /**
     *每5分钟速率的最大值
     *
     * Generated from protobuf field <code>float rate5Max = 7;</code>
     * @return float
     */
    public function getRate5Max()
    {
        return $this->rate5Max;
    }

    /**
     *每5分钟速率的最大值
     *
     * Generated from protobuf field <code>float rate5Max = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setRate5Max($var)
    {
        GPBUtil::checkFloat($var);
        $this->rate5Max = $var;

        return $this;
    }

    /**
     *每15分钟速率
     *
     * Generated from protobuf field <code>float rate15 = 8;</code>
     * @return float
     */
    public function getRate15()
    {
        return $this->rate15;
    }

    /**
     *每15分钟速率
     *
     * Generated from protobuf field <code>float rate15 = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setRate15($var)
    {
        GPBUtil::checkFloat($var);
        $this->rate15 = $var;

        return $this;
    }

    /**
     *每15分钟速率的最大值
     *
     * Generated from protobuf field <code>float rate15Max = 9;</code>
     * @return float
     */
    public function getRate15Max()
    {
        return $this->rate15Max;
    }

    /**
     *每15分钟速率的最大值
     *
     * Generated from protobuf field <code>float rate15Max = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setRate15Max($var)
    {
        GPBUtil::checkFloat($var);
        $this->rate15Max = $var;

        return $this;
    }

}
