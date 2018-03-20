<?php
/*
Таблица товаров каталога
 */
function getTableProducts(){
  return "s_catalog_products";
}
/*
Достаем товары
 */
function getProducts($arParams = null){
  $tableName = getTableProducts();
  $sql = "select * from ".$tableName."";
  if ($arParams["status"]):
    $sql = " where status='".intval($arParams["status"])."'";
  endif;
  if ($arParams["category"]):

  endif;
  if ($arParams["id_prod"]):

  endif;
  if ($arParams["limit"]):
    $sql .= " limit ".$arParams["limit"];
  endif;
  $sql .= ";";
  if ($arProducts = getResult($sql)):
    return $arProducts;
  endif;
  return false;
}
?>