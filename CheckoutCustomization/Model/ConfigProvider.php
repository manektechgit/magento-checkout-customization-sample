<?php 
namespace CustomerBased\CheckoutCustomization\Model;
 
use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\View\LayoutInterface;
use CustomerBased\CheckoutCustomization\Helper\Data;
 
class ConfigProvider implements ConfigProviderInterface
{
   /** @var LayoutInterface  */
   protected $_layout;
   protected $ccHelper;
   protected $customerCc;
 
   public function __construct(LayoutInterface $layout,Data $ccHelper)
   {
       $this->_layout = $layout;
       $this->ccHelper = $ccHelper;
       $this->customerCc = $this->getSuperheroUniverses();
        
   }
 
   public function getSuperheroUniverses(){
       return $this->ispHelper->getSuperheroUniversesUsingAPI();
   }
 
   public function getConfig()
   {
       return [
           'superhero_universes' => $this->customerCc,
       ];
   }
}