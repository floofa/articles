<?php defined('SYSPATH') or die('No direct script access.');

abstract class Cms_Controller_Articles extends Controller_Builder_Template_Application_Type
{
  protected $_model = 'article';
  protected $_model_category = 'article_category';
  protected $_page_type = 'articles';
}