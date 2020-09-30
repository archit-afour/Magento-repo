<?php

namespace Learning\PluginModule\Plugin;

class Cart
{
    public function afterAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    )
    {
        $requestInfo['price']=$requestInfo['price']+50; //increase price by Rs.50/-
        return array($productInfo, $requestInfo);
    }
}