<?php defined('SYSPATH') or die('No direct script access.');

Route::set('articles-get', 'clanky/<category_rew_id>/<rew_id>')
  ->defaults(array(
    'controller' => 'articles',
    'action' => 'get',
));

Route::set('articles-category', 'clanky/<category_rew_id>')
  ->defaults(array(
    'controller' => 'articles',
    'action' => 'list_category',
));

Route::set('articles', 'clanky')
  ->defaults(array(
    'controller' => 'articles',
    'action' => 'list',
));


