# DeleteInstrument

> public *string* **WigleyPay\\Sdk\\Client::DeleteInstrument** ( *array* $info )

## Parámetros

**$info** (array)

  * **Type** (int) Una de las constantes de *WigleyPay\\Sdk\\Type\\AuthorizationType*
  * **InstrumentToken** (string)
  * **MetaReference** (string)

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $response = $client->DeleteInstrument([
        'Type' => Type\AuthorizationType::ANONYMOUS,
        'InstrumentToken' => 'asd',
        'MetaReference' => 'asd',
    ]);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```
