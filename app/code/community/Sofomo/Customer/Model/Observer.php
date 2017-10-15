<?php

class Sofomo_Customer_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     */
    public function updateSessionPageViews(Varien_Event_Observer $observer)
    {
        /** @var Mage_Core_Controller_Front_Action */
        $action = $observer->getControllerAction();

        if (!$action->getFlag('', Mage_Core_Controller_Varien_Action::FLAG_NO_START_SESSION)) {
            if (!$action->getRequest()->isXmlHttpRequest()) {
                $this->_getSession()->incPageViews();
            }
        }
    }

    /**
     * @param Varien_Event_Observer $observer
     */
    public function updateQuotePageViews(Varien_Event_Observer $observer)
    {
        /** @var Mage_Sales_Model_Quote */
        $quote = $observer->getQuote();

        $quote->setPageViews($this->_getSession()->getPageViews());
    }

    /**
     * @return Sofomo_Customer_Model_Session
     */
    protected function _getSession()
    {
        return Mage::getSingleton('sofomo_customer/session');
    }
}
