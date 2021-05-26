<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Подключаем Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/resources/css/style.css">
    <!--Подключаем Шрифт-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--Подключаем OWL corousel-->
    <link rel="stylesheet" href="/resources/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/resources/owlcarousel/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/resources/owlcarousel/owl.carousel.js"></script>
    <script src="/resources/js/main.js"></script>

    <!-- favicon -->
    <link type="image/x-icon" rel="shortcut icon" href="/resources/img/favicon.svg">
    <title><?=$page_title;?></title>



  </head>

  <body>

    <header>
      <div class="row header-wrapper fixed-top">
        <nav class=" navbar navbar-expand-lg container">

          <div class="col-lg-3 col-9 nav-logo">
            <a href="/">
              <div class="text-yellow text-uppercase site-name">
                маг
              </div>
              <div class="text-yellow text-capitalize text-18">
                Мебельная Мануфактура
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse col-lg-6 col-sm-12 text-white " id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href=" ">Каталог<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">О нас</a>
              <a class="nav-item nav-link" href="#">Рассчет</a>
              <a class="nav-item nav-link" href="#">Контакты</a>
            </div>
          </div>
          <div class="d-none d-lg-block col-lg-3 text-yellow">
            <div class="header-phone">
              <a class="text-yellow" href="tel:+74732052626">+7 473 205 26 26</a>
            </div>
              <div class="header-cta-btn">
                <a class="text-yellow" href="#" id="btn_popup" onclick="headerPopup()">заказать звонок</a>
              </div>

          </div>
          <div class="col-3 d-block d-lg-none">
            <a href="tel:+79102814760"><img src="/resources/img/phone.svg" alt="позвонить"></a>
          </div>
        </nav>
      </div>
    </header>
