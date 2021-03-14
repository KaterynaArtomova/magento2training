<?php

namespace Training\Test\Controller;

class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    protected $_config;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $config)
    {
        $this->_config = $config;
    }

    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $moduleName = 'cms';
        $controllerPath = 'index';
        $controllerName = 'index';
        $request->setModuleName($moduleName)
            ->setControllerName($controllerPath)
            ->setActionName($controllerName);
        return true;
    }
}
