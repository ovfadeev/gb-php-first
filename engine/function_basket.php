<?php
/*
Таблица карзин пользователей
 */
function getTableBasket(){
  return "s_basket";
}

function getBasketUser($idUser){
  $tableName = getTableProductSize();
  $sql = "select * from ".$tableName." where id='".intval($id)."';";
  $basket = getResult($sql);
  if ($basket):
    return $basket;
  endif;
  return false;
}
?>