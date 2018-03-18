<?php
require_once('../config/init.php');
// routing
$url_array = explode("/", $_SERVER['REQUEST_URI']);
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