<?php
function prepareVariables($page_name) {
  switch ($page_name){
    case "index":
      $vars['content'] = '../templates/index.php';
      $vars['title'] = "Главная страница";
      break;
    case "contact":

      break;

    case "register":

      break;

    case "feedback":

      break;
  }
  return $vars;
}
?>