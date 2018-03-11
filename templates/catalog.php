<div class="page-default page-product" id="app" data-app="page-product">
  <div class="wrapper">
    <div class="page-title">
      <h1><?=$content["title"]?></h1>
      <?include("other/breadcrumbs.php");?>
    </div>
    <aside class="sidebar">
      <?include("page_catalog/menu-category.php");?>
    </aside>
    <main class="product-cnt">
      <?include("products/products-filter.php");?>
      <?include("products/products-sort.php");?>
      <?include("products/products-list.php");?>
    </main>
  </div>
  <?include("other/catalog-features.php");?>
</div>