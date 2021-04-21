<?php


namespace Homework\Page\Model\ResourceModel\Dato;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
{
    $this->_init(\Homework\Page\Model\Dato::class,
        \Homework\Page\Model\ResourceModel\Dato::class);
}
}
