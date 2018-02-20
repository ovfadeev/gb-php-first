<?php
$titleBrowser = "ДЗ 3 - Олег Фадеев";
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
        $i = 2;
        while ($i <= 100) {
          if ($i % 3 == 0){
            echo $i . ' ';
          }
          $i++;
        }
        echo "<br/>--------------------<br/>";
        /* --- 2 --- */
        $i = 0;
        do {
          if ($i == 0) {
            echo $i . " - это ноль<br/>";
          } else if ($i % 2 == 0) {
            echo $i . " - чётное число<br/>";
          } else {
            echo $i . " - нечётное число<br/>";
          }
          $i++;
        } while ($i <= 10);
        echo "<br/>--------------------<br/>";
        /* --- 3 --- */

        echo "<br/>--------------------<br/>";
        /* --- 4 --- */
        function translit($string) {
          $converter = array(
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e',
            'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
            'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
            'ф' => 'f', 'х' => 'kh', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ь' => '',
            'ы' => 'y', 'ъ' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

            'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E',
            'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M',
            'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U',
            'Ф' => 'F', 'Х' => 'Kh', 'Ц' => 'C', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ь' => '',
            'Ы' => 'Y', 'Ъ' => '', 'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
          );
          return strtr($string, $converter);
        }
        $str = "Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.";
        echo translit($str);
        echo "<br/>--------------------<br/>";
        /* --- 5 --- */
        function spaceReplace($str){
          return str_replace(" ", "_", $str);
        }
        $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto nesciunt minima aperiam, quaerat eius laboriosam optio maiores enim, nobis fugiat adipisci hic eum quasi, illo qui temporibus. Magni, est, expedita.";
        echo spaceReplace($str);
        echo "<br/>--------------------<br/>";
        /* --- 6 --- */
        function bildMenu($arMenu){
          $html = '';
          $html = '<ul>';
          if (is_array($arMenu)):
            foreach ($arMenu as $key => $item) {
              $html .= '<li>';
              $html .= '<a href="'.$item["link"].'">'.$item["name"].'</a>';
              if (is_array($item["child"])){
                $html .= bildMenu($item["child"]);
              }
              $html .= '</li>';
            }
          endif;
          $html .= '</ul>';
          return $html;
        }
        $arMenuItems = array(
          array(
            "name" => "Главная",
            "link" => "/"
          ),
          array(
            "name" => "Каталог",
            "link" => "/catalog/",
            "child" => array(
              array(
                "name" => "Для мужчин",
                "link" => "/catalog/dlya-muzhchin/",
                "child" => array(
                  array(
                    "name" => "Верхняя одежда",
                    "link" => "/catalog/dlya-muzhchin/verhnyaya-odezhda/"
                  )
                )
              ),
              array(
                "name" => "Для женщин",
                "link" => "/catalog/dlya-zhenschin/"
              )
            )
          ),
          array(
            "name" => "Новости",
            "link" => "/news/"
          ),
        );
        echo bildMenu($arMenuItems);
        echo "<br/>--------------------<br/>";
        /* --- 7 --- */

        echo "<br/>--------------------<br/>";
        /* --- 8 --- */
        
        echo "<br/>--------------------<br/>";
        /* --- 9 --- */
        function bildUrl($str){
          return spaceReplace(translit(mb_strtolower($str)));
        }
        $str = "Верхняя одежда";
        echo bildUrl($str);
      ?>
    </div>
  </body>
</html>