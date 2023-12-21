//inheritance
<?php 
$file=new SplFileObject('data.txt');

class MyFileObject extends SplFileObject{
    public function isFile(){
        $result=$this->fread($this->getSize());
        $this->rewind();
        return $result;
    }
}
$file=new MyFileObject('data.txt');
var_dump($file->isFile());
var_dump($file->isFile());
?>