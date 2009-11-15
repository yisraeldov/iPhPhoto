<?php
class Image extends AppModel {

	var $name = 'Image';
    var $useDbConfig = 'plist';
    
    public function FindById($id)
    {
        if (($images = Cache::read('allImages')) === false) {
            $images = $this->findAll();
            Cache::write('allImages', $images);
        }
        // $images = $this->FindAll();
        return $images[$id];
    }
}
?>