<div class="page-default" id="app" data-app="page-default">
  <div class="wrapper">
    <div class="page-title">
      <h1><?=$content["title"]?></h1>
      <?include("other/breadcrumbs.php");?>
    </div>
    <section class="registration">
      <?if (!$isAuth):?>
        <form action="/reg/" method="post">
          <input type="hidden" name="type" value="registration">
          <div class="form-cnt">
            <div class="form-wrapper">
              <?if ($resReg):?>
                <div class="form-header">
                  <div class="form-title">
                    <?=$resReg["msg"]?>
                  </div>
                </div>
              <?endif?>
              <div class="input-fields">
                <div class="input">
                  <label>LOGIN <span class="required">*</span></label>
                  <input type="text" name="login" value="" placeholder="Login*" data-validate="text" />
                </div>
                <div class="input">
                  <label>PASSWORD <span class="required">*</span></label>
                  <input type="password" name="password" value="" placeholder="Password*" data-validate="text" />
                </div>
                <div class="input">
                  <label>CONFIRM PASSWORD <span class="required">*</span></label>
                  <input type="password" name="confirm_password" value="" placeholder="Confirm password*" data-validate="text" />
                </div>
                <div class="input">
                  <label>EMAIL <span class="required">*</span></label>
                  <input type="email" name="email" value="" placeholder="email*" data-validate="email" />
                </div>
                <div class="input">
                  <label>FIRST NAME <span class="required">*</span></label>
                  <input type="text" name="first_name" value="" placeholder="First name*" data-validate="text" />
                </div>
                <div class="input">
                  <label>LAST NAME <span class="required">*</span></label>
                  <input type="text" name="last_name" value="" placeholder="Last name*" data-validate="text" />
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
                <input type="submit" class="btn js-form-submit" name="registration" value="Sign In" />
                <a href="/auth/">Log in?</a>
              </div>
              <div class="form-desc"></div>
            </div>
          </div>
        </form>
      <?else:?>
        <p>Вы успещно зарегистрированы и авторизированы</p>
      <?endif?>
    </section>
  </div>
</div>