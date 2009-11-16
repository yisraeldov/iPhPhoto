<?php
class ImageController extends AppController {

	var $name = 'Image';
	var $helpers = array('Cache');
	var $cacheAction = "1 hour";

    function index() {
        $result = $this->Image->findAll();
        // $conditions= array('Album Type' => 'Regular');
        // $result = $this->Image->findAll($conditions);
        $this->set('result', $result);
    }
    function thumb($imageId) {
        $this->view = 'Media';
        
        $image= $this->Image->findById($imageId);
        $path = $this->translatePath($image['ThumbPath']);
        $params = array(
            'id' => basename($path),
            // 'name' => 'example',
        // 'download' => true,
        'extension' => 'jpg',
            'path' => dirname($path) . DS,
            'cache' => 30, // browser side caching ... 
            );
        // trigger_error(print_r($params,1) );
        $this->set($params);
    }
    
    /*
        TODO make this also translate path
    */
    function view($imageId) {
        $this->view = 'Media';
        $images = ($this->Image->findAll());
        $image= $images[$imageId];
        $pathInfo = pathinfo($image['ImagePath']);
        $path = $this->translatePath($image['ImagePath']);
        $params = array(
            'id' => basename($path),
            // 'name' => 'example',
        // 'download' => true,
        'extension' => strtolower( $pathInfo['extension']),
            'path' => dirname($path) . DS,
            'cache' => 30, // browser side caching ... 
        );
        if(!is_readable($path)){
            $this->cakeError('error404');
        }
        $this->log(print_r($params,1));
        $this->set($params);
    }
    
    private function translatePath($path)
    {
	if (($library = Cache::read('libraryRoot')) === false) {
	    $this->loadModel('Library');
	    $library =  $this->Library->findAll();	
	    Cache::write('libraryRoot', $library);
	}


        $archivePath = $library['Archive Path'];
        $filePath = dirname($library['File Path']);
        $newPath = str_replace($archivePath, $filePath, $path);
        if(Configure::read() > 1){
            $this->log("PATH TRANSLATE '$path' to '$newPath'",LOG_DEBUG);
        }
        return $newPath;
    }
}
?>
