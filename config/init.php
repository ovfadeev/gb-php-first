<?php
// session
session_id();
session_start();
$_SESSION["SESSION_ID"] = session_id();

// scripts
require_once('../config/config.php');

require_once('../engine/functions.php');

require_once('../engine/function_db.php');

require_once('../engine/function_basket.php');

require_once('../engine/function_products.php');

require_once('../engine/function_reviews.php');

require_once('../engine/function_subscribe.php');

require_once("../engine/function_user.php");

require_once('../engine/forms.php');
?>