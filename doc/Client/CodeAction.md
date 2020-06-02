# CodeAction

> public *WigleyPay\\Sdk\\Models\\Transaction* **WigleyPay\\Sdk\\Client::CodeAction** ( *array* $payment )

## Parámetros

  * **Code** *string*
  * **Action** *int*

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;
use WigleyPay\Sdk\Type;

$client = new Sdk\Client();
try {
    $response = $client->CodeAction([
        'Code' => 'code',
        'Action' => Models\CodeRequest::CODE_ACTION_QUERY,
    ]);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}
```
