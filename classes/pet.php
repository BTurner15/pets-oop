<?php
//pet.php
class Pet
{
    private $_name;
    private $_color;

    //default parameterized constructor
    function __construct($name='unknown', $color='?'){
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo "<p>" . $this->_name . " is an artichoke";
    }

    function talk()
    {
        echo "<p>" . $this->_name . " is an TALKING artichoke";
    }

    function sleep()
    {
        echo "<p>" . $this->_name . " The artichoke is SLEEPING";
    }

    function displayColor()
    {
        echo "<p>" . $this->_color . " color: ";

    }
}