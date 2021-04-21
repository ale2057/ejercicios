<?php


namespace Homework\Page\Model;


class Dato extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Homework\Page\Model\ResourceModel\Dato::class);
    }
}
