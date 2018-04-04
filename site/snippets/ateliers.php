<section id="ateliers">
<h4><?= $data->title()->html() ?></h4>



<?php

$ateliers = page('ateliers')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $ateliers = $ateliers->limit($limit);

?>

<ul class="artistlist">

  <?php foreach($ateliers as $ateliers): ?>

    <li class="artistlist">
        <a href="<?= $ateliers->url() ?>" class="artistelink"><?= $ateliers->title()->html() ?></a>
    </li>

  <?php endforeach ?>




</ul>
</section>