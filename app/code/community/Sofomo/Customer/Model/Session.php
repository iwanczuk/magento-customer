<?php

class Sofomo_Customer_Model_Session
    extends Mage_Core_Model_Session_Abstract
{
    public function __construct()
    {
        $this->init('sofomo_customer');
    }

    /**
     * @return int
     */
    public function getPageViews()
    {
        return (int) $this->getData('page_views');
    }

    /**
     * @param int $pageViews
     * @return Sofomo_Customer_Model_Session
     */
    public function setPageViews($pageViews)
    {
        return $this->setData('page_views', (int) $pageViews);
    }

    /**
     * @return Sofomo_Customer_Model_Session
     */
    public function incPageViews()
    {
        if (!$this->hasDataChanges()) {
            $this->setPageViews($this->getPageViews() + 1);
        }

        return $this;
    }
}
