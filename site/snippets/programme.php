<section id="programme">
<h3><?= $data->title()->html() ?></h3><span><a href="#">par jours</a></span>/<span><a href="#">par artistes</a></span>/<span><a href="#">par scènes</a></span>



<?php

$programme = page('programme')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $programme = $programme->limit($limit);

?>

<ul class="artistlist">

  <?php foreach($programme as $programme): ?>

    <li class="artistlist">
        <a href="<?= $programme->url() ?>" class="artistelink"><?= $programme->title()->html() ?></a>
    </li>

  <?php endforeach ?>




</ul>



</section>

