    </div>
    <div class="subscribe-cnt">
      <div class="wrapper">
        <div class="cols-cnt">
          <div class="cols">
            <?include("slider-reviews.php");?>
          </div>
          <div class="cols">
            <?include("subscribe.php");?>
          </div>
        </div>
      </div>
    </div>
    <footer class="global-footer">
      <div class="wrapper">
        <div class="corp-cnt">
          <div class="logo">
            <a href="/" title="logo"></a>
          </div>
          <?include("about.php");?>
        </div>
        <?include("menu.php");?>
      </div>
      <div class="footer-bottom">
        <div class="wrapper">
          <div class="copyright">
            &copy; <?=date("Y")?>  Brand  All Rights Reserved — Олег Фадеев
          </div>
          <?include("soc-serv.php");?>
        </div>
      </div>
    </footer>
  </section>
  <div class="hidden">
    
  </div>
  <script type="text/javascript" src="/js/vendors/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="/js/vendors/jquery-ui.min.js"></script>
  <script type="text/javascript" src="/js/vendors/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="/js/vendors/jquery.fancybox.min.js"></script>
  <!-- <script type="text/javascript" src="/js/vendors/jquery.ui.min.js"></script> -->
  <script type="text/javascript" src="/js/vendors/Container.js"></script>
  <script type="text/javascript" src="/js/vendors/Basket.js"></script>
  <script type="text/javascript" src="/js/main.js?<?=time()?>"></script>
</body>
</html>