<?php
/*
Таблица подписок
 */
function getNameTableSubscribe()
{
  return "s_subscribe";
}
/*
Добавляем подписку
 */
function addSubcribe($email)
{
  $tableName = getNameTableSubscribe();
  $findSql = "select * from ".$tableName." WHERE email='".$email."'";
  if (!getResult($findSql)): // если есть такая запись
    $insertSql = "INSERT INTO ".$tableName." (email) value ('".$email."')";
    $res["result"] = executeQuery($insertSql);
    if ($res["result"]):
      $res["msg"] = "Ваш email успешно добавлен.";
    else:
      $res["msg"] = "Ошибка. Попробуйте позже...";
    endif;
  else:
    $res["result"] = false;
    $res["msg"] = "Такой email уже существует...";
  endif;
  return $res;
}
?>