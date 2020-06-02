# GetCommerces

> public *array* **WigleyPay\\Sdk\\Client::GetCommerces** ()

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $response = $client->GetCommerces();
    print_r($response);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```

### Imprime

```
Array
(
    [0] => WigleyPay\Sdk\Models\Commerce Object
        (
            [CommerceId] => 9
            [Name] => Comercio A
        )

    [1] => WigleyPay\Sdk\Models\Commerce Object
        (
            [CommerceId] => 13
            [Name] => Comercio B
        )

)
```
