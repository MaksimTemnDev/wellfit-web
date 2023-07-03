<?php include("shapka.php") ?>
<!-- Содержимое страницы-->
<div class="bigwcplug">
    <div class="container text-center" style="padding-bottom: 190px;">
        <div class="row" style="margin-top: 70px">
            <div class="col-md-8 mx-auto">
                <p class="text-center"
                    style="color: #000; text-decoration: none; font-family: Russo One; font-size: 44px;">
                    КЛУБНЫЕ КАРТЫ</p>
            </div>
        </div>
        <div class="row" style="margin-top: 70px; margin-bottom: 90px;">
            <div class="col-md-5 mx-auto">
                <a href="http://localhost/fitnessProject/about_kart.php"><img src="images/akcia.jpg" class="img-fluid" alt=""></a>
                <div class="title" style="padding-top: 20px; font-family: Russo One; font-size: 30px;">WF Волжский</div>
                <div class="title" style="padding-top: 6px; font-size: 20px;">От 950 р.</div>
                <a href="http://localhost/fitnessProject/about_kart.php">
                    <div class="red-btn_sm">Подробнее</div>
                </a>
            </div>
            <div class="col-md-5 mx-auto">
                <a href="http://localhost/fitnessProject/about_kart.php"><img src="images/akcia.jpg" class="img-fluid" alt=""></a>
                <div class="title" style="padding-top: 20px; font-family: Russo One; font-size: 30px;">WF Волжский</div>
                <div class="title" style="padding-top: 6px; font-size: 20px;">От 950 р.</div>
                <a href="http://localhost/fitnessProject/about_kart.php">
                    <div class="red-btn_sm">Подробнее</div>
                </a>
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