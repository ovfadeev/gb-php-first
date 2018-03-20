<?if ($content["products"]):?>
  <div class="product-list">
    <?foreach($content["products"] as $key => $arItems):?>
      <div class="product-list-items">
        <div class="product-item">
          <div class="image" style="background-image: url('<?=$arItems["image"]?>');">
            <div class="image-overlay">
              <a href="#" class="js-basket-add" data-id-product="<?=$arItems["id"]?>"><i></i>Add to cart</a>
            </div>
          </div>
          <div class="desc">
            <div class="name"><?=$arItems["name"]?></div>
            <div class="price">$<?=$arItems["price"]?></div>
          </div>
        </div>
      </div>
    <?endforeach?>
  </div>
<?endif?>
<?if ($page):?>
  <div class="nav-page">
    <div class="page">
      <ul>
        <li>
          <a href="#" class="prev"></a>
        </li>
        <li>
          <a href="#">1</a>
        </li>
        <li class="active">
          <div>2</div>
        </li>
        <li>
          <a href="#">3</a>
        </li>
        <li>
          <a href="#">4</a>
        </li>
        <li>
          <a href="#">5</a>
        </li>
        <li>
          <a href="#" class="next"></a>
        </li>
      </ul>
    </div>
    <div class="page-btn">
      <a href="#">View All</a>
    </div>
  </div>
<?endif?>