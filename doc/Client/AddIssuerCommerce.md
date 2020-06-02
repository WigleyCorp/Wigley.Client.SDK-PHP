# AddIssuerCommerce

> public *void* **WigleyPay\\Sdk\\Client::AddIssuerCommerce** ( *array* $commerce )

## Parámetros

**$commerce**

  * **IssuerId** *int*
  * **CommerceId** *int*
  * **Metadata** *array* (opcional)

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

/* @var int */
$issuerId;

/* @var int */
$commerceId;

try {
    $response = $client->AddIssuerCommerce([
        'IssuerId' => $issuerId,
        'CommerceId' => $commerceId,
        'Metadata' => [
            'ProviderCommerceNumber' => $providerCommerceNumber,
        ]
    ]);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```
