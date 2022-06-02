<?php
 
namespace CustomerBased\CheckoutCustomization\Block\Adminhtml\Form\Field;
use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
 
class SuperheroUniverses extends AbstractFieldArray
{
    /**
     * function
     *
     * @return void
     */
    protected function _prepareToRender()
    {
        $this->addColumn('value', ['label' => __('Value'), 'class' => 'required-entry']);        
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add New');
    }
}