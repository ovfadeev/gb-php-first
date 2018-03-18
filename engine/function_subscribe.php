<?php
function addSubcribe($email){
  $tableName = "subscribe";
  $findSql = "select * from ".$tableName." WHERE email='".$email."'";
  if (!getResult($findSql)): // если есть такая запись
    $insertSql = "INSERT INTO ".$tableName." (email) value ('".$email."')";
    $res["result"] = executeQuery($insertSql);
    if ($res["result"]):
      $res["msg"] = "Успешно";
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