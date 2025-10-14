<?php

/*

Got it ✅ — here’s **the single challenge** and **tiny hints only**, no explanations or answers:

---

### 🧩 **Challenge: Global Counter & Static Cache**

Create a small PHP script that:

1. Counts how many times a function `handleRequest()` has been called (across the whole script).
2. Uses another function `getUserData()` that simulates fetching data (slowly) and **caches** it so that future calls are instant.
3. At the end, prints how many requests were handled.
*/
     $counter =0;

function handleRequest(){
    global $counter;
    

        return ++$counter;
   
}


function getUserData(){
    static $user_data = null;
    if(is_null($user_data)){
        sleep(2);
        $user_data = 'abc';
    }
    return $user_data;
}



echo handleRequest();
echo PHP_EOL;
echo handleRequest();
echo PHP_EOL;
echo handleRequest();
echo PHP_EOL;
echo handleRequest();
echo PHP_EOL;
echo handleRequest();
echo PHP_EOL;
echo handleRequest();
echo PHP_EOL;
echo handleRequest();
echo PHP_EOL;

echo getUserData();
echo PHP_EOL;
echo getUserData();
echo PHP_EOL;
echo getUserData();
echo PHP_EOL;
echo getUserData();
echo PHP_EOL;
echo getUserData();
echo PHP_EOL;
echo getUserData();
echo PHP_EOL;
/*
---

💡 **Tiny Hints:**

* Use `$GLOBALS` for counting.
* Use `static` inside the cache function.
* Simulate delay with `sleep(2)`.
* Cache only once — reuse later.
* Call both functions a few times.

---

Would you like the next challenge to be based on **superglobals** (like `$_POST`, `$_GET`) or stay within **scope/static** concepts?


?*

*/
?>