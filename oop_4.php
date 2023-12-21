//object variable
<?php 
class MyFileObject{
    public function isFile(){
        return is_file($this->filename);
    }
}
$file=new MyFileObject();
$file->filename='data.txt';
var_dump($file->isFile());//bool(true)
?>