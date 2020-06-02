<?php
namespace WigleyPay\Sdk\Exception;

class MessageExpiredException extends \WigleyPay\Sdk\Exception\WigleyPayException
{
    public function __construct($message, $previous = null)
    {
        parent::__construct($message, \WigleyPay\Sdk\ResultCode::MESSAGE_EXPIRED, $previous);
    }
}
