<?PHP
/**
* PlistSource
*/
class PlistSource extends DataSource
{
    var $plist;
    var $plistAray;
    var $sources = array('albums' => 'List of Albums', 
        'images' => 'Master Image List',
        'Root' => NULL,
        );

    public function listSources() { 
        return array_keys($this->sources);

    }

    function __construct($config)
    {   
        $this->file = '/Users/yisraeldov/Pictures/iPhoto Library/AlbumData.xml';
        App::import('vendor','propertylist',array('file'=>'CFPropertyList-1.0.2/CFPropertyList.php'));
        $this->plist = new CFPropertyList( $this->file, CFPropertyList::FORMAT_XML );
        $this->plistArray = $this->plist->toArray() ;
        parent::__construct($config);
    }
    
    public function fullTableName($name)
    {
        if(is_scalar($name) and array_key_exists($name, $this->sources)){
            return $this->sources[$name];
        }
        else {
            return "null";
        }
    }
    
    public function read($model, $queryData = array())
    {
        if ($this->fullTableName($model->table) != NULL){
            $results = $this->plistArray[$this->fullTableName($model->table)];
        }
        else {
            $results = $this->plistArray;
        }
        $filteredResults = array();
        if (isset($queryData['conditions'])){
            foreach ($queryData['conditions'] as $field => $value) {
                foreach ($results as $result) {
                    if(array_key_exists($field, $result)){
                        if($result[$field] == $value){
                            $filteredResults[] = $result;
                        }
                    }
                }
                $results= $filteredResults;
            }
        }
        return $results;
        
    }
}


?>