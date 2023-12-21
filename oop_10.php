//static
<?php 
class Person{
    private $name;
    private static $count=0;

    function __construct($_name){
        $this->name=$_name;
    }
    public function enter(){
        self::$count++;
        echo "Enter {$this->name}.";
    }
    public function getCount(){
        echo "There are ".self::$count." people in room";
    }
}
$lee=new Person('Lee');
$lee->enter();

$park=new Person('Park');
$park->enter();

$kim=new Person('Kim');
$kim->enter();

$go=new Person('Go');
$go->enter();

Person::getCount();
?>