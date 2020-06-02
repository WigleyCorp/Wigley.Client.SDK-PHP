<?php
namespace WigleyPay\Sdk\Certificate;

interface CertificateProviderInterface {
    
    /**
     * 
     * @param string $fingerprint
     * @return Certificate
     */
    public function getByFingerprint($fingerprint);
    
    /**
     * 
     * @param \WigleyPay\Sdk\Certificate\Certificate $certificate
     */
    public function save(Certificate $certificate);
}
