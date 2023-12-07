<?php declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: src/Tracing/FederatedTracing/reports.proto

namespace Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Trace.Error</code>.
 */
class Error extends \Google\Protobuf\Internal\Message
{
    /**
     * required.
     *
     * Generated from protobuf field <code>string message = 1 [json_name = "message"];</code>
     */
    protected $message = '';

    /** Generated from protobuf field <code>repeated .Trace.Location location = 2 [json_name = "location"];</code> */
    private $location;

    /** Generated from protobuf field <code>uint64 time_ns = 3 [json_name = "timeNs"];</code> */
    protected $time_ns = 0;

    /** Generated from protobuf field <code>string json = 4 [json_name = "json"];</code> */
    protected $json = '';

    /**
     * Constructor.
     *
     * @param  array  $data {
     *     Optional. Data for populating the Message object.
     *
     *     @var string $message
     *           required
     *     @var array<\Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace\Location>|\Google\Protobuf\Internal\RepeatedField $location
     *     @var int|string $time_ns
     *     @var string $json
     * }
     */
    public function __construct($data = null)
    {
        \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Metadata\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * required.
     *
     * Generated from protobuf field <code>string message = 1 [json_name = "message"];</code>
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * required.
     *
     * Generated from protobuf field <code>string message = 1 [json_name = "message"];</code>
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, true);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Trace.Location location = 2 [json_name = "location"];</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Generated from protobuf field <code>repeated .Trace.Location location = 2 [json_name = "location"];</code>.
     *
     * @param  array<\Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace\Location>|\Google\Protobuf\Internal\RepeatedField  $var
     *
     * @return $this
     */
    public function setLocation($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace\Location::class);
        $this->location = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 time_ns = 3 [json_name = "timeNs"];</code>.
     *
     * @return int|string
     */
    public function getTimeNs()
    {
        return $this->time_ns;
    }

    /**
     * Generated from protobuf field <code>uint64 time_ns = 3 [json_name = "timeNs"];</code>.
     *
     * @param  int|string  $var
     *
     * @return $this
     */
    public function setTimeNs($var)
    {
        GPBUtil::checkUint64($var);
        $this->time_ns = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string json = 4 [json_name = "json"];</code>.
     *
     * @return string
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * Generated from protobuf field <code>string json = 4 [json_name = "json"];</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setJson($var)
    {
        GPBUtil::checkString($var, true);
        $this->json = $var;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Error::class, \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace_Error::class);
