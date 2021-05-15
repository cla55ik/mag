
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

      <div class="container mb-90">
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

      <!--Выполненные заказы Карусель-->
      <div class="row light-gray pt-90 pb-90">
      <div class="container">
            <h2>ВЫПОЛНЕННЫЕ ЗАКАЗЫ</h2>
      </div>

            <div class="owl-carousel owl-theme">
                  <?php for ($i=1; $i < 21; $i++) :?>
                        <div class="item"> <img src="/resources/img/carousel/<?=$i;?>-min.jpg" alt="" class="scale"> </div>
                  <?php endfor; ?>

            </div>

      </div>

      <!-- Официальный договор -->
      <div class="container">
            <div class="row">
                  <div class="col-lg-7 mt-50">
                        <img src="/resources/img/man-doc.jpg" alt="">
                  </div>
                  <div class="col-lg-5 d-flex flex-wrap align-content-end">
                        <h2 class="mb-40">ОФИЦИАЛЬНЫЙ ДОГОВОР</h2>
                        <p class="mb-90 text-18">На нашем производстве мы готовы произвести мебель для любых потребностей как для частных домов и квартир, так и для помещений коммерческого использования.</p>
                        <div class="d-flex justify-content-end w-100"><img src="/resources/img/pechat.png" alt=""></div>
                  </div>
            </div>
      </div>
      <!-- Гарантия 10лет -->
      <div class="row garant-wrapper pt-100 pb-100">
            <div class="container ">
                  <div class="row">

                        <div class="col-lg-3">

                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                              <div class="">
                                    <div class="white-head-cta text-uppercase">
                                          ГАРАНТИЯ
                                    </div>
                                    <div class="white-text-cta text-uppercase">
                                          на мебель
                                    </div>
                              </div>

                        </div>
                        <div class="col-lg-3 text-yellow d-flex align-items-center text-uppercase">
                              <span class="garant-10">10</span><span class="garant-year">лет</span>
                        </div>
                        <div class="col-lg-3">

                        </div>
                  </div>
            </div>
      </div>
      <!-- Преимущества -->
      <div class="container advantages">
            <div class="row pb-100 advantages-title">
                  <h2>ПРЕИМУЩЕСТВА МЕБЕЛИ НА ЗАКАЗ</h2>
            </div>

            <?php include_once($_SERVER['DOCUMENT_ROOT']. "/templates/advantages.php"); ?>

      </div>
      <!-- Материалы TABS -->

      <!-- Отзывы -->

      <!-- Особенности изготовления -->
      <div class="row pt-100 pb-100 light-gray">
            <div class="container d-flex flex-wrap justify-content-between">
                  <div class="col-lg-8 white features">
                        <h2>Особенности изготовления мебели на заказ</h2>
                        <p class="text-18">
                              Ключевое отличие готовых комплектов, представленных в салонах Москвы, от мебели,
                              изготовленной на заказ, заключается в сроках. Нужно время на составление проекта,
                              его реализацию, доставку и монтаж. Но в таком случае вы получите удобную, практичную мебель,
                              сделанную точно под размеры помещения. За счет использования качественной фурнитуры срок службы предметов
                              интерьера увеличивается в разы.
                        </p>
                        <p class="text-18">
                              С другой стороны, заказав мебель на производстве, вы экономите на доставке по Москве и не платите посредникам.
                               Заключенный с фабрикой договор четко устанавливает сроки изготовления и все нюансы заказа. Это является залогом того,
                               что мебель вашей мечты будет выполнена в точном соответствии с проектом, привезена и собрана в срок.
                         </p>
                         <p class="text-18">
                              Обратите внимание: на всю изготовленную на заказ мебель компания ITF MEBEL предоставляет длительную гарантию сроком на 6 лет.
                              При необходимости будет отрегулирована фурнитура, заменены отдельные элементы при обнаружении брака и т.д. Такой подход
                              строит доверительные отношения между компанией и ее клиентами.
                        </p>
                        <p class="text-18">
                              ITF MEBEL – одно из ведущих производств в Москве по изготовлению мебели под заказ. На наших производственных мощностях
                              создаются кухни, гардеробные, шкафы, кабинеты и любая другая корпусная мебель. Вся продукция производится с точным
                              соблюдением технологии и исключительно из проверенных временем материалов.
                        </p>
                  </div>
                  <div class="col-lg-3 white akciya d-flex flex-wrap">
                        <div class="akciya-text text-center mt-90 w-100">
                              <h3>СБОРКА<br>В ПОДАРОК</h3>
                              <p>при заказе в мае</p>
                        </div>

                        <img class="img-fluid" src="/resources/img/akciya.jpg" alt="">
                  </div>
            </div>
      </div>
      <!-- Партнеры -->

      <!-- CTA -->

</div>


<script type="text/javascript">
      $(document).ready(function(){
      $(".owl-carousel").owlCarousel();
      });
</script>


<script src="/resources/js/owl-main.js"></script>

<?php include_once 'layouts/footer.php'; ?>