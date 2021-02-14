<?php

namespace Training\TestOM\Controller\Index;

use Training\TestOM\Model\Test;

class Index implements \Magento\Framework\App\ActionInterface
{
    private $test;

    public function __construct(
        \Training\TestOM\Model\Test $test
    ) {
       $this->test = $test;
    }
    public function execute()
    {
        $this->test->log();
        exit();
    }
}
