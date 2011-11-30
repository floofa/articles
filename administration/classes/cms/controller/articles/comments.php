<?php defined('SYSPATH') or die('No direct script access.');

class Cms_Controller_Articles_Comments extends Cms_Controller_Builder_Template_Administration_Classic_Sub
{
  protected $_model = 'comment';
  protected $_parent_model = 'article';
  protected $_list_name = 'article_comments';
  protected $_list_new = FALSE;
  protected $_list_filter_name = 'article_filter';
  protected $_list_filter_session_name = 'filter_article_comments';
  
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
  
  protected function _set_list_where($orm_object)
  {
    $orm_object->where('model', '=', 'article');
    $orm_object->where('model_id', '=', $this->_parent_item->id);
  }
}

