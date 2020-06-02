# Blacklist

## BlackListAdd
> public *null* **WigleyPay\\Sdk\\Client::BlackListAdd** ( *array* $blacklist_request )

### Parámetros

**$blacklist_request** (array)

  * **InstrumentToken** (string)
  * **OptionalUserName** *opcional* (string)
  * **Reason** (string)

### Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $client->BlackListAdd([
        'InstrumentToken' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'Reason' => 'Some reason',
    ]);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```

## BlackListDelete
> public *null* **WigleyPay\\Sdk\\Client::BlackListDelete** ( *array* $blacklist_request )

### Parámetros

**$blacklist_request** (array)

  * **InstrumentToken** (string)
  * **OptionalUserName** *opcional* (string)
  * **Reason** (string)

### Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $client->BlackListDelete([
        'InstrumentToken' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'Reason' => 'Some reason',
    ]);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```

## GetBlackList
> public *\\WigleyPay\\Sdk\\Models\\BlacklistRequest[]* **WigleyPay\\Sdk\\Client::GetBlackList** ( )

## Retorno

Array de \\WigleyPay\\Sdk\\Models\\BlacklistRequest.

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $response = $client->GetBlackList();
    print_r($response);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```

### Imprime

```
Array
(
    [0] => WigleyPay\Sdk\Models\BlacklistRequest Object
        (
            [data:protected] => Array
                (
                    [InstrumentToken] => xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
                    [OptionalUserName] =>
                    [Reason] => 'Some reason'
                )

        )

)

```
