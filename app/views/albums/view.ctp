<?php

foreach ($album['Images'] as $imageId => $image) {
    $thumbnail = $html->image(
        $html->url(array(
            "controller" => "image",
            "action" => "thumb",
            $imageId
            ),true),
            array('alt' => $image['Caption'])
        );
        // echo $thumbnail;
        echo $html->link($thumbnail, array('controller' => 'image', 'action' => 'view',$imageId),array('escape'=>false,'title'=>$image['Caption'], 'class'=>$image['MediaType']));
}
?>

<pre>
    <?php  var_export($album); ?>
</pre>