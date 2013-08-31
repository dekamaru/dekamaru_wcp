[(include)design:header]
<body>
  <section class="container">
    <center>
      <!--<div class="alert" style="width: 310px; padding: 8px">
          Здесь может быть любая новость!
      </div>-->
    </center>
    <div class="login">
      <h1>[(lang)form_title]</h1>
      [(var)error]
      <form method="post">
        <p><input type="text" name="login" value="" placeholder="[(lang)form_login_placeholder]"></p>
        <p><input type="password" name="password" value="" placeholder="[(lang)form_password_placeholder]"></p>
        <p><img src="[INCLUDE_DIR]captcha.php" style="margin-left: 5px;"></p>
        <p><input type="text" name="captcha_key" value="" placeholder="[(lang)captcha_text]"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            [(lang)form_rememberme_text]
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="[(lang)form_button_submit_text]"></p>
      </form>
    </div>
     <div class="login-help">
      <p><a href="?module=auth&page=restore">[(lang)page_label_restore_text]</a></p>
      <p>DWCP by <a href="http://vk.com/dekamaru">dekamaru</a> 2013 &copy;</p>
    </div>
  </section>
</body>
</html>