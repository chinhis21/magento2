<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Chinhis\TestPreference\Rewrite\Magento\Customer\Model;

class Customer extends \Magento\Customer\Model\Customer
{
    public function getName()
    {
        $name = '';
        
        if ($this->_config->getAttribute('customer', 'prefix')->getIsVisible() && $this->getPrefix()) {
            $name .= $this->getPrefix() . ' ';
        }
        else{//my code: default prefix
            $name .= 'Preference: ';
        }
        $name .= $this->getFirstname();
        if ($this->_config->getAttribute('customer', 'middlename')->getIsVisible() && $this->getMiddlename()) {
            $name .= ' ' . $this->getMiddlename();
        }
        $name .= ' ' . $this->getLastname();
        if ($this->_config->getAttribute('customer', 'suffix')->getIsVisible() && $this->getSuffix()) {
            $name .= ' ' . $this->getSuffix();
        }
        return $name;
    }
}

