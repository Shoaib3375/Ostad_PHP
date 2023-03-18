<?php
class MotorCycle{
//    private $displacement, $capacity, $mileage;
private $parameters;
    public function __construct($displacement,$capacity, $mileage)
    {
        $this->parameters = [];
        $this->parameters['mileage'] = $mileage;
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
//        $this->mileage = $mileage;
//        $this->displacement = $displacement;
//        $this->capacity = $capacity;
    }
//    function getDisplacement(){
//        return $this->parameters['displacement'];
//    }
//    function setDisplacement($displacement){
//        $this->parameters['displacement'] = $displacement;
//    }

//    public function getCapacity()
//    {
//        return $this->capacity;
//    }
//    public function setCapacity($capacity){
//        $this->capacity = $capacity;
//    }
    public function __isset(string $name)
    {
        if (!isset($this->parameters[$name])){
            echo "$name not found\n";
            return false;
        }
        return true;
    }

    public function __unset(string $name)
    {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);

    }

    public function __get( $name)
    {
        echo $this->parameters[$name];
    }
    public function __set(string $name, $value): void
    {
        echo $this->parameters[$name] = $value;
    }
}

$pulsar = new MotorCycle('150cc','12ltr','45km');
//echo $pulsar->getDisplacement().PHP_EOL;
//$pulsar->displacement = "135cc\n";
if (isset($pulsar->tiresize)){
    echo "FOund\n";
}else{
    echo "Not Found\n";
}

unset($pulsar->mileage);