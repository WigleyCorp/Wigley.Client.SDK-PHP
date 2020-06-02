<?php
namespace WigleyPay\Sdk;

use PHPUnit\Framework\TestCase;
use WigleyPay\Sdk\Models;
use WigleyPay\Sdk\Type;

final class CancelRequestTest extends TestCase
{
    public function setUp()
    {
        $this->data = [
            'MetaReference' => 'Asdfg',
        ];
    }

    public function testSignatureBaseString()
    {
        $authorization = Models\CancelRequest::fromArray($this->data);
        $signedRequest = new SignedRequest($authorization);
        $signedRequest->setClient('Prueba');
        $this->assertEmpty($authorization->validate());
        $this->assertEquals(
            '{"Fingerprint":"","Object":{"Client":"Prueba","Request":{"MetaReference":"Asdfg","Type":0}},"UTCUnixTimeExpiration":null}',
            $signedRequest->getSignatureBaseString()
        );
    }
}
