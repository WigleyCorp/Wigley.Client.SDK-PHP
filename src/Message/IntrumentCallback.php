<?php
namespace WigleyPay\Sdk\Message;

use WigleyPay\Sdk;

class IntrumentCallback extends Sdk\Message
{
    /**
     * @var string $SessionId
     * @var string $Client
     * @var ActionType $Action
     */

    protected $data = [
        'SessionId' => null,
        'Client' => null,
        'Action' => null,
    ];

    public static function loadValidatorMetadata(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata) {
        
    }
}
