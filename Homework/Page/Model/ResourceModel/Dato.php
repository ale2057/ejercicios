<?php


namespace Homework\Page\Model\ResourceModel;


class Dato extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('question','q_id');
    }
}
