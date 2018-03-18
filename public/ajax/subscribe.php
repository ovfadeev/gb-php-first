<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'):
  require_once('/config/init.php');
  $res = addSubcribe(htmlspecialchars($_REQUEST["email"]));
  echo json_encode($res);
endif;
exit();
?>