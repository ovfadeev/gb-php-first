<?php
/*
Таблица отзывов
 */
function getTableReviews(){
  return "s_reviews";
}
/*
Достаем отзывы
 */
function getReviews($arParams = null){
  $tableName = getTableReviews();
  $sql = "select * from ".$tableName."";
  $sql .= ";";
  if ($arReviews = getResult($sql)):
    foreach ($arReviews as $key => $arItems) :
      if ($arItems["user_id"]):
        $arReviews[$key]["user"] = getUser($arItems["user_id"]);
      endif;
    endforeach;
    return $arReviews;
  endif;
  return false;
}
?>