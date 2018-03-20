<?php
require_once('../config/init.php');
// routing
$arUrl = explode("/", $_SERVER['REQUEST_URI']);

// content
$content = prepareVariables($arUrl);
require('../templates/bases.php');

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>