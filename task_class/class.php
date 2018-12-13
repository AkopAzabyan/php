<?php

class Robot
{

    var $name;
    function setName($name) {
        $this->name = $name;
    }
    function getName() {
        echo $this->name;
    }
}
$elis= new Robot();
$elis->setName("Elisey");
$elis->getName();
$copy=clone $elis;
$copy->setName("Akop");
$copy->getName();