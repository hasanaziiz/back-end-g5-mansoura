<?php

// https://www3.ntu.edu.sg/home/ehchua/programming/java/j3f_oopexercises.html#zz-4.2
class Person
{
    public string $name;
    private string $address;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getAddress(): string
    {
        return $this->address;
    }

    function setAddress(string $address)
    {
        $this->address = $address;
    }

    public function toString(): string
    {
        return "name: $this->name, address: $this->address";
    }
}


class Student extends Person
{

    private string $program;
    private int $year;
    private float $fee;

    function __construct(string $name, string $address)
    {
        parent::__construct($name, $address);
    }

    function getProgram(): string
    {
        return $this->program;
    }

    function setProgram(string $program)
    {
        $this->program = $program;
    }

    function getYear(): int
    {
        return $this->year;
    }

    function setYear(int $year)
    {
        $this->year = $year;
    }

    function getFee(): float
    {
        return $this->fee;
    }

    function setFee(float $fee)
    {
        $this->fee = $fee;
    }

    public function toString(): string
    {
        return parent::toString() . ", program: $this->program, year: $this->year, fee: $this->fee";
    }
}


class Staff extends Person
{
    private string $school;
    private float $pay;

    function __construct(string $name, string $address)
    {
        parent::__construct($name, $address);
    }

    function getSchool(): string
    {
        return $this->school;
    }

    function setSchool(string $school)
    {
        $this->school = $school;
    }

    function getPay(): float
    {
        return $this->pay;
    }

    function setPay(float $pay)
    {
        $this->pay = $pay;
    }

    public function toString(): string
    {
        return parent::toString() . ", school: $this->school, pay: $this->pay";
    }
}



$person = new Person("Ali", "Cairo");
echo $person->toString() . "<br>";

$student = new Student("Ali", "Cairo");
$student->setProgram("PHP");
$student->setYear(2021);
$student->setFee(1000.0);
echo $student->toString() . "<br>";

$staff = new Staff("Ali", "Cairo");
$staff->setSchool("PHP");
$staff->setPay(1000.0);
echo $staff->toString() . "<br>";



// https://www3.ntu.edu.sg/home/ehchua/programming/java/j3f_oopexercises.html#zz-6.1
class Circle
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getCircumference()
    {
        return 2 * pi() * $this->radius;
    }

    public function __toString()
    {
        return "Circle[radius={$this->radius}]";
    }
}

$circle = new Circle(5);
echo $circle->getRadius() . "<br>";
echo $circle->getArea() . "<br>";
echo $circle->getCircumference() . "<br>";
echo $circle . "<br>";

$circle->setRadius(10);
echo $circle->getRadius() . "<br>";
echo $circle->getArea() . "<br>";
echo $circle->getCircumference() . "<br>";
echo $circle . "<br>";
