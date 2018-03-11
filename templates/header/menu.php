<?php
include("../templates/menu/main-menu.php");
$curpage = curPage();
?>
<nav class="global-nav">
  <?foreach ($arMenu as $key => $arItem) :?>
    <a href="<?=$arItem["link"]?>" class="<?if ($curpage == $arItem["link"]): echo 'active'; endif;?>"><?=$arItem["text"]?></a>
  <?endforeach?>
</nav>