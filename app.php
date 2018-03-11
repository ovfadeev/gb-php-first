<?php
session_start();
$_SESSION["SESSION_ID"] = session_id();

require_once('../config/init.php');
// auth
$isAuth = auth(htmlspecialchars($_POST["login"]), htmlspecialchars($_POST["password"]));
// registration
if (strlen($_POST["registration"]) > 0)
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

// routing
$url_array = explode("/", $_SERVER['REQUEST_URI']);
if ($url_array[1] == "")
{
	$page_name = "index";
}
else
{
	$page_name = $url_array[1];
}

// content
$content = prepareVariables($page_name);
require('../templates/bases.php');

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<pre>";
print_r($_REQUEST);
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