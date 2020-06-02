<?php
namespace WigleyPay\Sdk\Certificate;

use WigleyPay\Sdk\Registry;

class CertificateProvider implements CertificateProviderInterface
{
    private $certificates = array();

    public static function instance() {
        $name = __CLASS__;//get_called_class();
        if (!Registry::contains($name)) {
            $instance = new self();
            Registry::add($instance, $name);
        }
        return Registry::get($name);
    }

    /**
     * 
     * @param string $fingerprint
     * @return \WigleyPay\Sdk\Certificate
     */
    public function getByFingerprint($fingerprint) {
        return array_key_exists($fingerprint, $this->certificates) ? $this->certificates[$fingerprint] : false;
    }

    /**
     * 
     * @param \WigleyPay\Sdk\Certificate\Certificate $cert
     * @return boolean
     */
    public function save(Certificate $cert) {
        $this->certificates[$cert->fingerprint] = $cert;
        return true;
    }
}
