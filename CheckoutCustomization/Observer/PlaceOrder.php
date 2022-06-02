<?php 
namespace CustomerBased\CheckoutCustomization\Observer;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Quote\Model\QuoteFactory;
use Psr\Log\LoggerInterface;
 
class PlaceOrder implements ObserverInterface
{
    
    protected $_logger;
    protected $quoteFactory;
    public function __construct(LoggerInterface $logger,
        QuoteFactory $quoteFactory) {
        $this->_logger = $logger;
        $this->quoteFactory = $quoteFactory;
    }
 
    public function execute(Observer $observer)
    {
        $order = $observer->getOrder();
        $quoteId = $order->getQuoteId();
        $quote  =   $this->quoteFactory->create()->load($quoteId);
        $superhero_universes =   $quote->getSuperheroUniverses();        
        $order->setSuperheroUniverses($superhero_universes);
        $order->save();;
    }
}