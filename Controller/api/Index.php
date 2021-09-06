<?php

namespace Mrliving\Ctrler\Controller\api;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;


class Index extends Action
{
    private $resultJsonFactory;

    
    public function __construct(JsonFactory $resultJsonFactory, Context $context)
    {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
//        echo 'TT show...';
//       $rsJson = $this->resultJsonFactory->create();
//       return $rsJson->setData(['json_data' => 'come from json']);        
    
        
    }
}
