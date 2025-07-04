<?php
require_once __DIR__.'/php_scripts/boot.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Computer Hall/register</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles_register.css">
</head>
<body>
<div class="main_reg">
    
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
    
  <div class="reg_form">
     <form method="post" action="php_scripts/do_register.php"> 
         <div class="mess_text"><?php flash() ?> </div>
      <div class="reg_button_pos">
            <div class="reg_button">
                <input class="reg_button" type="submit" value="Регистрация">                 
            </div>
      </div>     
      
      <div class="f_name_input">
          <input type="text" id="firstName" name="firstName" required>
      </div>
      <div class="sec_name_input">
          <input type="text" id="lastName" name="lastName" required>
      </div>
      <div class="tel_input">
          <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="email_input">
          <input class="email_input" type="email" id="email" name="email" required>
      </div>
      <div class="login_input">
          <input type="text" id="login" name="login" required>
      </div>
      <div class="pass_input">
          <input type="password" id="password" name="password" required>
      </div>
    
    <div class="name_text">Ваше имя</div>
    <div class="second_name_text">Ваша фамилия</div>
    <div class="mail_text">Email</div>
    <div class="phone_text">Номер телефона</div>    
    <div class="create_log_text">Придумайте логин</div>
    <div class="create_pass_text">Придумайте пароль</div>
    <div class="ifno" onclick="location.href='login.php'">Если есть аккаунт, войти!</div>
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
