# ModifyCommerce

> public *WigleyPay\\Sdk\\Models\\Commerce* **WigleyPay\\Sdk\\Client::ModifyCommerce** ( *array* $commerce )

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $response = $client->ModifyCommerce([
        'CommerceId' => 80,
        'Name' => 'Nuevo nombre'
    ]);
    printf("ID: %d, Nombre: %s\n", $commerce->CommerceId, $commerce->Name);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```

### Imprime

```
ID: 80, Nombre: Nuevo nombre
```
