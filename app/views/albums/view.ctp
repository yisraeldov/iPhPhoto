<?php
echo $html->nestedList($album);
foreach ($album['KeyList'] as $imageId) {
    $thumbnail = $html->image(
        $html->url(array(
            "controller" => "image",
            "action" => "thumb",
            $imageId
            ),true)
        );
        echo $thumbnail;
        echo $html->link('Link Title', array('controller' => 'image', 'action' => 'thumb',$imageId));
}
?>