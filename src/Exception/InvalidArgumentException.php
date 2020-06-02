<?php
namespace WigleyPay\Sdk\Exception;

class InvalidArgumentException extends \WigleyPay\Sdk\Exception\WigleyPayException
{
    public function __construct($message, $previous = null)
    {
        parent::__construct($message, \WigleyPay\Sdk\ResultCode::ARGUMENT_ERROR, $previous);
    }
}
