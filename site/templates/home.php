<?php

snippet('header');


foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));
}

?>

<?php snippet('social') ?>
<?php snippet('footer'); ?>
<?php snippet('pics'); ?>
