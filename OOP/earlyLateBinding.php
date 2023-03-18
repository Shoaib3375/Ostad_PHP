<?php
class Planet{
    static function echoName():void{
        echo static::getName(); //  use static late binding -> print "Earth" . or use self Early binding.
    }
    static function getName():string{
        return "Planet";
    }
}

class Earth extends Planet{
    static function getName():string
    {
        return "Earth";
    }
}
//Planet::echoName();
Earth::echoName();