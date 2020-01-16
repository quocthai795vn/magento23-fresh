<?php

namespace ThaiNQ\Faq\Model\ResourceModel\Faq;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('ThaiNQ\Faq\Model\Faq', 'ThaiNQ\Faq\Model\ResourceModel\Faq');
    }

    public function getBySortOrder()
    {
        $this->getSelect()->reset('order');
        return $this->setOrder('sort_order', 'asc');
    }
}