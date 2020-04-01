<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dex.proto

namespace Binance\DexFeeParam;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 0x495A5044
 *
 * Generated from protobuf message <code>Binance.DexFeeParam.DexFeeField</code>
 */
class DexFeeField extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fee_name = 1;</code>
     */
    protected $fee_name = '';
    /**
     * Generated from protobuf field <code>int64 fee_value = 2;</code>
     */
    protected $fee_value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fee_name
     *     @type int|string $fee_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dex::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fee_name = 1;</code>
     * @return string
     */
    public function getFeeName()
    {
        return $this->fee_name;
    }

    /**
     * Generated from protobuf field <code>string fee_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFeeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->fee_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee_value = 2;</code>
     * @return int|string
     */
    public function getFeeValue()
    {
        return $this->fee_value;
    }

    /**
     * Generated from protobuf field <code>int64 fee_value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeeValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee_value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DexFeeField::class, \Binance\DexFeeParam_DexFeeField::class);
