<?php

namespace Training\TestOM\Controller\Index;

use Training\TestOM\Model\PlayWithTest;

class Index implements \Magento\Framework\App\ActionInterface
{
    private $playTest;

    public function __construct(
        \Training\TestOM\Model\PlayWithTest $playTest
    ) {
       $this->playTest = $playTest;
    }
    public function execute()
    {
        $this->playTest->run();
        exit();
    }
}
