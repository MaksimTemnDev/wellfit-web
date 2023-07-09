<?php include("shapka.php");
require_once("database.php");
$bd = new DB;
$current = (object) $bd->query("SELECT * FROM `products` WHERE id =" . $_GET['id']);
$every = get_object_vars($current)[0];
$prices = explode(" ", $every['prices']);
$periods = explode(" ", $every['periods']);
$checked = false;
?>
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
                <p class="text-left" id="result"
                    style="color: #000; text-decoration: none; font-family: Russo One; font-size: 24px;"><?php echo $prices[0]; ?> р.</p>
                <div class="content">Клубная карта</div>
                <form action="" method="post">
                    <div class="radio-container">
                        <input class="radio-input" id="plus" type="radio" checked name="card" />
                        <label class="radio" for="plus">WF PLUS (безлимит)</label>
                        <input class="radio-input" id="light" type="radio" name="card" />
                        <label class="radio" for="light">WF LIGHT (день с 07:00 до 16:00)</label>
                    </div>
                    <div style="margin-top: 120px;" class="content">Длительность</div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div class="radio-container">
                        <?php foreach ($periods as $per) { ?>
                            <input class="radio-input" id="<?php echo $per; ?>mon" type="radio" <?php if (!$checked) {
                                   echo "checked";
                                   $checked = true;
                               } ?> value="<?php echo $per; ?>" name="mon" />
                            <label class="radio" for="<?php echo $per; ?>mon"><?php if (intval($per) < 4) {
                                   echo $per . " МЕСЯЦ";
                               } else {
                                   echo $per . " МЕСЯЦЕВ";
                               } ?> </label>
                        <?php } ?>
                    </div>
                </form>
                <script>
                    const zero = "<?php echo $prices[0]; ?> р.";
                    const first = "<?php echo $prices[1]; ?> р.";
                    const second = "<?php echo $prices[2]; ?> р.";

                    let radioBtns = document.querySelectorAll
                        ("input[name='mon']");
                    let result = document.getElementById("result");

                    let findSelected = () => {
                        let selected = document.querySelector
                            ("input[name='mon']:checked").value;
                        if (selected === "<?php echo $periods[0] ?>") {
                            result.textContent = zero;
                        } else if (selected === "<?php echo $periods[1] ?>") {
                            result.textContent = first;
                        } else {
                            result.textContent = second;
                        }
                    }

                    radioBtns.forEach(radioBtn => {
                        radioBtn.addEventListener("change", findSelected);
                    });
                    findSelected();
                </script>
                <a href="#">
                    <div class="red-btn_sm" style="margin-top: 190px;" data-toggle="modal" data-target="#modal">Добавить
                        в корзину</div>
                </a>
                <div class="about_product" style="margin-top: 30px;">
                    <?php echo $every['description']; ?>
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