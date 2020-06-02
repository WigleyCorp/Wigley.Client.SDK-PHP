<?php
namespace WigleyPay\Sdk\Models;

class FinancialInclusionResult
{
    /**
     *
     * @var bool
     */
    public $IsApplied;

    /**
     *
     * @var float
     */
    public $ReturnAmount;

    /**
     *
     * @var int WigleyPay\Sdk\Type\InclusionType::*
     */
    public $LawNumber;
}
