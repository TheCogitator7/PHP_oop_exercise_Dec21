//access modifier
<?php 
class MyFileObject{
    private $filename;
    function __construct($name){
        $this->filename=$name;
        if(file_exists($this->filename)){
            die('There is no file'.$this->filename);
        }
    }
    public function isFile(){
        return is_file($this->filename);
    }
}
$file=new MyFileObject('data.txt');
//$file->filename='date.txt';//error
var_dump($file->isFile());//bool(true)
?>