<?php
function curPage(){
  return $_SERVER["REQUEST_URI"];
}

function prepareVariables($arUrl) {
  if ($arUrl[1] == ""):
    $page_name = "index";
  else:
    $page_name = $arUrl[1];
    $category = $arUrl[2];
    $id_prod = $arUrl[3];
  endif;

  switch ($page_name){
    case "index":
      $vars['content'] = '../templates/index.php';
      $vars['title'] = "Главная страница";
      $vars['products'] = "";
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

    case "auth":
      $vars['content'] = '../templates/auth.php';
      $vars['title'] = "Авторизация";
      break;

    case "reg":
      $vars['content'] = '../templates/registration.php';
      $vars['title'] = "Регистрация";
      break;

    case "feedback":

      break;

    default:
      $vars['content'] = '../templates/404.php';
      $vars['title'] = "404";
      header("HTTP/1.0 404 Not Found");
    break;
  }
  return $vars;
}
?>