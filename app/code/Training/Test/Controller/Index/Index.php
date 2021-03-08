<?php


namespace Training\Test\Controller\Index;


class Index implements \Magento\Framework\App\ActionInterface
{

    private $resultRawFactory;
    private $resultFactory;

    public function __construct(
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory,
        \Magento\Framework\Controller\ResultFactory $resultFactory
    ) {
        $this->resultRawFactory = $resultRawFactory;
        $this->resultFactory = $resultFactory;
    }
    public function execute()
    {
        $resultRaw = $this->resultRawFactory->create();
        $resultRaw->setContents('simple text');
        $resultRaw->setHeader('Content-Type', 'text/txt', true);
        return $resultRaw;
    }
}

