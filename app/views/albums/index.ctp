<?php
foreach ($result as $album) {
    $albumList[]=$html->link(__($album['AlbumName'], true), array('action' => 'view',$album['AlbumId']));
}

echo $html->nestedList($albumList);
?>
