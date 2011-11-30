<?php defined('SYSPATH') or die('No direct script access.');


Route::set('articles-comments', 'articles/<parent_id>/comments(/<action>(/<id>))')
  ->defaults(array(
    'parent_controller' => 'articles',
    'controller' => 'articles_comments',
    'action' => 'index',
));

