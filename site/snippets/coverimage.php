<?php if($image = $item->coverimage()->toFile()): $thumb = $image->crop(200, 200); ?>
  <figure>
    <img src="<?= $image->url() ?>" alt="<?= $page ->title()->html() ?>" title="<?= $page ->title()->html() ?>" />
  </figure>
<?php endif ?>

