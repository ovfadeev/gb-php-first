<?include_once($_SERVER["DOCUMENT_ROOT"]."/hw5/include/header.php");?>
<?php
// ищем файл
$tableName = "gallery";
$findImgSql = "select * from ".$tableName." WHERE ID='".intval($_REQUEST["img_id"])."'";
$arResult = getResult($findImgSql);

$curentImages = $arResult[0];
?>

<img src="<?=$curentImages["FILE_PATH"]?>" alt="<?=$curentImages["FILE_NAME"]?>">

<?php
// обновляем значение просмотров картинки
$view = intval($curentImages["VIEW_COUNT"]) + 1;
$updateSql = "UPDATE ".$tableName." SET VIEW_COUNT='".$view."' where ID='".$curentImages["ID"]."'";
executeQuery($updateSql);
?>
<?include_once($_SERVER["DOCUMENT_ROOT"]."/hw5/include/footer.php");?>