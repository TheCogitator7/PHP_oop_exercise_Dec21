//access modifier
<?php 
class Person{
    private $name;
    public function setName($_name){
        $this->ifEmptyDie($_name);
        $this->name=$_name;
    }
    public funciton getName(){
        return $this->name;
    }
    public function sayHi(){
        echo "Hi, I'm {$this->name}<br>";
    }
    private function ifEmptyDie($__name){
        if(empty($__name)){
            die('Need a name');
        }
    }
}
$young=new Person();
$young->setName('Young');
$young->sayHi();
print($young->getName());
?>