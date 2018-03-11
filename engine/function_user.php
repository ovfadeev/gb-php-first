<?php
/*
Регистрация
 */
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
/*
Авторизация
 */
function auth($login = null, $pass = null){
  $isAuth = false;
  if (!empty($login)):   //Если попытка авторизации через форму, то пытаемся авторизоваться
    $isAuth = authWithCredential($login, $pass);
    // echo "Авторизация по форме";
  elseif ($_SESSION["USER"]):    //иначе пытаемся авторизоваться через сессии
    $isAuth = checkAuthWithSession($_SESSION["USER"]);
    // echo "Авторизация по сессии";
  endif;
  if ($_POST['ExitLogin']):
    $isAuth = UserExit();
  endif;
  return $isAuth;
}
/*
Выход пользователя
*/
function UserExit()
{
  unset($_SESSION);
  unset($_SESSION["USER"]);
  return false;
}
/*
Авторизация пользователя по форме
*/
function authWithCredential($login, $password)
{
  $tableName = "users";
  $isAuth = false;
  $link = getConnection();
  $login = mysqli_real_escape_string($link, $login);
  $sql = "select * from ".$tableName." where login='".$login."';";
  $user = current(getResult($sql));
  if ($user):
    if (password_verify($password, $user["password"])):
      $updateSql = "UPDATE ".$tableName." SET last_date_auth=now() where id='".$user["id"]."';";
      $isAuth = executeQuery($updateSql);
      if ($isAuth):
        $_SESSION["USER"] = array(
          "ID" => $user["id"],
          "LOGIN" => $user["login"],
          "EMAIL" => $user["email"],
          "F_NAME" => $user["f_name"],
          "L_NAME" => $user["l_name"]
        );
      endif;
    else:
      UserExit();
    endif;
  else:
    UserExit();
  endif;
  return $isAuth;
}
/*
Авторизация при помощи сессий
При переходе между страницами происходит автоматическая авторизация
*/
function checkAuthWithSession($IdUserSession){
  $isAuth = 0;
  $link = getConnection();
  $hash_cookie = mysqli_real_escape_string($link, $IdUserSession);
  $sql = "select users.login, users_auth.* from users_auth INNER JOIN Users on users_auth.id_user = Users.id_user where users_auth.hash_cookie = '$hash_cookie'";

  $user_date = getResult($sql);
  if ($user_date)
  {
    $_SESSION['login'] = $user_date['login'];
    $_SESSION['IdUserSession'] = $IdUserSession;
    $isAuth = 1;
  }
  else
  {
    $isAuth = 0;
    UserExit();
  }

  return $isAuth;
}
?>