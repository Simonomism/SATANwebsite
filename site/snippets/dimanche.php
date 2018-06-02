<section id="dimanche">
<!-- <h3><?= $data->title()->html() ?></h3><span><a href="#">par jours</a></span>/<span><a href="#">par artistes</a></span>/<span><a href="#">par scènes</a></span>
-->


<?php

$dimanche = page('dimanche')->children()->visible()->sortBy('horaire','asc');

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $dimanche = $dimanche->limit($limit);

?>
	<h4><?= $data->title()->html() ?></h4>

<ul class="artistlist">

  <?php foreach($dimanche as $dimanche): ?>

    <li class="artistlist"><div class="infosconcert"><span><?= $dimanche->horaire()->html() ?></span> <span class="scene"><?= $dimanche->scene()->html() ?></span></div>
        <a href="<?= $dimanche->url() ?>" class="artistelink" alt="<?= $dimanche->title() ?>" title="<?= $dimanche->title() ?>"><?= $dimanche->title()->html() ?></a>
    </li>

  <?php endforeach ?>




</ul>

</section>

