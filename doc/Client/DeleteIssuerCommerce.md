# DeleteIssuerCommerce

> public *void* **WigleyPay\\Sdk\\Client::DeleteIssuerCommerce** ( *array* $commerce )

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $response = $client->DeleteIssuerCommerce([
        'IssuerId' => 4,
        'CommerceId' => 9,
    ]);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```
