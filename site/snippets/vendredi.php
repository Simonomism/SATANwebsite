<section id="vendredi">

<?php

$programme = page('vendredi')->children()->filter(function($child) {
  return str::startsWith($child->horaire(), '2', '0');
});
if(isset($limit)) $programme = $vendredi->limit($limit);

?>
	<h4><?= $data->title()->html() ?></h4>

<ul class="artistlist">

  <?php foreach($programme as $vendredi): ?>

    <li class="artistlist">
    	<div class="infosconcert">
 			<span><?= $vendredi->date('H:i', 'horaire') ?></span> 
      		<span class="scene"><?= $vendredi->scene()->html() ?></span>
    	</div>

     <a href="<?= $vendredi->url() ?>" class="artistelink" alt="<?= $vendredi->title() ?>" title="<?= $vendredi->title() ?>">       
        
		<?= $vendredi->title()->html() ?>

	</a>
    </li>

  <?php endforeach ?>

</ul>



</section>

