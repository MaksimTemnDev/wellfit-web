<?php include("shapka.php");
require_once("database.php");
$bd = new DB;
$bd->__construct($pdo);
if (!empty($_POST)) {
    if (isset($_POST['path'])) {
        $params = [
            'id' => 0,
            'img' => $_POST['path'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'prices' => $_POST['prices'],
            'periods' => $_POST['periods']
        ];
    } else {
        $params = [0];
    }

    if (isset($_GET)) {
        $get_cont = (object) $_GET;
        $get_id = $get_cont->id;
    }

    //create
    if (isset($_POST['add'])) {
        $sql = "INSERT INTO `products` (`id`, `img`, `title`, `description`, `periods`, `prices`) VALUES (:id, :img, :title, :description, :periods, :prices)";
        $bd->query($sql, $params);
        unset($get_id);
        unset($_POST['add']);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    //update
    if (isset($_POST['edit'])) {
        $params['id'] = $get_id;
        $sql = "UPDATE `products` SET `img`= :img,`title`= :title,`description`= :description,`periods`= :periods,`prices`= :prices WHERE id = :id";
        $bd->query($sql, $params);
        unset($get_id);
        unset($_POST['edit']);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    //delete
    if (isset($_POST['delete'])) {
        $drop = ['id' => $get_id];
        $sql = "DELETE FROM `products` WHERE id = :id";
        $bd->query($sql, $drop);
        unset($get_id);
        unset($_POST['delete']);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
//read
$update = $bd->getAll("products");
?>
<!-- Содержимое страницы-->
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#create">
                <span class="glyphicon glyphicon-plus-sign"></span>
            </button>
            <table class="table table-striped table-hover">
                <thead class="th-dark">
                    <th>id</th>
                    <th>img</th>
                    <th>description</th>
                    <th>title</th>
                    <th>prices</th>
                    <th>periods</th>
                    <th>action</th>
                </thead>
                <tbody>
                    <?php foreach ($update as $res) {
                        $up = (object) $res;
                        ?>
                        <tr>
                            <td>
                                <?php echo $up->id ?? 'None'; ?>
                            </td>
                            <td>
                                <?php echo $up->img ?? 'None'; ?>
                            </td>
                            <td>
                                <?php echo $up->title ?? 'None'; ?>
                            </td>
                            <td>
                                <?php echo $up->description ?? 'None'; ?>
                            </td>
                            <td>
                                <?php echo $up->prices ?? 'None'; ?>
                            </td>
                            <td>
                                <?php echo $up->periods ?? 'None'; ?>
                            </td>
                            <td><a href="#" data-toggle="modal" data-target="#edit<?php echo $up->id; ?>"><img
                                        src="images/editing.png" width="20px" height="20px" alt=""></a>
                                <a href="#" data-toggle="modal" data-target="#delete<?php echo $up->id; ?>"><img
                                        src="images/delete.png" alt="" width="20px" height="20px"></a>
                            </td>
                        </tr>
                        <!-- Modal edit-->
                        <div class="modal fade" id="edit<?php echo $up->id; ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="?id=<?php echo $up->id; ?>">
                                            <div class="form-group">
                                                <small>путь к изображению</small>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $up->img ?? 'None'; ?>" name="path">
                                            </div>
                                            <div class="form-group">
                                                <small>Заголовок</small>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $up->title ?? 'None'; ?>" name="title">
                                            </div>
                                            <div class="form-group">
                                                <small>Периоды</small>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $up->periods ?? 'None'; ?>" name="periods">
                                            </div>
                                            <div class="form-group">
                                                <small>Описание</small>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $up->description ?? 'None'; ?>" name="description">
                                            </div>
                                            <div class="form-group">
                                                <small>Цены</small>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $up->prices ?? 'None'; ?>" name="prices">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Закрыть</button>
                                        <button type="submit" class="btn btn-primary" name="edit">Сохранить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal delete-->
                        <div class="modal fade" id="delete<?php echo $up->id; ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Удалить запись
                                            <?php echo $up->id; ?>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <form method="post" action="?id=<?php echo $up->id; ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Закрыть</button>
                                        <button type="submit" class="btn btn-danger" name="delete">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal create-->
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить запись</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="CRUD.php">
                        <div class="form-group">
                            <small>путь к изображению</small>
                            <input type="text" class="form-control" name="path">
                        </div>
                        <div class="form-group">
                            <small>Заголовок</small>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <small>Периоды</small>
                            <input type="text" class="form-control" name="periods">
                        </div>
                        <div class="form-group">
                            <small>Описание</small>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="form-group">
                            <small>Цены</small>
                            <input type="text" class="form-control" name="prices">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary" name="add">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Конец содержимого страницы-->
<?php include("footer.php") ?>