<?php snippet('header') ?>

  <main class="main" role="main">
<div id="artist">
        <?php snippet('prevnext', ['flip' => true]) ?>

      <h6><?= $page->title()->html() ?></h6>
      <!-- <ul id="jourscene">
        <li><a href="#"><?= $page->jour()->kirbytext() ?></a></li> — 
        <li><a href="#"><?= $page->scene()->kirbytext() ?></a></li>
        
      </ul> -->
      <?php snippet('coverimage', $page) ?>




      <ul id="listen">
        <li><a href="<?= $page->website()->html() ?>"><img src="../assets/images/6.svg" target="_blank" /></a></li>
        <li><a href="<?= $page->bandcamp()->html() ?>"><img src="../assets/images/5.svg" target="_blank" /></a></li>
        <li><a href="<?= $page->soundcloud()->html() ?>"><img src="../assets/images/3.svg" target="_blank" /></a></li>
      </ul>

      <p></p>

    
 </div>
 <div id="description"><?= $page->text()->kirbytext() ?></div>

<?php snippet('pics'); ?>

    
    
  </main>

