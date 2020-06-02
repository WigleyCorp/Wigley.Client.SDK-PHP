# fromServerPublicKey

Instancia un certificado a partir de la respuesta obtenida de [WigleyPay\\Sdk\\Client::GetServerPublicKey](Client/GetServerPublicKey.md).

> public static *WigleyPay\\Sdk\\Certificate\\Certificate* **WigleyPay\\Sdk\\Certificate\\Certificate::fromServerPublicKey** ( *string* $key, [ *string* $fingerprint ] )

## Ejemplo

```php
<?php

require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();
$response = $client->GetServerPublicKey('AEA4D5C586983A140F8B566EA81901E8BD8F8C9F');

$cert = Sdk\Certificate\Certificate::fromServerPublicKey($response['Key'], $response['Fingerprint']);

```
