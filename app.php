<?php
require_once('../config/init.php');
// auth
$isAuth = auth(htmlspecialchars($_POST["login"]), htmlspecialchars($_POST["password"]));
// registration
if (strlen($_POST["type"]) > 0 && htmlspecialchars($_POST["type"]) == "registration")
{
  $arParams = array(
    "login" => htmlspecialchars($_POST["login"]),
    "password" => htmlspecialchars($_POST["password"]),
    "confirm_password" => htmlspecialchars($_POST["confirm_password"]),
    "email" => htmlspecialchars($_POST["email"]),
    "first_name" => htmlspecialchars($_POST["first_name"]),
    "last_name" => htmlspecialchars($_POST["last_name"]),
  );
  $resReg = register($arParams);
}
// subscribe
if (strlen($_POST["type"]) > 0 && htmlspecialchars($_POST["type"]) == "subscribe")
{
  if ($_POST["email"] != "")
  {
    echo json_encode(addSubcribe(htmlspecialchars($_POST["email"])));
  }
  else
  {
    echo json_encode(
      array(
        "result" => false,
        "msg" => "Введите email"
      )
    );
  }
  die();
}

// routing
$url_array = explode("/", $_SERVER['REQUEST_URI']);
echo "<pre>";
print_r($url_array);
echo "</pre>";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if ($url_array[1] == ""):
	$page_name = "index";
elseif ($url_array[1] == "ajax"):

else:
	$page_name = $url_array[1];
endif;

// content
$content = prepareVariables($page_name);
require('../templates/bases.php');

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// if (!$_POST['metod'] == 'ajax')
// {
// 	require '../templates/bases.php';
// }
// else
// {
// 	ob_start(); //Запускаем буферизауию вывода
// 	require '../templates/auth.php';
// 	$str = ob_get_contents(); //Записываем в переменную то, что в буфере
// 	ob_end_clean(); //Очищаем буфер
// 	echo json_encode($str);
// }
?>