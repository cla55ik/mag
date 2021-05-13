
<?php include_once 'layouts/header.php'; ?>

<div class="main mt-5">
      <div class="row main-head">
            <div class="container">
                  <div class="col-lg-6 grad-white">
                        <h1 class="text-uppercase">Мебель на заказ в&nbsp;Воронеже</h1>
                        <p class="mt-40 mb-40 text-28">Изготовление мебели по&nbsp;индивидуальному проекту всего&nbsp;от&nbsp;10&nbsp;дней</p>
                        <div class="d-flex justify-content-between text-16">
                              <span>Опыт более 20 лет</span>
                              <span>Цена от производителя</span>
                              <span>Опыт более 20 лет</span>
                        </div>
                        <div class="d-flex mt-40">
                              <button type="button" name="button" class="btn-yellow mr-5">ПОДРОБНЕЕ</button>
                              <button type="button" name="button" class="btn-black">КАТАЛОГ</button>
                        </div>
                  </div>
            </div>

      </div>
      <div class="container">
            <div class="row mt-90">
                  <div class="d-flex align-items-center col-lg-3 text-uppercase text-100">
                        Маг
                  </div>
                  <div class="col-lg-9 d-flex align-items-center text-28 font-weight-normal">
                        Мебельная мануфактура<br>Михаила Александровича Гасилина
                  </div>
            </div>
            <div class="row">
                  <div class="col-lg-5 d-flex align-items-center">
                        <div class="hello">
                              <h2 class="mb-50">Давайте знакомиться!</h2>
                              <p>Меня зовут Михаил. Я занимаюсь изготовлением мебели и изделий из дерева с 1995 года.</p>
                              <p>Это моя страсть!  Мне нравится создавать новое и дарить людям тепло и уют.</p>
                              <p>К своим заказчикам я отношусь как к хорошим друзьям, а друзьям мы делаем только лучшее</p>
                        </div>
                  </div>
                  <div class="col-lg-7">
                        <img src="../resources/img/man.png" alt="">
                  </div>
            </div>
      </div>

<!-- CTA секция-->
      <div class="row cta-wrapper pt-100 pb-100">
            <div class="container">
                  <div class="col-lg-6">
                        <div class="white-head-cta text-uppercase">
                              ДАВАЙТЕ СОЗВОНИМСЯ
                        </div>
                        <div class="white-text-cta text-uppercase">
                              <span>и я расскажу</span><span class="text-yellow"> ПОДРОБНЕЕ</span>
                        </div>
                  </div>
            </div>
      </div>

<!-- Список категорий -->

      <?php include_once($_SERVER['DOCUMENT_ROOT']. "/controller/categoryController.php"); ?>

      <div class="container">
            <div class="row mt-90 mb-90">
                  <div class="d-flex align-items-center col-lg-3 text-uppercase font-weight-bold">
                        <h2>КАКУЮ<br>МЕБЕЛЬ<br>Я ДЕЛАЮ</h2>
                  </div>
                  <div class="col-lg-9 d-flex align-items-center text-18 font-weight-normal">
                        На нашем производстве мы готовы произвести мебель для любых потребностей как для частных домов и квартир, так и для помещений коммерческого использования.
                  </div>
            </div>


                  <?php foreach ($alltest as $category): ?>
                        <div class="row mb-50">
                              <div class="col-lg-3 cat-card-left align-items-center">
                                    <h3 class="text-uppercase cat-name"><?=$category['cat_name'];?></h3>
                                    <div class="sub-cat"><?=$category['sub_1'];?></div>
                                    <div class="sub-cat"><?=$category['sub_2'];?></div>
                                    <div class="sub-cat"><?=$category['sub_3'];?></div>
                                    <div class="max-price">от <?=$category['max_price'];?> 000  ₽</div>
                                    <button class="text-uppercase btn-yellow" type="button" name="gotocat" href="<?=$category['$cat_url'];?>">Подробнее</button>
                              </div>
                              <div class="col-lg-9 p-0">
                                    <img class="img-fluid cat-img" src="/resources/img/<?=$category['cat_img'];?>.jpg" alt="">
                              </div>
                        </div>

                  <?php endforeach; ?>

      </div>

      <!--Выполненные заказы-->


      <!-- Официальный договор -->


      <!-- Гарантия 10лет -->

      <!-- Преимущества -->

      <!-- Материалы TABS -->

      <!-- Отзывы -->

      <!-- Особенности изготовления -->

      <!-- Партнеры -->

      <!-- CTA -->

</div>
