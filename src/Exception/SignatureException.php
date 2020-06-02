<?php
namespace WigleyPay\Sdk\Exception;

class SignatureException extends WigleyPayException
{
    public function __construct($message, $previous = null) {
        parent::__construct($message, \WigleyPay\Sdk\ResultCode::INVALID_SIGNATURE, $previous);
    }
}
