<?php


class Motech_RemoveCompare_Helper_Product_Compare extends Mage_Catalog_Helper_Product_Compare
{
 
    /**
     * Retrieve url for adding product to conpare list, return false
     *
     * @param   Mage_Catalog_Model_Product $product - not used but must leave else we get errors
     * @return  boolean false
     */
    public function getAddUrl($product)
    {
        return false;
    }
 
}
?>