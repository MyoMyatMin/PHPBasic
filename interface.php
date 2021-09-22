<?php 
interface Animal{
    public function move();
}
class Dog implements Animal{
    public function move()
    {
        echo "Run";
    }
    
}
class Fish implements Animal{
    public function move()
    {
        echo "Swim";
    }
}
function app(Animal $obj)
{
    $obj->move();
}
app(new Fish);