<?php
/**
 * Venustheme
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Venustheme EULA that is bundled with
 * this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.venustheme.com/LICENSE-1.0.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade the extension
 * to newer versions in the future. If you wish to customize the extension
 * for your needs please refer to http://www.venustheme.com/ for more information
 *
 * @category   Ves
 * @package    Ves_Blog
 * @copyright  Copyright (c) 2014 Venustheme (http://www.venustheme.com/)
 * @license    http://www.venustheme.com/LICENSE-1.0.html
 */

/**
 * Ves Blog Extension
 *
 * @category   Ves
 * @package    Ves_Blog
 * @author     Venustheme Dev Team <venustheme@gmail.com>
 */
class Ves_Blog_Block_Adminhtml_Comment_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
  public function __construct()
  {
    parent::__construct();

    $this->_objectId = 'id';
    $this->_blockGroup  = 'ves_blog';
    $this->_controller  = 'adminhtml_comment';

    $this->_updateButton('save', 'label', Mage::helper('ves_blog')->__('Save Record'));
    $this->_updateButton('delete', 'label', Mage::helper('ves_blog')->__('Delete Record'));

    $this->_addButton('saveandcontinue', array(
      'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
      'onclick'   => 'saveAndContinueEdit()',
      'class'     => 'save',
      ), -100);

    $this->_formScripts[] = "
    function saveAndContinueEdit(){
      editForm.submit($('edit_form').action+'back/edit/');
    }
    ";
  }

  public function getHeaderText()
  {
    return Mage::helper('ves_blog')->__("Edit Record '%s'", $this->htmlEscape(Mage::registry('comment_data')->getTitle()));
  }
}