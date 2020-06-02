# GetCommerceIssuers

> public *array* **WigleyPay\\Sdk\\Client::GetCommerceIssuers** ( *array* $commerce )

## Ejemplo

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client();

try {
    $response = $client->GetCommerceIssuers([
        'CommerceId' => 80
    ]);
    print_r($response);
} catch (Sdk\Exception\WigleyPayException $exc) {
    printf("[%s] (%d) %s\n", get_class($exc), $exc->getCode(), $exc->getMessage());
}

```

### Imprime

```
Array
(
    [0] => WigleyPay\Sdk\Models\IssuerData Object
        (
            [IssuerId] => 4
            [CommerceId] => 9
            [Metadata] => Array
                (
                    [ProviderCommerceNumber] => 12345678
                )

        )

    [1] => WigleyPay\Sdk\Models\IssuerData Object
        (
            [IssuerId] => 11
            [CommerceId] => 9
            [Metadata] => Array
                (
                )

        )

    [2] => WigleyPay\Sdk\Models\IssuerData Object
        (
            [IssuerId] => 13
            [CommerceId] => 9
            [Metadata] => Array
                (
                )

        )

    [3] => WigleyPay\Sdk\Models\IssuerData Object
        (
            [IssuerId] => 15
            [CommerceId] => 9
            [Metadata] => Array
                (
                )

        )

    [4] => WigleyPay\Sdk\Models\IssuerData Object
        (
            [IssuerId] => 18
            [CommerceId] => 9
            [Metadata] => Array
                (
                    [ProviderCommerceNumber] => 87654321
                )

        )

)
```
