<?php

namespace Training\Test\Block;

class Test extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\UrlInterface $urlBuilder,
        array $data = array()
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $data);
    }
//    protected function _toHtml()
//    {
//        return "<b>Hello world from block!</b>";
//    }
}
