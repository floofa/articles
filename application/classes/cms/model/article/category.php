<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Article_Category extends ORM 
{
  protected $_has_many = array ('articles' => array ('model' => 'article'));
  
  protected $_sorting = array ('name' => 'ASC');
  
  public function get_url()
  {
    return Route::url('articles-category', array ('category_rew_id' => $this->rew_id), TRUE);
  }
}