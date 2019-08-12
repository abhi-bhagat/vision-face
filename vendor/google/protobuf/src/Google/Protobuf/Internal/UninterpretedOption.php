<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message representing a option the parser does not recognize. This only
 * appears in options protos created by the compiler::Parser class.
 * DescriptorPool resolves these when building Descriptor objects. Therefore,
 * options protos in descriptor objects (e.g. returned by Descriptor::options(),
 * or produced by Descriptor::CopyTo()) will never have UninterpretedOptions
 * in them.
 *
 * Generated from protobuf message <code>google.protobuf.UninterpretedOption</code>
 */
final class UninterpretedOption extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption.NamePart name = 2;</code>
     */
    private $name;
    private $has_name = false;
    /**
     * The value of the uninterpreted option, in whatever type the tokenizer
     * identified it as during parsing. Exactly one of these should be set.
     *
     * Generated from protobuf field <code>optional string identifier_value = 3;</code>
     */
    private $identifier_value = '';
    private $has_identifier_value = false;
    /**
     * Generated from protobuf field <code>optional uint64 positive_int_value = 4;</code>
     */
    private $positive_int_value = 0;
    private $has_positive_int_value = false;
    /**
     * Generated from protobuf field <code>optional int64 negative_int_value = 5;</code>
     */
    private $negative_int_value = 0;
    private $has_negative_int_value = false;
    /**
     * Generated from protobuf field <code>optional double double_value = 6;</code>
     */
    private $double_value = 0.0;
    private $has_double_value = false;
    /**
     * Generated from protobuf field <code>optional bytes string_value = 7;</code>
     */
    private $string_value = '';
    private $has_string_value = false;
    /**
     * Generated from protobuf field <code>optional string aggregate_value = 8;</code>
     */
    private $aggregate_value = '';
    private $has_aggregate_value = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Internal\UninterpretedOption\NamePart[]|\Google\Protobuf\Internal\RepeatedField $name
     *     @type string $identifier_value
     *           The value of the uninterpreted option, in whatever type the tokenizer
     *           identified it as during parsing. Exactly one of these should be set.
     *     @type int|string $positive_int_value
     *     @type int|string $negative_int_value
     *     @type float $double_value
     *     @type string $string_value
     *     @type string $aggregate_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption.NamePart name = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption.NamePart name = 2;</code>
     * @param \Google\Protobuf\Internal\UninterpretedOption\NamePart[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Internal\UninterpretedOption\NamePart::class);
        $this->name = $arr;
        $this->has_name = true;

        return $this;
    }

    public function hasName()
    {
        return $this->has_name;
    }

    /**
     * The value of the uninterpreted option, in whatever type the tokenizer
     * identified it as during parsing. Exactly one of these should be set.
     *
     * Generated from protobuf field <code>optional string identifier_value = 3;</code>
     * @return string
     */
    public function getIdentifierValue()
    {
        return $this->identifier_value;
    }

    /**
     * The value of the uninterpreted option, in whatever type the tokenizer
     * identified it as during parsing. Exactly one of these should be set.
     *
     * Generated from protobuf field <code>optional string identifier_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentifierValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->identifier_value = $var;
        $this->has_identifier_value = true;

        return $this;
    }

    public function hasIdentifierValue()
    {
        return $this->has_identifier_value;
    }

    /**
     * Generated from protobuf field <code>optional uint64 positive_int_value = 4;</code>
     * @return int|string
     */
    public function getPositiveIntValue()
    {
        return $this->positive_int_value;
    }

    /**
     * Generated from protobuf field <code>optional uint64 positive_int_value = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPositiveIntValue($var)
    {
        GPBUtil::checkUint64($var);
        $this->positive_int_value = $var;
        $this->has_positive_int_value = true;

        return $this;
    }

    public function hasPositiveIntValue()
    {
        return $this->has_positive_int_value;
    }

    /**
     * Generated from protobuf field <code>optional int64 negative_int_value = 5;</code>
     * @return int|string
     */
    public function getNegativeIntValue()
    {
        return $this->negative_int_value;
    }

    /**
     * Generated from protobuf field <code>optional int64 negative_int_value = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNegativeIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->negative_int_value = $var;
        $this->has_negative_int_value = true;

        return $this;
    }

    public function hasNegativeIntValue()
    {
        return $this->has_negative_int_value;
    }

    /**
     * Generated from protobuf field <code>optional double double_value = 6;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->double_value;
    }

    /**
     * Generated from protobuf field <code>optional double double_value = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->double_value = $var;
        $this->has_double_value = true;

        return $this;
    }

    public function hasDoubleValue()
    {
        return $this->has_double_value;
    }

    /**
     * Generated from protobuf field <code>optional bytes string_value = 7;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->string_value;
    }

    /**
     * Generated from protobuf field <code>optional bytes string_value = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->string_value = $var;
        $this->has_string_value = true;

        return $this;
    }

    public function hasStringValue()
    {
        return $this->has_string_value;
    }

    /**
     * Generated from protobuf field <code>optional string aggregate_value = 8;</code>
     * @return string
     */
    public function getAggregateValue()
    {
        return $this->aggregate_value;
    }

    /**
     * Generated from protobuf field <code>optional string aggregate_value = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setAggregateValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->aggregate_value = $var;
        $this->has_aggregate_value = true;

        return $this;
    }

    public function hasAggregateValue()
    {
        return $this->has_aggregate_value;
    }

}

