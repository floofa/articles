<?php defined('SYSPATH') or die('No direct script access.');

class Form_Comment_Article_Filter extends Forms_Filter
{
  public function build()
  {
    $this->group('group1')
      ->add('surname');
  }
}
