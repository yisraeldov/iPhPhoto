<?PHP
class AlbumsController extends AppController {
     // public $components = array();
     var $helpers = array('Html','Ajax','Javascript');
     var $components = array( 'RequestHandler' );
    function index() {
        $result = $this->Album->findAll();
        $conditions= array('Album Type' => 'Regular');
        $result = $this->Album->findAll($conditions);
        $this->set('result', $result);
    }
    function view($albumId) {
        // $album = $this->Album->findAll(array('AlbumId'=>$albumId));
        $album = $this->Album->findWithImagesById($albumId);
        $this->set('album',$album);
    }
}

?>