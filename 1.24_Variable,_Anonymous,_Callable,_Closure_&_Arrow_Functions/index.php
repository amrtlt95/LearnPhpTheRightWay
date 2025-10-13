<?php


/*
Perfect 👌 — we’ll skip *Web Applications for Everybody* for now and base your **PHP challenges** entirely on the concepts from this *“Learn PHP the Right Way”* lecture (variable functions, anonymous functions, closures, callables, and arrow functions).

Here’s how we’ll do it:
Each challenge will make you *think and code*, but I won’t give the answer — only hints if you ask.

---

### 🧩 Challenge Set 1: Variable Functions

1. **Dynamic Math Operations**

   * Create 3 separate functions: `add`, `subtract`, `multiply`.
   * Store the name of one of them in a variable like `$operation = 'add';`
   * Call the correct function dynamically using variable functions (without using `if` or `switch`).
   * Add a safety check with `is_callable`.

---

### 🧩 Challenge Set 2: Anonymous Functions

2. **Anonymous Calculator**

   * Create an anonymous function assigned to `$calculator` that takes two numbers and an operator (`+`, `-`, `*`, `/`).
   * Return the correct result depending on the operator.
   * Use this function several times with different operations.

3. **Anonymous Filtering**

   * You have an array of numbers.
     Example: `$nums = [1, 5, 8, 10, 3, 7];`
   * Use `array_filter()` with an **anonymous function** to return only numbers greater than 5.

---

### 🧩 Challenge Set 3: Closures & `use`

4. **Closure with Captured Variable**

   * Create a variable `$factor = 3;`
   * Define a closure that multiplies any input number by `$factor` using `use ($factor)`.
   * Call it for several values.
   * Then modify `$factor` **after defining** the closure and check if it affects the output.

5. **Closure with Reference**

   * Modify the previous example but use `use (&$factor)` instead.
   * Observe how the closure’s behavior changes when `$factor` is changed after defining the function.

---

### 🧩 Challenge Set 4: Callables

6. **Custom Array Map**

   * Create a function `applyToArray(array $arr, callable $callback): array`
     that applies `$callback` to every element of `$arr` and returns a new array.
   * Test it with:

     * An anonymous function
     * A regular function name string
     * An arrow function

7. **Safe Function Executor**

   * Write a function `runIfCallable($fn, ...$args)` that:

     * Checks if `$fn` is callable.
     * If yes, executes it with the arguments.
     * Otherwise, prints “Function not callable.”

---

### 🧩 Challenge Set 5: Arrow Functions

8. **Compact Mapping**

   * Rewrite your earlier `array_map` examples (like doubling numbers) using arrow functions.
   * Then compare the readability and brevity between the anonymous and arrow versions.

9. **Parent Scope Access**

   * Create a variable `$multiplier = 2;`
   * Use an arrow function inside `array_map` that multiplies each element by `$multiplier` (no `use` keyword).
   * Print the results and then change `$multiplier` to see if the arrow function reflects the change.

---

Would you like me to order them by **difficulty (easy → advanced)** or **by topic (functions → closures → arrow)** in your next set?


*/



/*
### 🧩 Challenge Set 1: Variable Functions

1. **Dynamic Math Operations**

   * Create 3 separate functions: `add`, `subtract`, `multiply`.
   * Store the name of one of them in a variable like `$operation = 'add';`
   * Call the correct function dynamically using variable functions (without using `if` or `switch`).
   * Add a safety check with `is_callable`.

*/
// function add($x , $y){
//    return $x + $y;
// }

// function subtract($x , $y){
//    return $x - $y;
// }

// function multiply($x , $y){
//    return $x * $y;
// }

// $operation = 12;


// if(is_callable($operation)){


//    echo $operation(1,2);
// }else{
//    echo 'not callable';
// }



/*

### 🧩 Challenge Set 2: Anonymous Functions

2. **Anonymous Calculator**

   * Create an anonymous function assigned to `$calculator` that takes two numbers and an operator (`+`, `-`, `*`, `/`).
   * Return the correct result depending on the operator.
   * Use this function several times with different operations.

*/

// $calculator = function($operator , $x , $y){
//    if($operator === '*'){

     
//          return $x * $y;
      
//    }elseif($operator === '+'){
      
   
//          return $x + $y;
    
//    }elseif($operator === '-'){
      
     
//          return $x - $y;
     
//    }elseif($operator === '/'){
      
     
//          return $x / $y;
     
//    }
// };


// if(is_callable($calculator)){
//    echo $calculator('-',5,5);
// }



/* 
3. **Anonymous Filtering**

   * You have an array of numbers.
     Example: `$nums = [1, 5, 8, 10, 3, 7];`
   * Use `array_filter()` with an **anonymous function** to return only numbers greater than 5.
*/

// $nums = [1, 5, 8, 10, 3, 7];
// $greater = array_filter($nums,
//                         function($number){
//                            return $number > 5;
//                         }
//                      );
// print_r($greater);



/*

### 🧩 Challenge Set 3: Closures & `use`

4. **Closure with Captured Variable**

   * Create a variable `$factor = 3;`
   * Define a closure that multiplies any input number by `$factor` using `use ($factor)`.
   * Call it for several values.
   * Then modify `$factor` **after defining** the closure and check if it affects the output.

5. **Closure with Reference**

   * Modify the previous example but use `use (&$factor)` instead.
   * Observe how the closure’s behavior changes when `$factor` is changed after defining the function.
   * */
// $factor = 3;
// $multiplying = function($number) use($factor){
//    return $number*$factor;
// };

// $factor=50;

// $array = [1,2,3,4,5];

// $by3 = array_map($multiplying,$array);

// print_r($by3);



/*

5. **Closure with Reference**

   * Modify the previous example but use `use (&$factor)` instead.
   * Observe how the closure’s behavior changes when `$factor` is changed after defining the function.
   * */

// $factor = 3;
// $multiplying = function($number) use(&$factor){
//    return $number*$factor;
// };

// $factor=50;

// $array = [1,2,3,4,5];

// $by3 = array_map($multiplying,$array);

// print_r($by3);




/*


### 🧩 Challenge Set 4: Callables

6. **Custom Array Map**

   * Create a function `applyToArray(array $arr, callable $callback): array`
     that applies `$callback` to every element of `$arr` and returns a new array.
   * Test it with:

     * An anonymous function
     * A regular function name string
     * An arrow function



---

*/



// function applyToArray(array $arr, callable $callback): array{
//    foreach($arr as $element){
//       $result[] = $callback($element);
//    }

//    return $result;
// }

// $arr = [1,2,3,4];

// function by2($number){
//    return $number*2;
// }

// print_r(applyToArray($arr,'by2'));



// print_r(applyToArray($arr,
//                      function($number){
//                         return $number*2;
//                      })
//                   );


//  print_r(applyToArray($arr,fn($number)=>$number*2));






/*
7. **Safe Function Executor**

   * Write a function `runIfCallable($fn, ...$args)` that:

     * Checks if `$fn` is callable.
     * If yes, executes it with the arguments.
     * Otherwise, prints “Function not callable.”
     * 
     * */
     
   // function runIfCallable($fn , ...$args){
   //    if(is_callable($fn)){
   //       return array_map($fn,...$args);
   //    }else{
   //       echo "Function not callable.";
   //    }
   // }

   // print_r (runIfCallable(fn($number)=>$number*2,[1,2,3,4,5]));


/*

### 🧩 Challenge Set 5: Arrow Functions

8. **Compact Mapping**

   * Rewrite your earlier `array_map` examples (like doubling numbers) using arrow functions.
   * Then compare the readability and brevity between the anonymous and arrow versions.

9. **Parent Scope Access**

   * Create a variable `$multiplier = 2;`
   * Use an arrow function inside `array_map` that multiplies each element by `$multiplier` (no `use` keyword).
   * Print the results and then change `$multiplier` to see if the arrow function reflects the change.

---

Would you like me to order them by **difficulty (easy → advanced)** or **by topic (functions → closures → arrow)** in your next set?

*/

// $multiplier = 3;
// $arr = [1,2,3,4,5];
// $result = array_map(fn($number) => $number*$multiplier,$arr);

// print_r($result);


?>