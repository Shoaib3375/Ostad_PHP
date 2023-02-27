<?php
class Student
{
    private $name;
    private $age;
    private $class;

    function __construct($name = '', $age = '', $class = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }
    public function __get( $prop)
    {
        return $this->$prop;
    }
    public function __set(string $prop, $value): void
    {
        $this->$prop = $value;
    }

//    function getName()
//    {
//        return $this->name;
//    }
//
//    function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    function getAge()
//    {
//        return $this->age;
//    }
//
//    function setAge($age)
//    {
//        $this->age = $age;
//    }
//
//    function getClass()
//    {
//        return $this->class;
//    }
//    function setClass($class)
//    {
//        $this->$class;
//    }
}
//$r = new Student('Shoaib','21',10);

$r = new Student();
$r->name = 'shaoib';
echo $r->name;
