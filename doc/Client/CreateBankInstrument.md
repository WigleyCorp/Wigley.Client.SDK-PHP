# WigleyPay\\Sdk\\Client::CreateBankInstrument

> public **WigleyPay\\Sdk\\Client::CreateBankInstrument** ( [ *array* $request ] )

## Parámetros

**$request** (array)

  * **base_uri** (string)
  * **client** (string)
  * **env** (string) 'test' | 'prod'
  * **logger** (Psr\\Log\\LoggerInterface)
  * **pem_filename** (string)
  * **pfx_filename** (string)
  * **pfx_passphrase** (string)
  * **privkey_fingerprint** (string)

## Valores devueltos

Devuelve un objeto WigleyPay\\Sdk\\Client en caso de éxito.


## Errores/Excepciones

WigleyPay\\Sdk\\Client::__construct() lanza una WigleyPay\\Sdk\\Exception\\ConfigurationException.

## Ejemplos

#### Ejemplo #1. Adjuntar instancia Logger.

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('WigleyPay');
$log->pushHandler(new StreamHandler(STDOUT, Logger::DEBUG));
$client = new Sdk\Client([
    'logger' => $log
]);
```

#### Ejemplo #2. Fijar datos de autenticación. Sobrescribe variables de entorno.

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client([
  'client' => 'ClientName',
  'pem_filename' => '/home/client/client.pem',
  'privkey_fingerprint' => '0123456789ABCDEF0123456789ABCDEF01234567',
]);
```

#### Ejemplo #3. Fijar URI base.

```php
<?php
// Require the Composer autoloader.
require_once 'vendor/autoload.php';

use WigleyPay\Sdk;

$client = new Sdk\Client([
  'base_uri' => 'http://testing2.WigleyPay.com.uy/WigleyPayapi/SecurePaymentGateway.svc/',
]);
```
