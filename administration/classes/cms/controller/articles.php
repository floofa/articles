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
  
  /*
  protected $_edit_bookmarks = array (
    'edit' => array (
      'route' => 'default', 
      'params' => array ('controller' => TRUE, 'action' => 'edit', 'id' => '{id}')
    ),
    'comments' => array (
      'route' => 'articles-comments', 
      'params' => array ('id' => '{id}'),
      'model' => 'comment',
      'foreign_key' => 'article_id'
    ),
  );
  */
  
  public function action_comments()
  {
    $this->_list_sub('comments');
  }
  
  
}

