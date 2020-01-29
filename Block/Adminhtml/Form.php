<?php

namespace ManishJoy\AdminCli\Block\Adminhtml;

class Form extends \Magento\Framework\View\Element\Template
{
	/**
     * Preparing global layout
     *
     * @return $this
     */
    protected function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Admin Command Line'));
    }


    /**
     * Retrieve true if exec funtion is accesible
     * @return bool
     */
    public function execExist()
    {
    	return function_exists('exec');
    }
}
