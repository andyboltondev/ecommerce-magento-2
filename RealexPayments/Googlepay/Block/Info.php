<?php
namespace RealexPayments\Googlepay\Block;

use Magento\Framework\Phrase;
use Magento\Payment\Block\ConfigurableInfo;

class Info extends ConfigurableInfo
{

    protected function getLabel($field)
    {
        return __($field);
    }

}