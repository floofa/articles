<h1 class="nadpis-hlavni">Články - <?=$item->article_category->name?></h1>

<h2><a href="<?=$item->get_url()?>"><?=$item->name?></a> <span><?=date('d.m.Y', $item->timestamp)?></span></h2>

<p class="anotation"><?=$item->anotation?></p>

<p>
  <?=nl2br($item->content)?>
</p>

