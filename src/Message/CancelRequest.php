<?php
namespace WigleyPay\Sdk\Message;

use WigleyPay\Sdk;

class CancelRequest extends Sdk\Message
{
    /**
     * @var int $Type
     * @var string $ClientReferenceId
     * @var string $MetaReference
     */
    
    protected $data = [
        'ClientReferenceId' => null,
        'MetaReference' => null,
        'Type' => 0,
    ];

    public function toArray($canonize = false)
    {
        $arr = $this->to_array();
//        $data = [
//            'Client' => $this->client,
//            'Request' => $arr,
//        ];
        return $arr;
    }
}
