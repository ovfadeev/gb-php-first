<div class="slider-reviews">
  <ul class="js-subscribe-slider">
    <?foreach($content["reviews"] as $key => $arItems):?>
      <li>
        <div class="reviews-item">
          <div class="reviews-img" style="background-image: url('<?=$arItems["user"]["image"]?>');"></div>
          <div class="reviews-desc">
            <div class="reviews-text">
              “<?=$arItems["text"]?>”
            </div>
            <div class="reviews-author">
              <div class="name">
                <?=$arItems["user"]["f_name"]?> <?=$arItems["user"]["l_name"]?>
              </div>
              <div class="address">
                <?=$arItems["user"]["address"]?>
              </div>
            </div>
          </div>
        </div>
      </li>
    <?endforeach?>
  </ul>
</div>