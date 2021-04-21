<?php


namespace Money\Convert\Controller\Index;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $pageResult = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $pageResult;
    }
}
