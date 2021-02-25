<?php

namespace Training\Test\Observer;

use Magento\Framework\Event\ObserverInterface;

class RedirectToLogin implements ObserverInterface
{
    private $redirect;

    private $actionFlag;
    protected $customerSession;

    public function __construct(
        \Magento\Framework\Controller\Result\RedirectFactory $redirect,
        \Magento\Framework\App\ActionFlag $actionFlag,
        \Magento\Customer\Model\Session $customerSession
    ){
        $this->redirect = $redirect;
        $this->actionFlag = $actionFlag;
        $this->customerSession = $customerSession;
    }

    public function execute(\Magento\Framework\Event\Observer $observer){

        $request  = $observer->getEvent()->getData('request');

        if($request->getModuleName() == 'catalog'
        && $request->getControllerName()== 'product'
        && $request->getActionName() == 'view'){

            $controller = $observer->getEvent()->getData('controller_action');
         //   $this->actionFlag->set('', \Magento\Framework\App\ActionInterface::FLAG_NO_DISPATCH, true);

            if (!$this->customerSession->isLoggedIn()) {
                $controller->getResponse()->setRedirect('customer/account/login');
            }
            return $this;

        }
    }
}
