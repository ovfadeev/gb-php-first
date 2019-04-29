<?php
function executeQuery($sql)
{
  $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
  $result = mysqli_query($db, $sql);
  mysqli_close($db);
  return $result;
}

function getResult($sql)
{
  $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
  $result = mysqli_query($db, $sql);

  $array_result = array();

  while ($row = mysqli_fetch_assoc($result))
  {
    $array_result[] = $row;
  }

  mysqli_close($db);
  return $array_result;
}
?>