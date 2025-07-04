<?php
require_once __DIR__.'/php_scripts/boot.php';

$user = null;

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id_Users` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<?php if ($user) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Computer Hall/account</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles_account.css">
</head>
<body>
<div class="main_account">
    
  <div class="cap_logo">
    <div class="account" onclick="location.href='login.php'"><?=htmlspecialchars($user['login'])?></div>
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
    
 <div class="footer_account">
    <div class="footer_1"></div>    
    <ul class="ul_footer">        
      <li>
          <div class="footer_column">
              <ul class="ul_adress">
                  <li>
                   <div class="location">
                    <img class="soc_ico" src="images/location.png">
                    <div class="text_adress">Москва, ул. Пушкина, д.2</div>
                    </div>   
                  </li>
                  <li>
                    <div class="location">
                    <img class="soc_ico" src="images/tel.png">
                    <div class="text_adress">+7 (111) 111-11-11</div>
                    </div>  
                  </li>                  
              </ul>      
    </div>
      </li>      
      <li>
          <div class="footer_column">
      <img class="img_200200" src="images/img_qr.png">
      <div class="text_qr">Наше приложение</div>
    </div>
      </li>      
      <li>
          <div class="footer_column">        
      <div class="border_social">
        <ul class="ul_social"> 
              <li><img class="soc_ico" src="images/vk_icon.png" onclick="location.href='https://vk.com/'"></li>
              <li><img class="soc_ico" src="images/odn_icon.png" onclick="location.href='https://ok.ru/'"></li>
              <li><img class="soc_ico" src="images/telegram_icon.png" onclick="location.href='https://web.telegram.org/'"></li>
              <li><img class="soc_ico" src="images/zen_icon.png" onclick="location.href='https://dzen.ru/'"></li>
          </ul>
      </div>
      <div class="text_social">Мы в соцсетях</div>
    </div>
      </li>      
    </ul>     
  </div>
    
  <div class="account_content">
    <div class="welcome_text">Добро пожаловать, <?=htmlspecialchars($user['login'])?>!</div>
    <div class="my_data_text" onclick="location.href='mydata.php'">Мои данные</div>
    <div class="offers_text">Заказы</div>
    <div class="favor_text">Избранное</div>
    <div class="basket_text">Корзина</div>
    <div class="my_pay_text">Мои способы оплаты</div>
    <form method="post" action="php_scripts/do_logout.php">
        <button class="exit_button" type="submit">Выйти</button>
    </form>
    
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

<?php }
