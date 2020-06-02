<?php
namespace WigleyPay\Sdk\Exception;

class CertificateException extends \WigleyPay\Sdk\Exception\WigleyPayException
{
    public function __construct($message, $previous = null)
    {
        parent::__construct($message, \WigleyPay\Sdk\ResultCode::SYSTEM_ERROR, $previous);
    }
}
