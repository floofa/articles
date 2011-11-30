<?php defined('SYSPATH') or die('No direct script access.');

return array
(
  'cms_menu_articles_module' => 'Články',
  'cms_menu_articles_module_articles' => 'Správa článků',
  'cms_menu_articles_module_articles_categories' => 'Kategorie článků',
  
  'navigation_articles' => 'Články',
  'navigation_articles_categories' => 'Kategorie článků',
  'navigation_articles_comments' => 'Komentáře',
  
  'bookmarks_article_edit' => 'Editace',
  'bookmarks_article_comments' => 'Komentáře k článku',

  // clanky
  'list_article_heading' => 'Výpis článků',
  'list_article_new_button' => 'Nový článek',
  'list_article_fields' => array ('date' => 'Datum', 'name' => 'Název', 'category' => 'Kategorie', 'cms_status' => 'Zobrazit'),
  
  // kategorie clanku
  'list_article_category_heading' => 'Výpis kategorií článků',
  'list_article_category_new_button' => 'Nová kategorie',
  'list_article_category_fields' => array ('name' => 'Název', 'cms_status' => 'Zobrazit'),
  
  // komentare k clanku
  'list_article_comments_heading' => 'Výpis komentářů',
  'list_article_comments_fields' => array ('date' => 'Datum', 'user_name' => 'Uživatel', 'comment' => 'Komentář', 'cms_status' => 'Zobrazit'),
  
  //-------- FORMS ------------ //
  'form_article_edit_heading' => 'Editace článku',
  'form_article_edit_group_articles_images' => 'Obrázky',
  'form_article_edit_field_name' => 'Nadpis',
  'form_article_edit_field_rew_id' => 'Url',
  'form_article_edit_field_timestamp' => 'Datum',
  'form_article_edit_field_article_category_id' => 'Kategorie',
  'form_article_edit_field_meta_keywords' => 'Meta keywords',
  'form_article_edit_field_meta_description' => 'Meta description',
  'form_article_edit_field_cms_status' => 'Zobrazit',
  'form_article_edit_field_anotation' => 'Anotace',
  'form_article_edit_field_content' => 'Obsah',
  
  // edit article category
  'form_article_category_edit_heading' => 'Editace kategorie článku',
  'form_article_category_edit_field_name' => 'Název',
  'form_article_category_edit_field_rew_id' => 'Url',
  'form_article_category_edit_field_cms_status' => 'Zobrazit',
  
  // filter article comments
  'form_comment_article_filter_field_surname' => 'Příjmení',
);