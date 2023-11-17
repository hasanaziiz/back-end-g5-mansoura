<?php

# question 1 :What is The Output 
// 16
// null and will raise error not defined variable $arr
// true

# question 2 : write php code to solve this problems
// 1- Write a PHP program to print fibonacci series.
function fibonacciSeries($terms)
{
    $fibonacci = [];

    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $terms; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    foreach ($fibonacci as $number) {
        echo $number . " ";
    }
}

// 2- . How do you check if a year is leap or not? 
function isLeapYear($year)
{
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo "Leap Year";
            } else {
                echo "Not Leap Year";
            }
        } else {
            echo "Leap Year";
        }
    } else {
        echo "Not Leap Year";
    }
}

//3- Write a PHP script to generate unique random numbers within a range 
function generateRandomString($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}
//4- Write a PHP program to print out the multiplication table upto 5*5 
function multiplicationTable($number = 5)
{
    for ($i = 1; $i <= 5; $i++) {
        echo $number . " * " . $i . " = " . $number * $i . "<br>";
    }
}
//5- Write a PHP program to remove duplicates from a sorted list 
function removeDuplicates($array)
{
    $result = [];

    foreach ($array as $value) {
        if (!in_array($value, $result)) {
            $result[] = $value;
        }
    }

    return $result;
}
// 6 -
class Animal
{

    public string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    function __toString(): string
    {
        return "Animal: Animal[name=$this->name]";
    }
}

class Mammal extends Animal
{


    function __construct(string $name)
    {
        parent::__construct($name);
    }

    function __toString(): string
    {
        return "Mammal: Mammal[name=$this->name]";
    }
}

class Cat extends Mammal
{

    function __construct(string $name)
    {
        parent::__construct($name);
    }

    function greet(): string
    {
        return "Meow";
    }

    function __toString(): string
    {
        return "Cat: Cat[name=$this->name]";
    }
}

class Dog extends Animal
{

    function __construct(string $name)
    {
        parent::__construct($name);
    }

    function greet(): string
    {
        return "Woof";
    }

    function __toString(): string
    {
        return "Dog: Dog[name=$this->name]";
    }
}



# Question 3 : True Or False  
// 1- true
// 2- false
// 3- true
// 4- true
// 5- true