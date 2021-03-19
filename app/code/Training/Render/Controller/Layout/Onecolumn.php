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
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}
