<?php
//error_reporting(0);

$titleBrowser = "ДЗ 4 - Олег Фадеев";

include($_SERVER["DOCUMENT_ROOT"]."/hw4/include/functions.php");

$scanDirImages = $_SERVER["DOCUMENT_ROOT"]."/hw4/images";
$viewDirImages = "/hw4/images/";

$dirSaveImagesResize = $_SERVER["DOCUMENT_ROOT"]."/hw4/image_resize";
$viewDirImagesResize = "/hw4/image_resize/";

$resizeWidth = 200;
$resizeHeight = 100;

$arImages = findImages($scanDirImages, $viewDirImages);

foreach ($arImages as $key => $image):
  $path = $image["path_full"];
  $pathSave = $dirSaveImagesResize . "/" . $image["name"];
  if (create_thumbnail($path, $pathSave, $resizeWidth, $resizeHeight)):
    $arImages[$key]["path_resize"] = $viewDirImagesResize . $image["name"];
  endif;
endforeach;

// скрипт можно усовершенствовать на поиск уже созданных иконок и не перезаписывать их каждый раз.
?>
<!doctype html>
<html>
  <head>
    <title><?=$titleBrowser?></title>
  </head>
  <body>
    <div class="wrapper">
      <?foreach($arImages as $key => $image):?>
          <a href="<?=$image["path_browse"]?>" target="_blank">
            <img src="<?=$image["path_resize"]?>" alt="<?=$key?>" />
          </a>
      <?endforeach?>
    </div>
  </body>
</html>