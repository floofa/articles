<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Article_Category extends ORM_Classic 
{
  protected $_sorting = array ('sequence' => 'DESC');
  
  public function set_list_item_default(&$arr, $item) 
  {
    $arr['cms_status'] = ($item->cms_status) ? ___('basic_yes') : ___('basic_no');
  }
}