<?php
 /*------------------------------------------------------------------------
  # VenusTheme Brand Module 
  # ------------------------------------------------------------------------
  # author:    VenusTheme.Com
  # copyright: Copyright (C) 2012 http://www.venustheme.com. All Rights Reserved.
  # @license: http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
  # Websites: http://www.venustheme.com
  # Technical Support:  http://www.venustheme.com/
-------------------------------------------------------------------------*/
class Ves_BlockBuilder_Model_Mysql4_Selector extends Mage_Core_Model_Mysql4_Abstract {

    /**
     * Initialize resource model
     */
    protected function _construct() {
	
        $this->_init('ves_blockbuilder/selector', 'selector_id');
    }

    /**
     * Load images
     */
   // public function loadImage(Mage_Core_Model_Abstract $object) {
   //     return $this->__loadImage($object);
   // }

    /**
     * Retrieve select object for load object data
     *
     * @param string $field
     * @param mixed $value
     * @return Zend_Db_Select
     */
    protected function _getLoadSelect($field, $value, $object) {
        $select = parent::_getLoadSelect($field, $value, $object);

        return $select;
    }


    /**
     * Process page data before saving
     *
     * @param Mage_Core_Model_Abstract $object
     * @return Mage_Cms_Model_Resource_Page
     */
    protected function _beforeSave(Mage_Core_Model_Abstract $object) {
       
        return parent::_beforeSave($object);
    }
    /**
     * Call-back function
     */
    protected function _beforeDelete(Mage_Core_Model_Abstract $object) {
        // Cleanup stats on brand delete
        $adapter = $this->_getReadAdapter();
        // 1. Delete brand/store
        //$adapter->delete($this->getTable('venustheme_brand/brand_store'), 'brand_id='.$object->getId());
        // 2. Delete brand/post_cat

        return parent::_beforeDelete($object);
    }
    /**
   * Assign page to store views
   *
   * @param Mage_Core_Model_Abstract $object
   */
  protected function _afterSave(Mage_Core_Model_Abstract $object)
  {
    return parent::_afterSave($object);
  }

  /**
   * Do store and category processing after loading
   * 
   * @param Mage_Core_Model_Abstract $object Current faq item
   */
  protected function _afterLoad(Mage_Core_Model_Abstract $object)
  {
    return parent::_afterLoad($object);
  }
}
