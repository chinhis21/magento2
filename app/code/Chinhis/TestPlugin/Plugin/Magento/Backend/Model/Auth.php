<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Chinhis\TestPlugin\Plugin\Magento\Backend\Model;

class Auth
{

    public function afterLogout(
        \Magento\Backend\Model\Auth $subject,
        $result
    ) {
        //Your plugin code
        return $result;
    }

    public function beforeLogout(\Magento\Backend\Model\Auth $subject)
    {
        //Your plugin code
        return [];
    }

    public function aroundLogout(
        \Magento\Backend\Model\Auth $subject,
        \Closure $proceed
    ) {
        //Your plugin code
        $result = $proceed();
        return $result;
    }
}

