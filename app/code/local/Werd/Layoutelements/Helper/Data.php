<?php

class Werd_Layoutelements_Helper_Data extends Mage_Core_Helper_Abstract
{


    public function getNavigationCollection()
    {
        $collection = Mage::getModel('cms/page')->getCollection()->addFieldToFilter('root_template', 'barcs_content_page')->setOrder('title', 'ASC');
        return $collection;
    }

    public function getStateCollection()
    {
        $collection = Mage::getModel('cms/page')->getCollection()->addFieldToFilter('root_template', 'barcs_stockist')->setOrder('title', 'ASC');
        return $collection;
    }

    public function strShortDescription($str = '', $size = 200)
    {
        if (strlen($str) > $size) {
            $str = substr($str, 0, $size) . '...';
        }
        return $str;
    }
}