<?php
namespace Learning\Test\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Learning\Test\Model\Test',
            'Learning\Test\Model\ResourceModel\Test'
        );
    }
}