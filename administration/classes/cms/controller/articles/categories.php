<?php defined('SYSPATH') or die('No direct script access.');

class Cms_Controller_Articles_Categories extends Cms_Controller_Builder_Template_Administration_Classic
{
  protected $_model = 'article_category';
  protected $_list_drag = TRUE;
}

