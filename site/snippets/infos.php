<section id="infos">
  <h3><?= $data->title()->html() ?></h3>

    <?php foreach($data->children()->visible() as $infos): ?>
      
 		<h4><?= $infos->title()->html() ?></h4>
		
      <p><?= $infos->text()->html() ?></p>
    <?php endforeach ?>
  
</section>