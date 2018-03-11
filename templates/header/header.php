<!DOCTYPE html>
<!--[if IE 8]><html class="no-js ie8 no-placeholder" > <![endif]-->
<!--[if IE 9]><html class="no-js ie9 no-placeholder" ><![endif]-->
<head>
  <meta charset="utf-8" />
  <title><?=$content["title"]?></title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" id="viewport" content="width=device-width">
  <!--[if lt IE 9]><script src="js/vendor/html5shiv.js"></script><![endif]-->
  <link rel="stylesheet" href="/css/main.css?<?=time()?>" />
</head>
<body>
  <section class="main">
    <header class="global-header">
      <div class="wrapper">
        <div class="logo">
          <a href="/" title="logo"></a>
        </div>
        <?include("search.php");?>
        <?include("cart.php");?>
      </div>
    </header>
    <?include("menu.php");?>
    <div class="content">