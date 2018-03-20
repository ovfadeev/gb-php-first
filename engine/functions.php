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
      $vars['slider'] = "";
      $arParams = array(
        "where" => array(
          "status" => 1
        ),
        "limit" => 12
      );
      $vars['products'] = getProducts($arParams);
      $vars['categories'] = "";
      break;

    case "catalog":
      if ($category != "" && $id_prod != ""):
        $vars['content'] = '../templates/catalog-detail.php';
        $arParams = array(
          "where" => array(
            "category" => $category,
            "id_prod" => $id_prod
          )
        );
        $vars['products'] = getProducts($arParams);
      elseif ($category != ""):
        $vars['content'] = '../templates/catalog.php';
        $arParams = array(
          "where" => array(
            "category" => $category
          ),
          "limit" => 12
        );
        $vars['products'] = getProducts($arParams);
      else:
        $arParams = array(
          "limit" => 12
        );
        $vars['products'] = getProducts($arParams);
        $vars['content'] = '../templates/catalog.php';
        $vars['title'] = "Каталог";
        $vars['menu'] = "";
        $vars['filter'] = "";
      endif;
      break;

    case "cart":
      $vars['content'] = '../templates/cart.php';
      $vars['title'] = "Корзина";
      $vars['basket'] = "";
      break;

    case "checkout":
      $vars['content'] = '../templates/checkout.php';
      $vars['title'] = "Оформление заказа";
      $vars['basket'] = "";
      break;

    case "featured":
      $vars['content'] = '../templates/featured.php';
      $vars['title'] = "Популярные товары";
      $vars['products'] = "";
      break;

    case "hot-deals":
      $vars['content'] = '../templates/hot-deals.php';
      $vars['title'] = "Горящее предложение";
      $vars['products'] = "";
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
  $vars["basket"] = getBasketUser($_SESSION["USER"]["ID"]);
  $vars['reviews'] = getReviews();
  return $vars;
}
?>