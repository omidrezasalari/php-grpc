<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product.proto

namespace Product;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>product.ProductId</code>
 */
class ProductId extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 id = 1;</code>
     */
    private $id = 0;

    public function __construct() {
        \GPBMetadata\Product::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>int32 id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;
    }

}

