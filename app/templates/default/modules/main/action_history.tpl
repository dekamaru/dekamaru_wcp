<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Main</title>

  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../../assets/css/login_page.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap-responsive.css">
  <link rel="stylesheet" href="../../assets/css/main.css">

  <script type="text/javascript" src="../../assets/js/jquery-latest.pack.js"></script>
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
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
            <li>Добро пожаловать, dekamaru!</li>
            <li>Ваш баланс: 503 монет</li>
            <li><a href="?module=main&page=?do=main&request=logout">Выход</a></li>
            </div>
            <li class="nav-header">Управление аккаунтом</li>
            <li><a href="?module=main&page=start">Информация об аккаунте</a></li>
            <li><a href="?module=main&page=pass_change">Смена пароля</a></li>
            <li><a href="?module=main&page=email_change">Смена E-Mail</a></li>
            <li class="nav-header">Управление персонажами</li>
            <li><a href="?module=main&page=character_list">Список персонажей</a></li>
            <li><a href="?module=main&page=name_change">Смена имени</a></li>
            <li><a href="?module=main&page=facechar_change">Смена внешности</a></li>
            <li><a href="?module=main&page=race_change">Смена расы</a></li>
            <li><a href="?module=main&page=fraction_change">Смена фракции</a></li>
            <li><a href="?module=main&page=char_repair">Исправление ошибок</a></li>
            <li class="nav-header">Монеты</li>
            <li><a href="?module=main&page=vote">Голосовать за сервер</a></li>
            <li><a href="?module=main&page=buymoney">Пополнить счёт</a></li>
            <li class="nav-header">Магазин</li>
            <li><a href="?module=main&page=test_shop">Категория 1</a></li>
            <li><a href="?module=main&page=test_shop">Категория 2</a></li>
            <li><a href="?module=main&page=test_shop">Категория 3</a></li>
            <li class="nav-header">История аккаунта</li>
            <li><a href="?module=main&page=block_history">История блокировок</a></li>
            <li class="active"><a href="action_history">История действий аккаунта</a></li>
            <li><a href="?module=main&page=vote_history">История голосований</a></li>
          </ul>
          </td>
          <td style="padding: 10px">
            <center>
            <h2 style="margin-bottom: 20px; font-size: 24px; font-family: Arial">История действий аккаунта:</h2>
            <table id="main-table" style="text-align:center; margin-top:10px">
                <thead>
                  <tr>
                      <th scope="col">Дата</th>
                      <th scope="col">Действие</th>
                      <th scope="col">IP</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>12:07 12.02.2013</td>
                      <td>Вход в личный кабинет</td>
                      <td>127.0.0.1</td>
                    </tr>
                    <tr>
                      <td>13:07 12.02.2013</td>
                      <td>Трата 400 монет на покупку вещей</td>
                      <td>24.231.61.233</td>
                    </tr>
                </tbody>
            </table>
            </center>
          </td>
        </tr>
      </table>
    </div>
     <div class="login-help">
      <p>DWCP by <a href="http://vk.com/dekamaru">dekamaru</a> 2013 &copy;</p>
    </div>
  </section>
</body>
</html>