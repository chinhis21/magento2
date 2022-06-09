<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Chinhis\TestPlugin\Plugin\Magento\Backend\Model;



class Auth
{

    
    protected $logger;
    
    public function __construct(
        \Psr\Log\LoggerInterface $logger
        ) {
            $this->logger = $logger;
    }
    
    public function afterLogout(
        \Magento\Backend\Model\Auth $subject,
        $result
    ) {
        $this->logger->notice('ChinhisLOG::Plugin afterLogout some user logOUT from backend from ip: '.$_SERVER['REMOTE_ADDR']);
        return $result;
    }

    public function beforeLogout(\Magento\Backend\Model\Auth $subject)
    {
        $this->logger->notice('ChinhisLOG::Plugin beforeLogout ');
        return [];
    }

    public function aroundLogout(
        \Magento\Backend\Model\Auth $subject,
        \Closure $proceed
    ) {
        //Your plugin code
        $this->logger->notice('ChinhisLOG::Plugin aroundLogoutBefore proceed() ');
        $result = $proceed();
        $this->logger->notice('ChinhisLOG::Plugin aroundLogoutAfter proceed() ');
        return $result;
    }
    
}

