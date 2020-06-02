<?php
namespace WigleyPay\Sdk\Type;

abstract class AuthorizationType
{
    const CLIENT_REFERENCE = 0;
    const OAUTH            = 1;
    const ANONYMOUS        = 2;
}
