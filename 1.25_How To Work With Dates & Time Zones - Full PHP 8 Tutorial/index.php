<?php

// 🧠 Challenge: Date & Time Mastery

// Write a PHP script that:

// Prints the current Unix timestamp.
echo time();

// Prints the timestamp 7 days from now and 3 days ago.
echo PHP_EOL;
echo time() + 7 * 24 * 60*60;
echo PHP_EOL;
echo time() - 3 * 24 * 60*60;

// Formats all three timestamps into a readable date format like Y-m-d H:i:s.
echo PHP_EOL;
echo date("d/m/Y h:i:s A",time());

echo PHP_EOL;
echo date("d/m/Y h:i:s A" ,time()+7 * 24 * 60*60);

echo PHP_EOL;
echo date("d/m/Y h:i:s A" ,time()- 3 * 24 * 60*60);
// Changes the time zone to Asia/Tokyo and reprints the same formatted dates.
echo PHP_EOL;
echo date_default_timezone_get();
date_default_timezone_set("Asia/Tokyo");

echo PHP_EOL;
echo date("d/m/Y h:i:s A",time());

echo PHP_EOL;
echo date("d/m/Y h:i:s A" ,time()+7 * 24 * 60*60);

echo PHP_EOL;
echo date("d/m/Y h:i:s A" ,time()- 3 * 24 * 60*60);

// Uses mktime() to create a timestamp for December 31 of the current year at midnight, and prints it in the same format.
echo PHP_EOL;
echo date("d/m/Y h:i:s A",mktime(0,0,0,month:12,day:31));

// Converts the string "next Monday 10:00 AM" to a timestamp using strtotime() and prints it.
echo PHP_EOL;
echo strtotime("next Monday 10am");
echo PHP_EOL;
echo date("d/m/Y h:i:s A",strtotime("next Monday 10am"));
// Parses "2025-02-15 14:30:00" using both date_parse() and date_parse_from_format('Y-m-d H:i:s', $date) and prints the arrays.
echo PHP_EOL;
$date = "2025-02-15 14:30:00";
print_r(date_parse($date));
echo PHP_EOL;
print_r(date_parse_from_format("Y-m-d H:i:s",$date));

/*

💡 Tiny Hints:

Use time() for current timestamp.

To go forward/backward in time → add/subtract seconds (60 * 60 * 24 * X).

date(format, timestamp) helps you format the output.

Set timezone with date_default_timezone_set().

mktime(hour, min, sec, month, day, year) can help you generate a custom timestamp.

strtotime() can convert natural language strings into timestamps.

Use print_r() to inspect arrays from date_parse() functions.

Would you like me to make a second challenge (harder one) that focuses only on parsing and manipulating custom date strings?
*/
?>