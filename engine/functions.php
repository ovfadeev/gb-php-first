<?php
function prepareVariables($page_name) {
  switch ($page_name){
    case "index":
      $vars['content'] = '../templates/index.php';
      $vars['title'] = "Главная страница";
      break;

    case "catalog":
      $vars['content'] = '../templates/catalog.php';
      $vars['title'] = "Каталог";
      break;

    case "cart":
      $vars['content'] = '../templates/cart.php';
      $vars['title'] = "Корзина";
      break;

    case "checkout":
      $vars['content'] = '../templates/checkout.php';
      $vars['title'] = "Оформление заказа";
      break;

    case "register":

      break;

    case "feedback":

      break;
  }
  return $vars;
}
?>