

<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap">
      
      <header>
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <hr />
      </header>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </div>
    
    <section class="team wrap wide">
      
<section id="artiste">
<h3><?= $data->title()->html() ?></h3>
<?= $data->text()->kirbytext() ?>

</section>
      
    </section>

  </main>

<?php snippet('footer') ?>