<?php
namespace CustomerBased\CheckoutCustomization\Helper;
 
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\Serialize\SerializerInterface;
 
class Data extends AbstractHelper
{
    protected $_scopeConfig;
    protected $serializer;
 
    public function __construct(
        Context $context,
        SerializerInterface $serializer
    ) {
        parent::__construct($context);
        $this->_scopeConfig = $context->getScopeConfig();     
        $this->serializer = $serializer;    
    }
 
    public function getValueFromMultipleFields() {
        $data = $this->_scopeConfig->getValue('SECTION/GROUP/FIELD',ScopeInterface::SCOPE_STORE);
        $decodedValue = $this->serializer->unserialize($data);
        foreach($decodedValue as $value) {
            if($value['firstbox'] == 'Website 1') {
                return $value['secondbox'];
            }
        }
        return false;
    }

}