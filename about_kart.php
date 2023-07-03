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
                <a  href="#">
                    <div class="red-btn_sm" style="margin-top: 130px;">Добавить в корзину</div>
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