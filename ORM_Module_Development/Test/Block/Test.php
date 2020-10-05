<?php

namespace Learning\Test\Block;

/**
 * Test content block
 */
class Test extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Customer Resgistration Form'));
        
        return parent::_prepareLayout();
    }
}