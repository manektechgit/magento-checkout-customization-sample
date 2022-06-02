<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace CustomerBased\CheckoutCustomization\Observer\Customer;

class RegisterSuccess implements \Magento\Framework\Event\ObserverInterface
{

    /**
     * Execute observer
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(
        \Magento\Framework\Event\Observer $observer
    ) {
        $data = $this->request->getPost();
        $customer = $observer->getEvent()->getCustomer();
        $this->logger->info(print_r($data).'events custom customer');
        $this->logger->info(print_r($customer->getIsSuperhero()).'events custom customer');
        $customer->setCustomAttribute('is_superhero', $customer->getIsSuperhero());
        $this->customerRepository->save($customer);
        return $this;
    }
}

