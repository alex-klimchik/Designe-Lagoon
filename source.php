<!DOCTYPE html>
<html lang="en">

<head>
    <title>Источники</title>
    <?php require_once('block/head.php'); ?>
    <link type="text/css" rel="StyleSheet" href="css/page-source.css" />
</head>


<body>
    <?php require_once('block/spinner.php'); ?>
    <div class="wrapper">

        <?php require_once('block/sidebar.php'); ?>

        <!-- Page Content  -->
        <div class="page-container">
            <?php require_once('block/header.php'); ?>

            <main>
                <div class="wrap-head-page">
                    <h4 class="c-grey-900">Источники</h4>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#newsource">Добавить</button>
                </div>
                <div class="container-fuild gap-20 bd w-100 bgc-white table-responsive">
                    <table class="table center table-striped">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Дата создания</th>
                                <th>Управление</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="c-blue-500">facebook</td>
                                <td>0000-00-00 00:00:00</td>
                                <td class="setting-offers">
                                    <button type="button" class="btn-mini btn-outline-secondary" data-toggle="modal" data-target="#edit"><i class="fab fa-whmcs"></i></button>
                                    <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="newsource">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Новый источник</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4 titleName ">
                            <p>Название :</p>
                        </div>
                        <div class="col-8"><input class="titleInput " type="text" placeholder="введите название"> </div>


                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn  btn-success" data-dismiss="modal">Сохранить</button>
                </div>

            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Редактирование источника</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4 titleName ">
                            <p>Название :</p>
                        </div>
                        <div class="col-8"><input class="titleInput" type="text" placeholder="введите название"> </div>


                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Редактировать</button>
                </div>

            </div>
        </div>
    </div>

</body>

</html>