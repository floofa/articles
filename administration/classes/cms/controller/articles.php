<?php defined('SYSPATH') or die('No direct script access.');

class Cms_Controller_Articles extends Controller_Builder_Template_Administration_Classic
{
  protected $_edit_bookmarks = array (
    'edit' => array (
      'name' => 'article_edit',
      'route' => 'default', 
      'params' => array ('controller' => 'articles', 'action' => 'edit', 'id' => '{id}')
    ),
    'comments' => array (
      'name' => 'article_comments',
      'route' => 'articles-comments', 
      'params' => array ('parent_id' => '{id}'),
      'parent_model' => 'article',
    ),
  );
  
  public function before()
  {
    parent::before();
    
    $modules = Kohana::modules();
    
    // pokud neni pridan modul s komentari, nezobrazime zalozku pro komentare
    if ( ! array_key_exists('comments', $modules)) {
      unset($this->_edit_bookmarks['comments']);
    }
  }
  
  public function action_comments()
  {
    $this->_list_sub('comments');
  }
  
  
}

