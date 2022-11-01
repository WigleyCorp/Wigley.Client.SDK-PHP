<?php
namespace WigleyPay\Sdk\Models;

use WigleyPay\Sdk\Type;

class PaymentListLine extends ModelsBase
{
    /**
     * @var string $ClientReferenceId
     * @var int $IssuerId
     * @var string $AccountNumber
     * @var string $CVV
     * @var string $ExpirationMMYYYY
     * @var float $TaxedAmount
     * @var float $BilledAmount
     * @var string $InvoiceNumber
     * @var int $CurrencyId
     * @var int $Installments
     * @var int $OptionalCommerceId
     * @var string $OptionalMetadata
     * @var string $OptionalExternalPaymentInfo
     * @var string $TransactionID
     * @var string $ExecutionDate
     * @var int $ResultCode
     * @var string $AuthorizationCode
     */
    
    protected $data = [
        /*'ClientReferenceId' => null,
        'IssuerId' => 0,
        'AccountNumber' => null,
        'CVV' => null,
        'ExpirationMMYYYY' => null,*/
        'TaxedAmount' => null,
        'BilledAmount' => null,
        /*'InvoiceNumber' => null,
        'CurrencyId' => Type\CurrencyType::UYU,
        'Installments' => 0,
        'OptionalCommerceId' => null,
        'OptionalMetadata' => null,
        'OptionalExternalPaymentInfo' => null,
        'TransactionID' => null,
        'ExecutionDate' => null,
        'ResultCode' => 0,
        'AuthorizationCode' => null,*/
    ];
    
    //    public static function loadValidatorMetadata(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata)
    //    {
    //
    //    }
    
    public static function getValidationMetadata()
    {
        return [
            /*'ClientReferenceId' => [
                'type' => 'string',
                'required' => true,
            ],
            'IssuerId' => [
                'type' => 'int',
                'required' => true,
            ],
            'AccountNumber' => [
                'type' => 'string',
                'required' => true,
            ],
            'CVV' => [
                'type' => 'string',
                'required' => false,
            ],
            'ExpirationMMYYYY' => [
                'type' => 'string',
                'required' => false,
            ],*/
            'TaxedAmount' => [
                'type' => 'float',
                'required' => true,
            ],
            'BilledAmount' => [
                'type' => 'float',
                'required' => true,
            ],
            /*'InvoiceNumber' => [
                'type' => 'string',
                'required' => false,
            ],
            'CurrencyId' => [
                'type' => 'int',
                'required' => true,
            ],
            'Installments' => [
                'type' => 'int',
                'required' => true,
            ],
            'OptionalCommerceId' => [
                'type' => 'int',
                'required' => false,
            ],
            'OptionalMetadata' => [
                'type' => 'string',
                'required' => false,
            ],
            'OptionalExternalPaymentInfo' => [
                'type' => 'string',
                'required' => false,
            ],
            'TransactionID' => [
                'type' => 'string',
                'required' => false,
            ],
            'ExecutionDate' => [
                'type' => 'string',
                'required' => false,
            ],
            'ResultCode' => [
                'type' => 'int',
                'required' => false,
            ],
            'AuthorizationCode' => [
                'type' => 'string',
                'required' => false,
            ],*/
            
        ];
    }
    
    
    public static function fromArray(array $data)
    {
        $inst = new self();
        foreach ($data as $k => $v) {
            $k = ucfirst($k);
            $setter = 'set'.$k;
            if (method_exists($inst, $setter)) {
                call_user_func([$inst, $setter], $v);
            } else {
                $inst->__set($k, $v);
            }
        }
        return $inst;
    }
    
    public function toArray($canonize = false)
    {
        $arr = $this->data;
        if ($canonize) {
            if (!is_null($arr['TaxedAmount'])) {
                $arr['TaxedAmount'] = sprintf('float(%s)', (float) $arr['TaxedAmount']);
            }
            if (!is_null($arr['BilledAmount'])) {
                $arr['BilledAmount'] = sprintf('float(%s)', (float) $arr['BilledAmount']);
            }
            
        }
        return $arr;
    }
}
