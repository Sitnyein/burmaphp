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
   hello: () => `Hello, I'm ${this.name}`,
}
$tea = user.hello();
console.log($tea);

//construct parent want to use
class Animal {
   constructor(name) {
      this.name = name
   }
   run() {
      console.log(`${this.name} is running...`)
   }
}

class Cat extends Animal {
   constructor(name, color) {
      super(name)
      this.color = color
   }
   meow() {
      console.log(`${this.name}: Meow.. meow..`)
   }
}

let cat = new Cat("Shwe War", "Yellow")
cat.meow()

//   JavaScript ဟာ Single-Threaded ပုံစံအလုပ်လုပ်တဲ့ နည်းပညာဖြစ်ပါတယ
//Event Loop
console.log(1)
console.log(2)
setTimeout(() => console.log(3), 1000)
console.log(4)

//promise
console.log("this is promise start")
function add1000() {
   let result = 0
   for (let i = 1; i <= 1000; i++) {
      result += i
   }
   return result
}

function add1000later() {
   return new Promise(done => {
      done(add1000())
   })
}
let ab = add1000later();
console.log(ab);
console.log("hello world promise")

//.then
console.log("some processes")
add1000later().then(result => console.log(result))
console.log("more processes")

/*function add1000later() {
return new Promise( (resolve, reject) => {
let result = add1000()
if(result) resolve(result)
else reject()
})
}

add1000later()
 .then( result => console.log(result) )
 .catch( () => console.log("Error") )



*/

// add1000later()
//  .then( result => result + 1000)
//  .then( result => console.log(result) )
//  .catch( () => console.log("Error") )


/**/ /**/ /**/ /**/ /**/ /**/  /**/ /**/ /**/  /**/ /**/ /**/ 
/*
async function add1000later() {
let result = await add1000()
console.log(result)
}
undefined
console.log("some processes")
add1000later()
console.log("more processes")
VM59:1 some processes
VM59:3 more processes
VM55:3 500500
*/

/*
fetch("https://api.covid19api.com/summary")
 .then(res => res.json())
 .then(data => {
 const global = data.Global
 const allCountries = data.Countries
 const myanmar = allCountries.find(c => c.Country === "Myanmar")
 console.log("Global:", global, "Myanmar:", myanmar)
 })*/

 const person = {
   firstName: "John",
   lastName : "Doe",
   id       : 5566,
   fullName : function() {
     return this.firstName + " " + this.lastName;
   }
 };

 const obj1 = {
   a : "aaa"
 }
 const obj2 = {
    b: "ccc"
 }
const obj3 = {
   ...obj1,
   ...obj2
}
 console.log({...obj2,b : "sss"} );