<?php include("shapka.php") ?>
<!-- Содержимое страницы-->
<div class="bigwcplug">
    <div class="container-fluid" style="padding-bottom: 190px;">
        <div class="row" style="margin-top: 70px; margin-bottom: 90px; margin-left: 20px; margin-right; 20px;">
            <div class="col-md-6">
                <img src="images/akcia.jpg" class="img-fluid" style="object-fit: cover;" alt="">
            </div>
            <div class="col-md-6 mx-auto" style="padding-left: 30px; display: block;">
                <p class="text-left"
                    style="color: #000; text-decoration: none; font-family: Russo One; font-size: 30px;">WF Волжский</p>
                <p class="text-left"
                    style="color: #000; text-decoration: none; font-family: Russo One; font-size: 24px;">
                    1500 р.</p>
                <div class="content">Клубная карта</div>
                <div class="radio-container">
                    <input class="radio-input" id="plus" type="radio" name="type" />
                    <label class="radio" for="plus">WF PLUS (безлимит)</label>
                    <input class="radio-input" id="light" type="radio" name="type" />
                    <label class="radio" for="light">WF LIGHT (день с 07:00 до 16:00)</label>
                </div>
                <div style="margin-top: 70px;" class="content">Длительность</div>
                <div class="radio-container">
                    <input class="radio-input" id="1mon" type="radio" name="type2" />
                    <label class="radio" for="1mon">1 МЕСЯЦ</label>
                    <input class="radio-input" id="3mon" type="radio" name="type2" />
                    <label class="radio" for="3mon">3 МЕСЯЦА</label>
                    <input class="radio-input" id="12mon" type="radio" name="type2" />
                    <label class="radio" for="12mon">12 МЕСЯЦЕВ</label>
                </div>
                <a href="#">
                    <div class="red-btn_sm" style="margin-top: 130px;" data-toggle="modal" data-target="#modal">Добавить в корзину</div>
                </a>
                <div class="about_product" style="margin-top: 30px;">
                    Клубная карта WF PLUS – это стандарт качества и наш топовый продукт.
                    <br>
                    <br>
                    С этой картой вы сможете пользоваться всеми зонами клуба, в любое время и сколько угодно
                    <br>
                    раз. Одним словом «все включено»!
                    <br>
                    <br>
                    Членство по безлимитной карте доступно в периодах от 1 до 12 месяцев.
                    <br>
                    Карта на короткий период позволяет использовать полноценно все основные зоны клубов, что
                    <br>
                    дает возможность протестировать и войти в регулярный режим тренировок.
                    <br>
                    <br>
                    Покупка карты на длительный период – это залог вашего настроя на результат, за счет
                    <br>
                    которого вы также получаете весомую экономию т.к. чем больше период, тем ниже стоимость
                    <br>
                    одного занятия.
                    <br>
                    <br>
                    При выборе карты на более длительный срок вы также получите дополнительные
                    <br>
                    преимущества. Например, карту можно переоформить или заморозить ее действие,
                    <br>
                    воспользоваться преимуществами партнерских программ и скидками на другие услуги клуба.
                    <br>
                </div>
                <div class="inform">
                    <br>
                    Возможности по картам WF PLUS (1,3,6 месяцев):
                </div>
                <div class="about_product">
                    <ul>
                        <li>безлимитное посещение тренажерного зала</li>
                        <li>помощь дежурного тренера в тренажёрном зале</li>
                        <li>активация карты в течении 7 дней с момента покупки</li>
                    </ul>
                </div>
                <div class="inform">
                    <br>
                    Оплатите только 25% и начните тренироваться сразу!
                    <!-- Button trigger modal -->
                    <button type="button" class="modal_start" data-toggle="modal" data-target="#modal">
                        Подробнее
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close krest" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="images/popup.jpg" width="100%" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about_product">
                    Все клубные карты теперь можно приобрести через сервис "ДОЛЯМИ", который позволяет
                    <br>
                    оплачивать покупки 4 платежами (по 25%) без переплат в течение 6 недель. Для покупки этим
                    <br>
                    методом просто выберите в корзине "Оплата Долями".
                </div>
            </div>
        </div>
    </div>

</div>
<div class="littltewplug" style="top: -25%;">
    <div class="gray_content">
        <div class="container">
            <div class="row gx-4 fiten">
                <div class="col righter">
                    <img src="images/hard_gym.jpg" alt="" style="width:340px;height:auto; right: 100px;">
                </div>
                <div class="col lefter">
                    <div class="labelAsk">Заказать обратный звонок</div>
                    <!--Section: Contact v.2-->
                    <section class="mb-4">
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form name="contact-form" action="mail.php" method="POST">
                                    <!--Grid row-->
                                    <div class="row">
                                        <!--Grid column-->
                                        <div class="col form_vert">
                                            <div class="form_grup">
                                                <div class="md-form mb-3">
                                                    <input class="form_input" placeholder="Имя" type="text" id="name"
                                                        name="name">
                                                </div>
                                            </div>
                                            <div class="form_grup">
                                                <div class="md-form mb-3">
                                                    <input class="form_input" placeholder="+7 (999) 999-99-99"
                                                        type="tel" id="telephone" name="phone">
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <div class="checkbx">
                                                    <input class="checkbox_inp" id="box1" type="checkbox">
                                                    <label class="check_label" for="box1">Даю согласие на
                                                        обработку персональных <br>данных</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Grid column-->
                                    </div>
                                </form>
                                <a href="#" class="red-btn">Отправить <span class="flare"></span></a>
                                <div class="status"></div>
                            </div>
                        </div>
                    </section>
                    <!--Section: Contact v.2-->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Конец содержимого страницы-->
<?php include("footer.php") ?>