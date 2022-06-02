<?php

namespace CustomerBased\CheckoutCustomization\Controller\Adminhtml\Checkoutcustomization;

class Index extends \Magento\Backend\App\Action
{
	/**
	 * variable
	 *
	 * @var boolean
	 */
	protected $resultPageFactory = false;

	/**
	 * function
	 *
	 * @param \Magento\Backend\App\Action\Context $context
	 * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
	 */
	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

	/**
	 * function
	 *
	 * @return void
	 */
	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		$resultPage->getConfig()->getTitle()->prepend((__('Checkout Customizationx')));

		return $resultPage;
	}

	/**
	 * function
	 *
	 * @return void
	 */
	protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('CustomerBased_CheckoutCustomization::checkout_customizationx');
    }


}