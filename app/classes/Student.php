<?php


namespace App\classes;

use App\classes\User;
use App\classes\InterfaceClass;
use App\classes\Example;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;

//class Student extends User implements InterfaceClass
class Student extends ExampleOne implements InterfaceClass
{
    use ExampleTwo;

    protected $country = 'Bangladesh';

    public function __construct()
    {
        $this->name = "Basis";
        $this->city = "Savar";
    }

    public function manage()
    {
//        echo $this->country;
//        echo $this->name;
//        echo $this->city;
//        echo $this->index();
//        echo "Institute name is $this->name & city is $this->city";
        //this is polymorphism;


        //echo $this->hello;
        //echo $this->helloOne;
        //echo $this->helloTwo;

//        trait!!!!!!!!!!!!
        echo $this->cr;
    }

    public function one()
    {
        echo 'hell o world';
    }
    public function two()
    {
        echo 'hell o world 2';
    }
    public function three()
    {
        echo 'hell o world 3';
    }
    public function helloFive()
    {
        echo 'hello five 5';
    }
}