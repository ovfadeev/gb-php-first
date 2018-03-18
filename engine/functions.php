<?php
function curPage(){
  return $_SERVER["REQUEST_URI"];
}

function prepareVariables($page_name) {
  switch ($page_name){
    case "auth":
      $vars['content'] = '../templates/auth.php';
      $vars['title'] = "Авторизация";
      break;

    case "reg":
      $vars['content'] = '../templates/registration.php';
      $vars['title'] = "Регистрация";
      break;

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

    case "featured":
      $vars['content'] = '../templates/featured.php';
      $vars['title'] = "Популярные товары";
      break;

    case "hot-deals":
      $vars['content'] = '../templates/hot-deals.php';
      $vars['title'] = "Горящее предложение";
      break;

    case "register":

      break;

    case "feedback":

      break;
  }
  return $vars;
}
?>