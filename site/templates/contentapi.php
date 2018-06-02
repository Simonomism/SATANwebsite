<?php

$data = $pages->find('content')->children()->visible();
$json = array();

foreach($data as $article) {

  $json[] = array(
    'website'   => (string)$article->website(),
    'bandcamp' => (string)$article->bandcamp(),
    'soundcloud'  => (string)$article->soundcloud(),
    'jour'  => (string)$article->jour()
    'scene'  => (string)$article->scene()
  );

}

echo json_encode($json);

?>
