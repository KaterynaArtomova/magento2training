<?php

namespace Training\CheckPluginFunctionality\Plugin\Model;
class Url
{

   public function beforeGetUrl(
        \Magento\Framework\UrlInterface $subject,
        $routePath = null,
        $routeParams = null
    ){

        if($routePath == 'customer/account/create'){
            return $subject->getBaseUrl()."customer/account/login";
        }
    }

}
