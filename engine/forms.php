<?php
// auth
$isAuth = auth(htmlspecialchars($_POST["login"]), htmlspecialchars($_POST["password"]));
// registration
if (strlen($_POST["type"]) > 0 && htmlspecialchars($_POST["type"]) == "registration"):
  $arParams = array(
    "login" => htmlspecialchars($_POST["login"]),
    "password" => htmlspecialchars($_POST["password"]),
    "confirm_password" => htmlspecialchars($_POST["confirm_password"]),
    "email" => htmlspecialchars($_POST["email"]),
    "first_name" => htmlspecialchars($_POST["first_name"]),
    "last_name" => htmlspecialchars($_POST["last_name"]),
  );
  $resReg = register($arParams);
endif;
// subscribe
if (strlen($_POST["type"]) > 0 && htmlspecialchars($_POST["type"]) == "subscribe"):
  $email = htmlspecialchars($_POST["email"]);
  if ($email != "" && filter_var($email, FILTER_VALIDATE_EMAIL)):
    echo json_encode(addSubcribe(htmlspecialchars($email)));
  else:
    echo json_encode(
      array(
        "result" => false,
        "msg" => "Введите email"
      )
    );
  endif;
  die();
endif;
// add products
if (strlen($_POST["type"]) > 0 && htmlspecialchars($_POST["type"]) == "get_basket"):
  
  die();
endif;
?>