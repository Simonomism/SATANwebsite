<section id="vendredi">
<!-- <h3><?= $data->title()->html() ?></h3><span><a href="#">par jours</a></span>/<span><a href="#">par artistes</a></span>/<span><a href="#">par scènes</a></span>
-->


<?php

$vendredi = page('vendredi')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $vendredi = $vendredi->limit($limit);

?>

<ul class="artistlist">

  <?php foreach($vendredi as $vendredi): ?>

    <li class="artistlist">
        <a href="<?= $vendredi->url() ?>" class="artistelink" alt="<?= $vendredi->title() ?>" title="<?= $vendredi->title() ?>"><?= $vendredi->title()->html() ?></a>
    </li>

  <?php endforeach ?>




</ul>

<img src="../assets/images/1.gif" style="margin-top:20px;" alt="Le fort de Bertheaume à Plougonvelin, Finistère" title="Le fort de Bertheaume à Plougonvelin, Finistère" /><span id="credits"><a href="https://www.flickr.com/photos/renphotographie/" alt="Photographie capturée par Renan Peron" title="Photographie capturée par Renan Peron" target="_blank">Crédits photos: Renan Peron</a></span>


<?php snippet('social') ?>

</section>

