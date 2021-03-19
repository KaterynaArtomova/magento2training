<?php

namespace Training\Test\Controller\Block;

class Index implements \Magento\Framework\App\ActionInterface
{

    private $layoutFactory;
    private $resultRawFactory;
    private $resultFactory;

    public function __construct(
        \Magento\Framework\View\LayoutFactory $layoutFactory,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory,
        \Magento\Framework\Controller\ResultFactory $resultFactory
    )
    {
        $this->layoutFactory = $layoutFactory;
        $this->resultRawFactory = $resultRawFactory;
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
        $resultRaw = $this->resultRawFactory->create();
        $layout = $this->layoutFactory->create();
        $block = $layout->createBlock('Training\Test\Block\Test')->toHtml();
        $resultRaw->setContents($block);
        $resultRaw->setHeader('Content-Type', 'text/html', true);
        return $resultRaw;
    }
}
