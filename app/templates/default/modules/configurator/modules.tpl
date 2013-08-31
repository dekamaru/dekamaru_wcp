[(include)design:header]
<body>
  <section class="container">
        <div class="main">
      <h1>Конфигуратор DEngine <span style='float:right'>Alpha</span></h1>
      <table width="100%" height="100%">
        <tr>
          <td width="250px" style="padding: 10px" id="mainMenu">
            <ul class="nav nav-list">
            <li class="nav-header">Управление приложением</li>
            <li><a href="?module=configurator&page=main">Информация о системе</a></li>
            <li class="active"><a href="?module=configurator&page=modules">Модули</a></li>
            <li><a href="?module=configurator&page=settings">Настройка приложения</a></li>
            <li><a href="?module=configurator&page=logout">Выход</a></li>
          </ul>
          </td>
          <td style="padding: 10px">
            <center>
            [(var)error]
            <h2 style="margin-bottom: 20px; font-size: 24px; font-family: Arial">Модули системы</h2>
            [(var)modulesTable]
            </center>
          </td>
        </tr>
      </table>
    </div>
    <div class="login-help">
      <p>DEngine by <a href="http://vk.com/dekamaru">dekamaru</a> 2013 &copy;</p>
    </div>
  </section>
</body>
</html>