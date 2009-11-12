<?php
class Album extends AppModel {

	var $name = 'Album';
	var $useDbConfig = 'plist';
    var $hasMany = array(        
    'Image' => array(            
        'className'  => 'Image',            
        // 'conditions' => array('Recipe.approved' => '1'),            
        // 'order'      => 'Recipe.created DESC'       
            )   
        );
	
	public function FindWithImagesById($albumId)
	{
	   $albums = $this->findAll(array('AlbumId'=>$albumId));
	   $album = $albums[0];
	   $allImages = $this->Image->findAll();
	   $images=array();
	   foreach($album['KeyList'] as $key){
	       $images[]=$allImages[$key];
	   }
	   $album['Images']=$images;
	   return $album;
	}         

}
?>