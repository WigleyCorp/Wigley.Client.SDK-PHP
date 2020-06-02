# DeleteCommerce

> public *void* **WigleyPay\\Sdk\\Client::DeleteCommerce** ()

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $response = $client->DeleteCommerce([
        'CommerceId' => 80
    ]);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```
