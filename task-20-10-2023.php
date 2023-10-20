<?php
// 1==================================
$num = 7;

if ($num % 2 == 0) {
    echo "$num is even";
} else {
    echo "$num is odd";
}
echo "<br>";
// 2==================================

// 3==================================
$string = "welcome";
$reversedString = strrev($string);
echo $reversedString;
echo "<br>";

// 4 ==================================
$radius = 5;
$area = pi() * $radius * $radius;
$circumference = 2 * pi() * $radius;
echo "Area: " . $area . "<br>";
echo "Circumference: " . $circumference;
echo "<br>";

// 5 ==================================
$num1 = 20;
$num2 = 30;
$sum = $num1 + $num2;

// if ($sum == 50 || $num1 == 50 || $num2 == 50) {
//     return true;
// } else {
//     return false;
// }
echo "<br>";

// 6 ==================================

$n1 = 5;
$n2 = -3;

if ($n1 > 0 && $n2 > 0) {
    echo "both are positive";
} else if ($n1 < 0 && $n2 < 0) {
    echo "both are negative";
} else {
    echo "one is positive and the other is negative";
}
echo "<br>";

// 7 ==================================
$number = 40;
if ($number % 8 == 0 && $number % 5 == 0) {
    echo "$number is a multiple of 8 and 5 at the same time";
} else if ($number % 8 == 0) {
    echo "$number is a multiple of 8";
} elseif ($number % 5 == 0) {
    echo "$number is a multiple of 5";
} else {
    echo "$number is not a multiple of 5 or 8";
}
echo "<br>";

// 8 ==================================
$number1 = 10;
$number2 = 20;
$number3 = 30;

$largest = $number1;
if ($number2 > $largest) {
    $largest = $number2;
} elseif ($number3 > $largest) {
    $largest = $number3;
}
echo "Largest number is $largest";
echo "<br>";

// 9 ==================================
// function sum($n)
// {
//     if ($n == 1) {
//         return 1;
//     } else {
//         return $n + sum($n - 1);
//     }
// }

echo "<br>";

// 10 ==================================
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

// 11 ==================================
$num = 10;

if ($num > 0) {
    echo "The number is positive";
} elseif ($num < 0) {
    echo "The number is negative";
} else {
    echo "The number is zero";
}

echo "<br>";

// 12 ==================================
$arr = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
for ($i = 0; $i < count($arr); $i++) {
    echo "element - $i : $arr[$i] <br>";
}

echo "<br>";

// 13 ==================================
$num1 = 5;
$num2 = 10;
$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is: $sum";

echo "<br>";

// 14 ==================================
function factorial($num) {
    if ($num <= 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

$num = 5;
$factorial = factorial($num);

echo "The Factorial of $num is: $factorial";

echo "<br>";

// 15 ==================================
$num1 = 10;
$num2 = 5;
$operator = '+';

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $result <br>";
        break;
    case '-':
        $result = $num1 - $num2;
        echo "The difference between $num1 and $num2 is: $result <br>";
        break;
    case '*':
        $result = $num1 * $num2;
        echo "The product of $num1 and $num2 is: $result <br>";
        break;
    case '/':
        $result = $num1 / $num2;
        echo "The quotient of $num1 and $num2 is: $result <br>";
        break;
    default:
        echo "Invalid operator";
}
