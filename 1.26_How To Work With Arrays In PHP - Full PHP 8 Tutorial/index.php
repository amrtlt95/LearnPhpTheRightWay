<?php
// Perfect 👏 — you just finished **the "Array Functions"** lesson from *Learn PHP the Right Way* (Program With Gio).
// Here’s **one full, meaningful challenge** for you — only the problem + a few *tiny hints*, as you requested.

// ---

// ## 🧠 Challenge: “Array Function Toolkit”

// ### 🎯 Your Mission

// Create a PHP script that processes an array of **products** and performs several array operations step by step.

// ```php
// $products = [
//   ['name' => 'Laptop', 'price' => 1000, 'quantity' => 2],
//   ['name' => 'Mouse', 'price' => 25, 'quantity' => 5],
//   ['name' => 'Keyboard', 'price' => 75, 'quantity' => 0],
//   ['name' => 'Monitor', 'price' => 200, 'quantity' => 3],
// ];
// ```

// ---
$products = [
  ['name' => 'Laptop', 'price' => 1000, 'quantity' => 2],
  ['name' => 'Mouse', 'price' => 25, 'quantity' => 5],
  ['name' => 'Keyboard', 'price' => 75, 'quantity' => 0],
  ['name' => 'Monitor', 'price' => 200, 'quantity' => 3],
];



// ### 🧩 Tasks

// 1. **Filter** out all products where quantity is `0`.
$out_of_stock = array_filter($products,fn($product)=>$product['quantity']===0);
print_r($out_of_stock);
echo PHP_EOL .     str_repeat("-",60)       .      PHP_EOL;

// 2. **Map** the remaining products to calculate a new field called `"total"` = `price * quantity`.
$in_stock = array_filter($products,fn($product)=>$product['quantity']>0);
$in_stock_with_total = array_map(
    function ($product){
         $product['total'] = $product['quantity'] * $product['price'];
         return $product;
    },
    $in_stock);

print_r($in_stock_with_total);
echo PHP_EOL .     str_repeat("-",60)       .      PHP_EOL;



// 3. **Extract** only product names into a new array.
$products_names = array_column($products,'name');
print_r($products_names);
echo PHP_EOL .     str_repeat("-",60)       .      PHP_EOL;

// 4. **Merge** the names array with another array of `['Headphones', 'USB Cable']`.
$new_products_names = ['Headphones', 'USB Cable'];
$prodncts_names_after_edit = array_merge($products_names,$new_products_names);
print_r($prodncts_names_after_edit);
echo PHP_EOL .     str_repeat("-",60)       .      PHP_EOL;

// 5. **Sort** the merged array alphabetically.
sort($prodncts_names_after_edit);
print_r($prodncts_names_after_edit);
echo PHP_EOL .     str_repeat("-",60)       .      PHP_EOL;
// 6. **Use `array_reduce()`** to calculate the grand total (sum of all totals).
$all_totals = array_reduce($in_stock_with_total,fn($sum,$product)=>$sum+$product['total'],0);
echo $all_totals;
echo PHP_EOL .     str_repeat("-",60)       .      PHP_EOL;

// 7. **Print** all results clearly with labels (e.g. “Filtered Products:”, “Total Sum:”, etc.)

// ---

// ### 💡 Tiny Hints

// * `array_filter()` → remove unwanted elements
// * `array_map()` → transform each element
// * `array_column()` → extract one field from a multidimensional array
// * `array_merge()` → combine arrays
// * `sort()` or `asort()` → reorder arrays
// * `array_reduce()` → accumulate values into a single result

// ---

// Would you like me to give you **a harder version** of this next — focusing on `array_diff`, `array_combine`, and `usort` (with a custom sort function)?

?>