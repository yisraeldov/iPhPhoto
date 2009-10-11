<?php
/**
 * Examples for how to use CFPropertyList
 * Read an XML PropertyList
 * @package plist
 * @subpackage plist.examples
 */

// just in case...
error_reporting( E_ALL );
ini_set( 'display_errors', 'on' );

/**
 * Require CFPropertyList
 */
require_once(dirname(__FILE__).'/CFPropertyList-1.0.2/CFPropertyList.php');


/*
 * create a new CFPropertyList instance which loads the sample.plist on construct.
 * since we know it's an XML file, we can skip format-determination
 */

file('/Users/yisraeldov/Pictures/iPhoto Library/AlbumData.xml');
$plist = new CFPropertyList( '/Users/yisraeldov/Pictures/iPhoto Library/AlbumData.xml', CFPropertyList::FORMAT_XML );

/*
 * retrieve the array structure of sample.plist and dump to stdout
 */

echo '<pre>';
$library = $plist->toArray() ;
//var_dump( $library  );
echo '</pre>';

foreach ($library['List of Albums'] as $album_key => $album) {
     echo "<h3>".$album['AlbumName'].' - '. $album['Album Type']."</h3>\n";
}

$albumId = 3 ;

$keyList = $library['List of Albums'][$albumId]["KeyList"] ;
var_dump($keyList);
foreach ($keyList as $key => $image) {
    $image = $library['Master Image List'][$image];
    $tnPath = $image['ThumbPath'];
    $tn= base64_encode(file_get_contents($tnPath));
    $imagePath = $image['ImagePath'];
    ?>
    <div>
        <a href='<?php echo $imagePath; ?>'>
            <img src='data:image/jpeg;base64,<?php echo $tn; ?>' >
        </a>
        <dl>
            <?php foreach ($image as $key => $value): ?>
                <dt><?php echo $key ?></dt>
                <dd><?php echo $value ?></dd>
            <?php endforeach ?>
        </dl>
    </div>
    <? 
}


 // function to encode the image
 // returns the image as base64 encoded string
 function encode_img($img)
 {
     $fd = fopen($img, 'rb');
     $size = filesize($img);
     $cont = fread($fd, $size);
     fclose($fd);
     $encimg = base64_encode($cont);
     return $encimg;
 }
  
 // function to display the image
 function display_img($imgcode,$type)
 {
     header('Content-type: image/'.$type);
     header('Content-length: '.strlen($imgcode));
     echo base64_decode($imgcode);
 }
?>