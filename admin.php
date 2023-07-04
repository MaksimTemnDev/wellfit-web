<?php include("shapka.php") ?>
<!-- Содержимое страницы-->
<div class="container" style="margin-top: 200px; margin-bottom: 200px;">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <!-- Login Form -->
            <form>
                <div class="row">
                    <div style="display: border-box; margin-left: 40px; margin-right: 40px;" class="col-md-4 mx-auto">
                        <div class="h2" style="margin-left: 120px; margin-bottom: 40px; color: #fff;">Вход в систему</div>
                        <input type="text" id="login" class="fadeIn second"
                            style="width:100%; margin-left: 40px; margin-right: 40px; margin-bottom: 20px;" name="login"
                            placeholder="login">
                        <input type="text" id="password" class="fadeIn third"
                            style="width:100%; margin-left: 40px; margin-right: 40px;  margin-bottom: 20px;"
                            name="login" placeholder="password">
                        <input type="submit" class="red-btn_sm" style="margin-left: 170px;" value="Log In">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Конец содержимого страницы-->
<?php include("footer.php") ?>