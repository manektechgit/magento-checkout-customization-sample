<?php
 
namespace CustomerBased\CheckoutCustomization\Controller\Checkout;
 
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\View\LayoutFactory;
use Magento\Checkout\Model\Cart;
use Magento\Framework\App\Action\Action;
use Magento\Checkout\Model\Session;
use Magento\Quote\Model\QuoteRepository;
 
class saveInQuote extends Action
{
    protected $resultForwardFactory;
    protected $layoutFactory;
    protected $cart;
 
    /**
     * function
     *
     * @param Context $context
     * @param ForwardFactory $resultForwardFactory
     * @param LayoutFactory $layoutFactory
     * @param Cart $cart
     * @param Session $checkoutSession
     * @param QuoteRepository $quoteRepository
     */
    public function __construct(
        Context $context,
        ForwardFactory $resultForwardFactory,
        LayoutFactory $layoutFactory,
        Cart $cart,
        Session $checkoutSession,
        QuoteRepository $quoteRepository
    )
    {
        $this->resultForwardFactory = $resultForwardFactory;
        $this->layoutFactory = $layoutFactory;
        $this->cart = $cart;
        $this->checkoutSession = $checkoutSession;
        $this->quoteRepository = $quoteRepository;
 
        parent::__construct($context);
    }
 
    /**
     * function
     *
     * @return void
     */
    public function execute()
    {
        $superhero_universes = $this->getRequest()->getParam('superhero_universes');
        $quoteId = $this->checkoutSession->getQuoteId();
        $quote = $this->quoteRepository->get($quoteId);
        $quote->setSuperheroUniverses($superhero_universes);
        $quote->save();
    }
}