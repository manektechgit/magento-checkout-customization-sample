# Mage2 Module CustomerBased CheckoutCustomization

    ``customerbased/module-checkoutcustomization``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
CustomerBased

## Installation

### Type 1: Zip file

 - Unzip the zip file in `app/code/CustomerBased`
 - Enable the module by running `php bin/magento module:enable CustomerBased_CheckoutCustomization`
 - Apply database updates by running `php bin/magento setup:upgrade --keep-generated`
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require customerbased/module-checkoutcustomization`
 - enable the module by running `php bin/magento module:enable CustomerBased_CheckoutCustomization`
 - apply database updates by running `php bin/magento setup:upgrade --keep-generated`
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Observer
	- customer_register_success > CustomerBased\CheckoutCustomization\Observer\Customer\RegisterSuccess


## Attributes

 - Customer - is_superhero (is_superhero)

