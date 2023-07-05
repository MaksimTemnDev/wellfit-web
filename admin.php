<?php include("shapka.php");
require_once("database.php");
$bd = new DB;
$bd->__construct($pdo);
if (!empty($_POST)) {
    $password = $_POST["password"];
    $login = $_POST["login"];
    $params = [
        'id' => 0,
        'login' => $login,
        'password' => $password
    ];
    unset($error);
    $record = $bd->query("SELECT * FROM `admins` WHERE `login` LIKE '$login'");
    if (!empty($record)) {
        if (password_verify($password, '$2y$10$hu.5qCctOsHfu2tdZ9Q3HuOQpDhhnl0ONZbEIaFrhIFiumJFftQue')) {
            header("Location: CRUD.php");
        } else {
            $error = "Неверный пароль";
        }
    } else {
        $error = "Неверный логин";
    }
}
?>
<!-- Содержимое страницы-->
<div class="container" style="margin-top: 200px; margin-bottom: 200px;">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <!-- Login Form -->
            <form action="admin.php" method="post">
                <div class="row">
                    <div style="display: border-box; margin-left: 40px; margin-right: 40px;" class="col-md-4 mx-auto">
                        <div class="h2" style="margin-left: 120px; margin-bottom: 40px; color: #fff;">Вход в систему
                        </div>
                        <input type="text" id="login" class="fadeIn second"
                            style="width:100%; margin-left: 40px; margin-right: 40px; margin-bottom: 20px;" name="login"
                            placeholder="login">
                        <input type="text" id="password" class="fadeIn third"
                            style="width:100%; margin-left: 40px; margin-right: 40px;  margin-bottom: 20px;"
                            name="password" placeholder="password">
                        <div style="margin-left: 40px; font-family: Russo One; color: #ff0000;">
                            <?php if (!empty($error)) {
                                echo $error;
                            } ?>
                        </div>
                        <input type="submit" class="red-btn_sm" style="margin-left: 170px;" value="Log In">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Конец содержимого страницы-->
<?php include("footer.php") ?>