# AddCommerce

> public *\\WigleyPay\\Sdk\\Models\\Commerce* **WigleyPay\\Sdk\\Client::AddCommerce** ( *array* $commerce )

## Parámetros

**$commerce** (array)

  * **Name** (string) Nombre del comercio

## Retorno

\\WigleyPay\\Sdk\\Models\\Commerce

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $commerce = $client->AddCommerce([
        'Name' => 'Nombre Comercio',
    ]);
    printf("ID: %d, Nombre: %s\n", $commerce->CommerceId, $commerce->Name);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```

### Imprime

```
ID: 13, Nombre: Nombre Comercio
```
