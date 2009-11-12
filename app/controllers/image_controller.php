<?php
class ImageController extends AppController {

	var $name = 'Image';
    function index() {
        $result = $this->Image->findAll();
        // $conditions= array('Album Type' => 'Regular');
        // $result = $this->Image->findAll($conditions);
        $this->set('result', $result);
    }
    function thumb($imageId) {
            $this->view = 'Media';
            $images = ($this->Image->findAll());
            $image= $images[$imageId];
            
            $params = array(
                  'id' => basename($image['ThumbPath']),
                  // 'name' => 'example',
                  // 'download' => true,
                  'extension' => 'jpg',
                  'path' => dirname($image['ThumbPath']) . DS
           );
           // trigger_error(print_r($params,1) );
           $this->set($params);
        }
}
?>