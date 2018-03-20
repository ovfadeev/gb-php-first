<?php
/*
Таблица товаров каталога
 */
function getTableProducts(){
  return "s_catalog_products";
}
/*
Таблица категорий товаров каталога
 */
function getTableCategory(){
  return "s_catalog_category";
}
/*
Таблица размеров товаров каталога
 */
function getTableProductSize(){
  return "s_catalog_product_size";
}
/*
Таблица цветов товаров каталога
 */
function getTableProductColor(){
  return "s_catalog_product_color";
}
/*
Достаем товары
 */
function getProducts($arParams = null){
  $tableName = getTableProducts();
  $sql = "select * from ".$tableName."";
  if ($arParams["where"]):
    $sql .= " where";
    if ($arParams["where"]["status"]):
      $sql .= " status='".intval($arParams["where"]["status"])."'";
    endif;
    if ($arParams["where"]["category"]):
      $category = getProductCategory($arParams["where"]["category"]);
      $sql .= " category_id='".intval($category["id"])."'";
    endif;
    if (is_array($arParams["where"]["id_prod"])):
      $sql .= " id in ('".implode(',', $arParams["where"]["id_prod"])."')";
    elseif ($arParams["where"]["id_prod"]):
      $sql .= " id='".intval($arParams["where"]["id_prod"])."'";
    endif;
  endif;
  if ($arParams["limit"]):
    $sql .= " limit ".$arParams["limit"];
  endif;
  $sql .= ";";
  if ($arProducts["items"] = getResult($sql)):
    foreach ($arProducts["items"] as $key => $arItems):
      if (intval($arItems["size_id"]) > 0):
        $arProducts["items"][$key]["properties"]["size"] = getProductSize($arItems["size_id"]);
      endif;
      if (intval($arItems["color_id"]) > 0):
        $arProducts["items"][$key]["properties"]["color"] = getProductColor($arItems["color_id"]);
      endif;
      if ($category):
        $arProducts["items"][$key]["link"] = "/catalog/".$category["code"]."/".$arItems["id"]."/";
      endif;
    endforeach;
    $arProducts["category"] = $category;
    return $arProducts;
  endif;
  return false;
}
/*
Достаем размеры
 */
function getProductSize($id){
  $tableName = getTableProductSize();
  $sql = "select * from ".$tableName." where id='".intval($id)."';";
  $size = current(getResult($sql));
  if ($size):
    return $size;
  endif;
  return false;
}
/*
Достаем цвет
 */
function getProductColor($id){
  $tableName = getTableProductColor();
  $sql = "select * from ".$tableName." where id='".intval($id)."';";
  $color = current(getResult($sql));
  if ($color):
    return $color;
  endif;
  return false;
}
/*
Достаем категорию товаров
 */
function getProductCategory($code){
  $tableName = getTableCategory();
  $sql = "select * from ".$tableName." where code='".$code."';";
  $category = current(getResult($sql));
  if ($category):
    return $category;
  endif;
  return false;
}
?>