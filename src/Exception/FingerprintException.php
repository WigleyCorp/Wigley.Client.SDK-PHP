<?php
namespace WigleyPay\Sdk\Exception;

class FingerprintException extends \WigleyPay\Sdk\Exception\WigleyPayException
{
    public function __construct($message, $previous = null)
    {
        parent::__construct($message, \WigleyPay\Sdk\ResultCode::INVALID_FINGERPRINT, $previous);
    }
}
