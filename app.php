<?php
session_start();

require_once('../config/init.php');

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// $isAuth = auth($_POST['login'], $_POST['pass'], $_POST['rememberme']);

$url_array = explode("/", $_SERVER['REQUEST_URI']);
if ($url_array[1] == "")
{
	$page_name = "index";
}
else
{
	$page_name = $url_array[1];
}

echo $page_name;

$content = prepareVariables($page_name);

echo "<pre>";
print_r($content);
echo "</pre>";

require '../templates/bases.php';

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