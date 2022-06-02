<?php 
namespace CustomerBased\CheckoutCustomization\Api\Quote;
interface CheckoutcustomizationInterface
{
    /**
     * GET for Post api
     * @param int $quoteId
     * @param string $customerIsp
     * @param int $isCustomerSatisfied
     * @return string
     */
    public function saveCheckoutcustomizationDataInQuote($quoteId , $customerIsp , $isCustomerSatisfied);
}