<?php

namespace Training\Test\Controller\Product;

use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\View\Result\PageFactory;
use Magento\Catalog\Controller\Product as ProductAction;

class View extends \Magento\Catalog\Controller\Product\View
{
    protected $customerSession;
    protected $redirectFactory;

    public function __construct(
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory,
        Context $context,
        \Magento\Catalog\Helper\Product\View $viewHelper,
        \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory,
        PageFactory $resultPageFactory
    ) {
        $this->customerSession = $customerSession;
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context, $viewHelper, $resultForwardFactory, $resultPageFactory);
    }

    public function execute(
    )
    {
        if (!$this->customerSession->isLoggedIn()) {
//            return $this->redirectFactory->create()->setPath('customer/account/login');
        }
        return parent::execute();
    }
}
