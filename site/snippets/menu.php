<nav class="navigation column" role="navigation">
  <ul class="menu">

    <?php foreach($pages->visible()->not(page('edito'),('ateliers')) as $item): ?>


    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="#<?= $item ?>" alt="<?= $item ?>" title="<?= $item ?>"><?= $item->title()->html() ?></a>
    </li>

    <?php endforeach ?>

  </ul>
</nav>