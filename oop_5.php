//constructor
<?php 
class MyFileObject{
    function __construct($_name){
        $this->filename=$_name;
    }
    public function isFile(){
        return is_file($this->filename);
    }
}
$file=new MyFileObject('data.txt');
var_dump($file->isFile());//bool(true)
?>