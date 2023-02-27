<?php
class DistrictCollection implements IteratorAggregate,Countable {
    private $districts;
    public function __construct()
    {
        $this->districts = array();
    }
    function add($district){
        array_push($this->districts,$district);
    }
    function getDistricts(){
        return $this->districts;
    }
    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
    function count(): int
    {
        return count($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Sylhet");
$districts->add("Dhaka");
$districts->add("Chittagong");
//$_districts = $districts->getDistricts();

//foreach ($_districts as $_district){
//    echo $_district."\n";
//}
foreach ($districts as $district){
    echo $district."\n";
}
echo count($districts);