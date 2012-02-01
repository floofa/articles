<h1>Články</h1>

<?foreach ($items as $item):?>
  <div class="article">
    <h2><a href="<?=$item->get_url()?>"><?=$item->name?></a></h2>
  </div>
<?endforeach;?>

<?=$pagination?>