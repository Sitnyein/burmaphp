// Original Function
/*
function twice(num, fun) {
 let result = fun(num)
 return result * 2 }

let test = function twice(num, fun) {
 let result = fun(num)
 return result * 2
}
console.log(test);
*/
// Arrow Function
let twice = (n, f) => f(n) * 2;
let result = twice(5, x => x + 1);
console.log(result);

let hello = _ => "Hello, World"
console.log(hello());

/*function hoisting && this code is work
add(1, 2) // 3
function add(a, b) {
   return a + b
}
*/


/*add(1, 2) // Error: add is not defined
let add = function(a, b) {
 return a + b
}*/

let name = "Alice"
function welcome() {
   console.log(`Welcome ${name}`)
}
function hellos() {
   console.log(`Hello ${name}`)
}
welcome() // Welcome Alice
hellos() // Hello Alic


let fruits = ["Apple", "Orange", "Mango", "Banana"]
fruits.indexOf("Mango") // 2
// fruits.splice(2, 2) 
console.log(fruits.join(","));

let nums = [1, 2, 3, 4, 5]
//  nums = nums.map((n) => n+1);
//  nums= nums.filter((n) => !(n % 2) )
//console.log(nums)

let num2 = nums.map(n => n + 1).filter(n => !(n % 2))
// result → [3, 5, 7]

console.log(num2);

/* let nums = [2, 3, 4, 5, 6]
let result = nums.reduce(function(a, n) {
 return a + n
})*/
/*let result = [2, 3, 4, 5, 6].reduce((a, n) => a+ n)*/
function reduce() {
   let num = [5, 5, 5, 5, 5];
   let answer = num.reduce((a, b) => a + b)
   console.log(answer);
}
reduce();
function spread() {
   let nums = [1, 2, 3]
   // let alphas = ['a', 'b', 'c']
   // let result = [...nums, ...alphas]
   // result = [0,...result,8]

   let result = (a, b, c) => a + b + c
   console.log(result(...nums));

   let nams = [123, 456]
   let [a, b] = nams;
   console.log(a);
   /*let num = 3.14159
num.toFixed(3) // 3.142*/

}
spread();

/* 
String.prototype.greet = function () {
   return "Hello, World i am chankhine"
}
let a = "chankhine";
a.greet();*/

let user = {
   name: "Bob",
   hello: function() {
   return `Hello, I'm ${this.name}`
   } }
 $tea =  user.hello();
 console.log($tea);

