<?php
$titleBrowser = "ДЗ 2 - Олег Фадеев";
?>
<!doctype html>
<html>
  <head>
    <title><?=$titleBrowser?></title>
  </head>
  <body>
    <div class="wrapper">
      <?php
        /* --- 1 --- */
        $a = 1;
        $b = 2;
        if ($a >= 0 && $b >= 0) {
          echo $a - $b . "<br/>";
        } else if ($a < 0 && $b < 0) {
          echo $a * $b . "<br/>";
        } else {
          echo $a + $b . "<br/>";
        }

        /* --- 2 --- */

        $a = 2;
        switch ($a) {
          case 1:
            echo 1 . " ";
          case 2:
            echo 2 . " ";
          case 3:
            echo 3 . " ";
          case 4:
            echo 4 . " ";
          case 5:
            echo 5 . " ";
          case 6:
            echo 6 . " ";
          case 7:
            echo 7 . " ";
          case 8:
            echo 8 . " ";
          case 9:
            echo 9 . " ";
          case 10:
            echo 10 . " ";
          case 11:
            echo 11 . " ";
          case 12:
            echo 12 . " ";
          case 13:
            echo 13 . " ";
          case 14:
            echo 14 . " ";
          case 15:
            echo 15 . " ";
        }
        echo "<br/>";

        /* --- 3 --- */

        function addition($a, $b){
          return $a + $b;
        }
        function subtraction($a, $b){
          return $a - $b;
        }
        function multiplication($a, $b){
          return $a * $b;
        }
        function division($a, $b){
          return $a / $b;
        }
        echo division(10, 5) . "<br/>";

        /* --- 4 --- */

        function calc($a, $b, $operation){
          $result = "Error";
          switch ($operation) {
            case '+':
              $result = $a + $b;
              break;
            case '-':
              $result = $a - $b;
              break;
            case '*':
              $result = $a * $b;
              break;
            case '/':
              $result = $a / $b;
              break;
          }
          return $result;
        }
        echo calc(1, 2, '+') . "<br/>";

        /* --- 5 --- */

        echo date("Y") . "<br/>";

        /* --- 6 --- */

        function power($val, $pow) {
          if ($pow == 0) {
            return 1;
          } else if ($pow < 0) {
            return power(1/$val, -$pow);
          }
          return $val * power($val, --$pow);
        }
        echo power(4, 3) . "<br/>";

        /* --- 7 --- */

        function transformWord($n, $str1, $str2, $str3) {
          $n = abs($n) % 100;
          $n1 = $n % 10;
          if ($n > 10 && $n < 20) {
              return $str3;
          }
          if ($n1 > 1 && $n1 < 5) {
              return $str2;
          }
          if ($n1 == 1) {
            return $str1;
          }
          return $str3;
        }
        $hour = 22;
        $minute = 50;
        echo $hour . " " . transformWord($hour, 'час', 'часа', 'часов') . " " . $minute . " " . transformWord($minute, 'минута', 'минуты', 'минут');
      ?>
    </div>
  </body>
</html>