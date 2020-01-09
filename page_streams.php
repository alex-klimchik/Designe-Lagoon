<!DOCTYPE html>
<html lang="en">
<head>

    <title>Потоки</title>
    <?php require_once('block/head.php'); ?>
    <!-- Main CSS for this Page -->
    <link rel="stylesheet" type="text/css" href="css/style-streams.css">

</head>
<body>
<?php require_once('block/spinner.php'); ?> 
<div class="wrapper">
    <!-- Sidebar  -->
    <?php require_once('block/sidebar.php'); ?> 
    <!-- Page Content  -->
    <div class="page-container">

    <?php require_once('block/header.php'); ?> 


        <main>

                    <div class="col-md-12 p-0">
                        <div class="wrap-head-page">
                            <h4>Мои потоки</h4>
                            <div>
                                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-cogs set-fa" aria-hidden="true"></i>  Управление ресурсами</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true"><div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Управление ресурсами</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div><div class="modal-body">
                                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-plus set-fa" aria-hidden="true"></i>Добавить новый Ресурс</button>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="bd">

                            <div class="table-responsive">
                                <table class="table-striped table-streams">
                                    <thead>
                                    <tr>
                                        <th style="text-align: left;">Ссылка</th>
                                        <th>Источник</th>
                                        <th>Название</th>
                                        <th></th>
                                        <th>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position: relative; padding-right: 35px;">Офферы</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </th>
                                        <th>Страница</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td  class="input-offers">
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class=" btn-links" type="button" data-toggle="modal" data-target="#exampleModalLink"><i class="fa fa-link" aria-hidden="true"></i> </button>


                                                    <div class="modal fade" id="exampleModalLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true"><div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLinkLabel">Генерация ссылки</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Ресурс:</label>
                                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                                        <option>Выберите нужный ресурс...</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Ссылка:</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td>Test</td>
                                        <td class="images-offers">
                                            <img src="images/product.png" alt="prod" />
                                        </td>
                                        <td>
                                            <a href="">Name Offers</a>
                                        </td>
                                        <td>
                                            <a href="">Pages</a>
                                        </td>
                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-link" aria-hidden="true"></i></button>
                                            <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-trash-alt" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>


        </main>




    </div>
</div>
</body>
</html>