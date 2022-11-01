<?php
namespace WigleyPay\Sdk\Models;

use WigleyPay\Sdk\Type;

class PaymentRequestList extends ModelsBase
{
    /**
     * @var int $OrderID
     * @var PaymentListLine[] $ListLines
     */
    
    protected $data = [
        'OrderID' => 0,
        'ListLines' => null,
    ];
    
    
    public static function getValidationMetadata()
    {
        return [
            'OrderID' => [
                'type' => 'int',
                'required' => true,
            ],
            'ListLines' => [
                'type' => 'class',
                'class' => 'PaymentListLine',
                'array' => true,
                'required' => true,
            ],
        ];
    }
    
    public function addLine($line)
    {
        array_push($this->data['ListLines'], ($line instanceof PaymentListLine ? $line : PaymentListLine::fromArray($line)));
        return $this;
    }
    
    public function setILines(array $value)
    {
        $this->data['ListLines'] = [];
        foreach ($value as $line) {
            $this->addLine($line);
        }
        return $this;
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
        if ($this->data['ListLines']) {
            $arr['ListLines'] = array_map(function ($line) use ($canonize) {
                return ($line instanceof PaymentListLine) ? $line->toArray($canonize) : $line;
            }, $this->data['ListLines']);
        }
        return $arr;
    }
}
