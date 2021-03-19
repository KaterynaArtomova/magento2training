<?php

namespace Training\Render\Controller\Layout;

class Onecolumn implements \Magento\Framework\App\ActionInterface
{
    private $resultPageFactory;
    private $request;

    public function __construct(
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->request = $request;
    }

    public function execute()
    {
//        echo $this->request->getFullActionName();
//        exit();
        $resultPage = $this->resultPageFactory->create();
//        print_r($resultPage->getLayout()->getUpdate()->getHandles());
//        exit();
        return $resultPage;
    }
}
