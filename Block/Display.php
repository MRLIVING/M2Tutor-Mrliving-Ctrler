<?php
namespace Mrliving\Ctrler\Block;

class Display extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function sayHello()
	{
		return __('Hello World');
	}

    public function sayGoodNight()
	{
		return 'Good Night';
	}

}
