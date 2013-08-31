[(include)design:header]
<body>
  <section class="container">
        <div class="main">
      <h1>Личный кабинет World of Warcraft <span style='float:right'>Alpha</span></h1>
      <style>
        /*table, tr, td {
          border: 1px solid #000;
        }*/
      </style>
      <table width="100%" height="100%">
        <tr>
          <td width="250px" style="padding: 10px" id="mainMenu">
            <ul class="nav nav-list">
            <div style='background-color:#E8E8E8; padding: 5px; border-radius: 5px; margin-bottom: 10px'>
            <li>Добро пожаловать, [(var)username]!</li>
            <li>Ваш баланс: 503 монет</li>
            <li><a href="?module=main&page=logout">Выход</a></li>
            </div>
            <li class="nav-header">Управление аккаунтом</li>
            <li><a href="?module=main&page=start">Информация об аккаунте</a></li>
            <li><a href="?module=main&page=pass_change">Смена пароля</a></li>
            <li><a href="?module=main&page=email_change">Смена E-Mail</a></li>
            <li class="nav-header">Управление персонажами</li>
            <li><a href="?module=main&page=character_list">Список персонажей</a></li>
            <li class="active"><a href="?module=main&page=name_change">Смена имени</a></li>
            <li><a href="?module=main&page=facechar_change">Смена внешности</a></li>
            <li><a href="?module=main&page=race_change">Смена расы</a></li>
            <li><a href="?module=main&page=fraction_change">Смена фракции</a></li>
            <li><a href="?module=main&page=char_repair">Исправление ошибок</a></li>
            <li class="nav-header">Монеты</li>
            <li><a href="?module=main&page=shop">Потайная лавка</a></li>
            <li><a href="?module=main&page=vote">Голосовать за сервер</a></li>
            <li><a href="?module=main&page=buymoney">Пополнить счёт</a></li>
            <li class="nav-header">История аккаунта (недоступно)</li>
            <!--<li><a href="?module=main&page=block_history">История блокировок</a></li>
            <li><a href="?module=main&page=action_history">История действий аккаунта</a></li>
            <li><a href="?module=main&page=vote_history">История голосований</a></li>-->
          </ul>
          </td>
          <td style="padding: 10px">
            <center>
            <h2 style="margin-bottom: 20px; font-size: 24px; font-family: Arial">Сменить имя персонажу:</h2>
            <p>Выберите персонажа:</p>
            [(var)heroesTable]
            <p>Стоимость услуги составляет: [(var)nameChange_cost] монет</p>
            <p class="submit"><input type="submit" name="commit" value="Оплатить"></p>
            </center>
          </td>
        </tr>
      </table>
    </div>
     <div class="login-help">
      <p>DWCP by <a href="http://vk.com/dekamaru">dekamaru</a> 2013 &copy;</p>
    </div>
  </section>
  <script type="text/javascript">
    $('#main-table tr').click(function () {
        $('#main-table tr').css('background-color', '#ffffff');
        $(this).css('background-color', '#d0dafd');
    });
  </script>
</body>
</html>