<?php
namespace WigleyPay\Sdk;

class IssuerSignedRequest extends SignedMessage
{
    protected $auth_param = 'Issuer';
}
