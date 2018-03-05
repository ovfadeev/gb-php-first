<?include_once($_SERVER["DOCUMENT_ROOT"]."/hw5/include/header.php");?>
<?php
/* --- IMAGES --- */
// поиск картинок
$arParams = array(
  "SCAN_DIR" => $_SERVER["DOCUMENT_ROOT"]."/hw5/images",
  "FILE_PATH_VIEW" => "/hw5/images/",
  "PATH_RESIZE" => $_SERVER["DOCUMENT_ROOT"]."/hw5/images_resize",
  "FILE_PATH_VIEW_RESIZE" => "/hw5/images_resize/",
  "RESIZE_WIDTH" => 400,
  "RESIZE_HEIGHT" => 200
);
// формируем массив картинок
$arImages = bildArrayImagesGallery($arParams);
/* --- END --- */

/* --- DB --- */
$tableName = "gallery";
// записываем в таблицу
foreach ($arImages as $key => $image) :
  $findSql = "select * from ".$tableName." WHERE FILE_NAME='".$image["FILE_NAME"]."'";
  if (!getResult($findSql)): // если есть такая запись
    $insertSql = "INSERT INTO ".$tableName." (FILE_NAME, FILE_PATH, FILE_PATH_SMALL, VIEW_COUNT) value ('".
      $image["FILE_NAME"]."', '".
      $image["FILE_PATH_BROWSE"]."', '".
      $image["FILE_PATH_BROWSE_SMALL"].
      "', '0')";
    executeQuery($insertSql);
  endif;
endforeach;
// достаём данные из таблицы
$selectSql = "SELECT * FROM ".$tableName." ORDER BY VIEW_COUNT DESC";
$arGallery = getResult($selectSql);
/* --- END --- */
?>
<?foreach($arGallery as $key => $image):?>
    <a href="/hw5/detail.php?img_id=<?=$image["ID"]?>" target="_blank">
      <img src="<?=$image["FILE_PATH_SMALL"]?>" alt="<?=$key?>" />
    </a>
<?endforeach?>
<?include_once($_SERVER["DOCUMENT_ROOT"]."/hw5/include/footer.php");?>