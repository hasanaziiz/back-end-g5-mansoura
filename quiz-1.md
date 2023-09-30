# Question 1
 1- What is an Loop in js :
 - loop is a way to repeat a block of code until a condition is met

2- How do you add an element at the beginning of an array? How do you add one at the end? Hint[ 2 ways ]

2.1 at the begining
```javascript
array = [1, 2, 3];
array.unshift(0); 
console.log(array); // [0,1,2,3]
```
```javascript
array = [1, 2, 3];
array = [0, ...array]; 
console.log(array); // [0,1, 2, 3]
```

2.2 at the end
```javascript
array = [1, 2, 3];
array.push(4); 
console.log(array); // [1,2,3,4]
```
```javascript
array = [1, 2, 3];
array = [...array, 4]; 
console.log(array); // [1,2,3,4]
```
```javascript
array = [1, 2, 3];
array = array.concat(4); 
console.log(array); // [1,2,3,4]
```
#
# Question 2
1- What is the value of Output? 
```javascript
var b = 1;

function outer() {
    var b = 2;

    function inner() {
        b++;
        var b = 3;
        console.log(b);
    }

    inner();
}
```

- answer : 3
#

```javascript
for (let i = 0; i < 5; i++) {
    setTimeout(function () {
        console.log(i);
    }, i*1000);
}
```

- answer : 0 1 2 3 4 
#
```javascript
let arr = ['foo', 'bar'];
arr.length = 0;
arr.push('baz');
console.log(arr); 
```

- answer : ['baz']
#
```javascript
function func() {
    for (let key in arguments) {
        console.log(arguments[key]);
    }
}

func(1,"hello",true);

```

- answer : 1 "hello" true
#
```javascript
let car = {
    brand: 'BMW',
    carPrice: 100000
}

console.log(car instanceof Object);
console.log(Object.entries(car));

```

- answer : [['brand', 'BMW'], ['carPrice', 100000]]

# Question 3

1-  Create Function sumObjectValues() that will sum all values of 
the fields that contain numbers . ensure that iteration is 
done only over own property of the object
```javascript
function sumObjectValues(obj) {
    let sum = 0;
    for (let key in obj) {
        if (typeof obj[key] === 'number') {
            sum += obj[key];
        }
    }
    return sum;
}
```
2-  Show the execution of 3 asynchronous block of code, one after 
the other in sequence

3- Get the maximum value from a numbers array along with its index
```javascript
function getMax(arr) {
    let max = arr[0];
    let index = 0;
    for (let i = 1; i < arr.length; i++) {
        if (arr[i] > max) {
            max = arr[i];
            index = i;
        }
    }
    return {'max':max,'index': index};
}
```
4- Write a function which accepts two valid dates and returns the 
difference between them as number of days
```javascript
function getDaysDiff(date1, date2) {
    return Math.abs(date1.getTime() - date2.getTime()) / (1000 * 3600 * 24);
}
```
5- Design a Calculator interface for 2 number inputs which can 
perform sum, difference, product and dividend whenever invoked 
on the same interface

6-  Write a function which can return multiple values from a function
```javascript
function getMultipleValues() {
    return {
        'name': 'ahmed',
        'age': 20
    }
}
```

7- Write a function to reverse an array. For Example : 
reverse([1, 2, 3, 4]) ➞ [4, 3, 2, 1]
```javascript
// 1
function reverse(arr) {
    let newArr = [];
    for (let i = arr.length - 1; i >= 0; i--) {
        newArr.push(arr[i]);
    }
    return newArr;
}

// 2
function reverseArray(arr) {
  return arr.reverse();
}
```

8- - Write a function that converts an object into an array, where each 
element represents a key-value pair in the form of an array. 
For Example : 
 ({ a: 1, b: 2 }) ➞ [["a", 1], ["b", 2]] 
```javascript
function objToArray(obj) {
    let arr = [];
    for (let key in obj) {
        arr.push([key, obj[key]]);
    }
    return arr;
}
```
