<?php
/* --- 1 --- */
// установил openserver
/* --- 2 --- */
// выполнил, разобрался
/* --- 3 --- */
$a = 5;
$b = '05';
var_dump($a == $b); // true, потому что идет не строгое сравнение и $b = 5
var_dump((int)'012345'); // целочисленное значение '012345' = 12345
var_dump((float)123.0 === (int)123.0); // строгое сравнение числа с п=лавующей точкой и целого числа
var_dump((int)0 === (int)'hello, world'); // строку приводят к целочисленнову значению и это = false, как и 0 = false
/* --- 4 --- */
$titleBrowse = "Home work 1";
$titlePage = "Ticket #4";
?>
<!doctype html>
<html>
  <head>
    <title><?=$titleBrowse?></title>
  </head>
  <body>
    <div class="wrapper">
      <?if ($titlePage):?>
        <h1><?=$titlePage?></h1>
      <?endif?>
    </div>
  </body>
</html>
<?php
/* --- 5 --- */
$a = 1;
$b = 2;

// $a += $b = $a;
$a += +$b - $b = $a;

var_dump($a . " - " . $b);
?>