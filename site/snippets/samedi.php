<section id="samedi">
<!-- <h3><?= $data->title()->html() ?></h3><span><a href="#">par jours</a></span>/<span><a href="#">par artistes</a></span>/<span><a href="#">par scènes</a></span>
-->


<?php

$samedi = page('samedi')->children()->visible()->sortBy('horaire','asc');

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $samedi = $samedi->limit($limit);

?>
	<h4><?= $data->title()->html() ?></h4>

<ul class="artistlist">

  <?php foreach($samedi as $samedi): ?>

    <li class="artistlist"><div class="infosconcert"><span><?= $samedi->horaire()->html() ?></span> <span class="scene"><?= $samedi->scene()->html() ?></span></div>
        <a href="<?= $samedi->url() ?>" class="artistelink" alt="<?= $samedi->title() ?>" title="<?= $samedi->title() ?>"><?= $samedi->title()->html() ?></a>
    </li>

  <?php endforeach ?>




</ul>

</section>

