<?php
echo $javascript->link('prototype');
echo $javascript->link('scriptaculous');

foreach ($result as $album) {
    // $albumList[]=$html->link(__($album['AlbumName'], true), array('action' => 'view',$album['AlbumId']));
    $albumList[]=$ajax->link(
           __($album['AlbumName'], true), 
           array('action' => 'view',$album['AlbumId']),
           array( 'update' => 'view' , 'indicator'=>'throbber')
        );
}

echo $html->nestedList($albumList,array('id'=>'albumList'));
$ajax->sortable('albumList');
?>
<div id="throbber" style="display:none"> Loading ... </div>
<div id="view">
    
</div>
