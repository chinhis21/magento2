<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Chinhis\TestPlugin\Plugin\Magento\Backend\Model;

use Magento\Backend\Model\Auth;

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
        $this->logger->notice('ChinhisLOG::Plugin afterLogout '/*.$subject->getUser().' email:'.$subject->getUser(). ' event: logined'*/);
        //$subject->getUser();
        return $result;
    }
/*
    public function beforeLogout(\Magento\Backend\Model\Auth $subject)
    {
        //$this->logger->notice('::Plugin beforeLogout '.$subject->getUser().' email:'.$subject->getUser(). ' event: logined');
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
    
    public function afterLogin(Auth $authModel, $result, $username)
    {
        $this->logger->notice('ChinhisLOG User ' . $username . ' signed in.');
    }
    */
}

