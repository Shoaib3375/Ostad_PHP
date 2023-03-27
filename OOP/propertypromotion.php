<?php
class Rectangle{
//    public $height;
//    public $weight;
    public function __construct( public $height,public $weight) // property promotion allow from php-8
    {
//        $this->weight = $weight;
//        $this->height = $height;
    }
    function getArea(){
        return $this->height * $this->width;
    }
}
$r = new Rectangle(4,2);
echo $r->getArea();