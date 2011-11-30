<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Article extends ORM_Classic 
{
  protected $_belongs_to = array ('article_category' => array ());
  protected $_sorting = array ('timestamp' => 'DESC');
  
  protected $_form_date_time_fields = array ('timestamp');
  
  public function set($column, $value)
  {
    /*
    switch ($column) {
      case 'article_category_id' :
        if ( ! $value)
          $value = NULL;
          break;
    }
    */
    
    return parent::set($column, $value);
  }
  
  public function set_list_item_default(&$arr, $item) 
  {
    $arr['date'] = date('d.m.Y - H:i', $item->timestamp);
    $arr['category'] = $item->article_category->name;
    $arr['cms_status'] = ($item->cms_status) ? ___('basic_yes') : ___('basic_no');
  }
}