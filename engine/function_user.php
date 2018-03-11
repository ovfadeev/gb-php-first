<?php
function register($arParams){
  $tableName = "users";
  $findSql = "select * from ".$tableName." WHERE login='".$arParams["login"]."'";
  if (!getResult($findSql)): // если есть такая запись
    if ($arParams["password"] == $arParams["confirm_password"]):
      $insertSql = "INSERT INTO ".$tableName." (login, password, email, f_name, l_name) value ('".
        $arParams["login"]."', '".
        password_hash($arParams["password"], PASSWORD_DEFAULT)."', '".
        $arParams["email"]."', '".
        $arParams["first_name"]."', '".
        $arParams["last_name"]."')";
      $res["result"] = executeQuery($insertSql);
      if ($res["result"]):
        $res["msg"] = "Успешно";
      else:
        $res["msg"] = "Ошибка. Попробуйте позже...";
      endif;
    else:
      $res["result"] = false;
      $res["msg"] = "Ошибка. Пароли не совпадают...";
    endif;
  else:
    $res["result"] = false;
    $res["msg"] = "Такой логин уже существует...";
  endif;
  return $res;
}

function auth($arParams){
  
}
?>