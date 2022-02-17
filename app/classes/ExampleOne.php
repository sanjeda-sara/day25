<?php


namespace App\classes;


abstract class ExampleOne
{
    public $hello       = "Arif";
    protected $helloOne = "Jennifer";
    private  $helloTwo  = "Shanto";

    public function helloFour()
    {
        echo 'hello four';
    }

    abstract function helloFive();
}
