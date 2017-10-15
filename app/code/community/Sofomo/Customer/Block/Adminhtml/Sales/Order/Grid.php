<?php

class Sofomo_Customer_Block_Adminhtml_Sales_Order_Grid
    extends Mage_Adminhtml_Block_Sales_Order_Grid
{
    protected function _prepareColumns()
    {
        $this->addColumnAfter('page_views', array(
            'header'=> Mage::helper('sofomo_customer')->__('Number of pages'),
            'width' => '80px',
            'type'  => 'number',
            'index' => 'page_views'
        ), 'status');

        return parent::_prepareColumns();
    }
}
