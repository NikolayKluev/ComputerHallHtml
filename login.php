<?php
require_once __DIR__.'/php_scripts/boot.php';

if (check_auth()) {
    header('Location: ./account.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Computer Hall/login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles_login.css">
</head>
<body>
<div class="main_login">
    
  <div class="cap_logo">
    <div class="account" onclick="location.href='login.php'">Личный кабинет</div>
    <div class="search">
      <div class="search_putton_pos">
        <div class="search_button">Поиск</div>        
      </div>
        <div class="search_input">
            <input type="search" id="search" name="search" required>
        </div>
    </div>
    <div class="border_logo">
      <div class="logo_text" onclick="location.href='index.html'">Computer Hall</div>
    </div>
  </div>
    
  <div class="cap">
    <div id="menu-btn" class="cap_content">Каталог</div>
    <div class="cap_content" onclick="location.href='delivery.html'">Доставка</div>
    <div class="cap_content" onclick="location.href='pay.html'">Оплата</div>
    <div class="cap_content" onclick="location.href='stocks.html'">Акции</div>
    <div class="cap_content" onclick="location.href='aboutus.html'">О нас</div>
    <div class="cap_content" onclick="location.href='contacts.html'">Контакты</div>
  </div>
    
   <div class="login_form_border"> 
       
  <div class="login_form">
      <form method="post" action="php_scripts/do_login.php"> 
          <div class="mess_box"><?php flash() ?> </div>
    <div class="login_input">
        <input type="text" id="login" name="login" required>
    </div>
      <div class="pass_input">
          <input type="password" id="password" name="password" required>
      </div>
    
    <div class="entry_button_pos">
      <div class="entry_button">
      <input class="entry_button" type="submit" value="Войти"> 
      </div>      
    </div>
    
    <div class="pass_text">Пароль</div>
    <div class="login_text">Логин</div>
    <div class="ifno" onclick="location.href='register.php'">Если нет аккаунта, зарегистрироваться!</div>
  </div>
   </div>
    <!--Menu-->
  <nav id="menu">
      <ul>
          <li onclick="location.href='cpu.html'">Процессоры</li>
          <li onclick="location.href='motherboard.html'">Материнские платы</li>
          <li onclick="location.href='dimm.html'">Оперативная память</li>
          <li>Системы охлаждения</li>
          <li>Блоки питания</li>
          <li onclick="location.href='corpus.html'">Корпуса</li>
          <li>SSD накопители</li>
          <li onclick="location.href='videocard.html'">Видеокарты</li>
          <li>Жесткие диски</li>
      </ul>
  </nav>
</div>
    <script src="js_scripts/inburger.js"></script> 
    <script src="js_scripts/burger.js"></script>
</body>
</html>
