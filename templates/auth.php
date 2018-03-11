<div class="page-default" id="app" data-app="page-default">
  <div class="wrapper">
    <div class="page-title">
      <h1><?=$content["title"]?></h1>
      <?include("other/breadcrumbs.php");?>
    </div>
    <section class="auth">
      <?if (!$isAuth):?>
        <form action="/auth/" method="post">
          <div class="form-cnt">
            <div class="form-wrapper">
              <div class="input-fields">
                <div class="input">
                  <label>LOGIN <span class="required">*</span></label>
                  <input type="text" name="login" value="" placeholder="Login*" data-validate="text" />
                </div>
                <div class="input">
                  <label>PASSWORD <span class="required">*</span></label>
                  <input type="password" name="password" value="" placeholder="Password*" data-validate="text" />
                </div>
              </div>
              <div class="form-footer">
                <div class="form-footer-desc">
                  <div class="required">
                    * Required Fileds
                  </div>
                </div>
              </div>
              <div class="submit">
                <input type="submit" class="btn js-form-submit" name="auth" value="Log In" />
                <a href="#">Forgot Password?</a>
              </div>
              <div class="form-desc">
                <a href="/reg/">Registration</a>
              </div>
            </div>
          </div>
        </form>
      <?else:?>
        <p>Вы успещно авторизированы</p>
      <?endif?>
    </section>
  </div>
</div>