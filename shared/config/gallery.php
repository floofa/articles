<?php defined('SYSPATH') or die('No direct access allowed.');

$config['articles_images']['file_size_limit'] = '10MB';
$config['articles_images']['file_types'] = '*.jpg;*.jpeg;*.png;*.gif;*.bmp';
$config['articles_images']['file_types_desc'] = 'Obrázky';

$config['thumbs']['articles_images'] = array (
  's'   => array ('width' => 160, 'height' => 120),
);

return $config;

