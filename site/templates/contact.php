<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?= $page->subtitle()->or($page->title()) ?></h1>

    <?php if(isset($success)): ?>
    <div class="alert success">
      <p><?= $success ?></p>
    </div>
    <?php else: ?>

    <?php if(isset($failed)): ?>
    <div class="alert error">
      <p><?= $failed ?></p>
    </div>
    <?php endif ?>

    <form method="post">



      <div class="field<?php e(isset($alert['name']), ' error'); ?>">
        <label for="name">Name <abbr title="required">*</abbr></label>
        <?php e(isset($alert['name']), '<span class="alert error">' . html($messages['name']) . '</span>'); ?>
        <input type="text" id="name" name="name" value="<?= isset($data['name']) ? $data['name'] : '' ?>">
      </div>

      <div class="field<?php e(isset($alert['email']), ' error'); ?>">
        <label for="email">Email <abbr title="required">*</abbr></label>
        <?php e(isset($alert['email']), '<span class="alert error">' . html($messages['email']) . '</span>'); ?>
        <input type="email" id="email" name="email" value="<?= isset($data['email']) ? $data['email'] : '' ?>">
      </div>

      <div class="field<?php e(isset($alert['text']), ' error'); ?>">
        <label for="text">Message <abbr title="required">*</abbr></label>
        <?php e(isset($alert['text']), '<span class="alert error">' . html($messages['text']) . '</span>'); ?>
        <textarea id="text" name="text" ><?= isset($data['text']) ? $data['text'] : '' ?></textarea>
      </div>

      <div class="field"><input type="submit" name="submit" value="Submit"></div>

    </form>

    <?php endif ?>

  </main>

<?php snippet('footer') ?>