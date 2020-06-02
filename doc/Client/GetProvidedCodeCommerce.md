# GetProvidedCodeCommerce

> public *WigleyPay\\Sdk\\Models\\Commerce* **WigleyPay\\Sdk\\Client::GetProvidedCodeCommerce** ( *array* $commerce )

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $response = $client->GetProvidedCodeCommerce([
        'Name' => 'Nombre'
    ]);
    printf("ID: %d, Nombre: %s\n", $commerce->CommerceId, $commerce->Name);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```
