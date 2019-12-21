<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lagoon</title>
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/fh-3.1.6/datatables.min.css" />

    <!-- link rel="stylesheet" href="icon/demo-files/demo.css"> -->
    <link rel="stylesheet" href="icon/themify-icons.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="icon/ie7/ie7.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/statistic.css">

</head>

<body>
<?php require_once('block/spinner.php'); ?> 
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php require_once('block/sidebar.php'); ?> 

        <!-- Page Content  -->
        <div class="page-container">

        <?php require_once('block/header.php'); ?> 
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <nav class="w-100 bgc-white">
                        <div class="nav nav-tabs" id="nav-myTab">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-data">Дата</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-time">Время</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-subid">SubID</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-offer">Оффер</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-streams">Потоки</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-lendings">Лендинги</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-prelendings">Прелендинги</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-pplusl">П&nbsp;+&nbsp;Л</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-sources">Источники</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-browser">Браузер</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-oc" aria-controls="nav-oc">ОС</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-country">Страна</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-areas">Области</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-scripts">Скрипты</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-actions">Действия</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-floor">Пол</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-age">Возраст</a>
                        </div>
                        <!-- /#nav-myTab -->
                    </nav>
                    <div class="gap-20 bd w-100 bgc-white p-20 bdtn">
                        <div class="row form-inputs">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Оффер">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Поток">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Лендинг">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Прелендинг">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Источник">
                            </div>
                        </div>
                        <!-- /.row.form-inputs -->
                        <div class="row form-inputs">
                            <div class="form-group ">
                                <label for="SubID1">SubID1</label>
                                <input id="SubID1" type="password" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="SubID2">SubID2</label>
                                <input id="SubID2" type="password" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="SubID3">SubID3</label>
                                <input id="SubID3" type="password" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="SubID4">SubID4</label>
                                <input id="SubID4" type="password" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="SubID5">SubID5</label>
                                <input id="SubID5" type="password" class="form-control">
                            </div>
                        </div>
                        <!-- /.row.form-inputs -->
                        <div class="row form-inputs dop-inputs dop-inputs_inactive">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="ОС">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group fullSet">
                                <input type="text" class="form-control" placeholder="Партнеры">
                                <div class="fullSet-btn">
                                    <button type="button" class="btn btn-success">
                                        + all
                                    </button>
                                    <button type="button" class="btn btn-danger" style="display: none">
                                        - all
                                    </button>
                                </div>
                                <!-- /.fullSet-btn -->
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Вебы">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.row.form-inputs -->
                        <div class="btns">
                            <div class="btns-main float-left">
                                <button type="button" class="btn btn-primary">Поиск</button>
                                <button type="button" class="btn btn-secondary">Сброс</button>
                                <button type="button" class="btn btn-light float-right btn-addInputs">
                                    <i class="c-light-dark-500 ti-arrow-down" style="vertical-align: middle;"></i>
                                </button>
                            </div>
                            <!-- /.btns-main -->
                        </div>
                        <!-- /.btns -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.gap-20.bd.w-100.bgc-white.p-20.bdtn -->
                    <div class="gap-20 w-100 p-20">
                        <div class="row">
                            <div class="col-3 form-group" style="margin-bottom: 0;">
                                <input type="text" class="form-control" placeholder="Дата">
                            </div>
                            <!-- /.form-group -->
                            <div class="current-value">
                                <button type="button" class="btn btn-light active">₽</button>
                                <button type="button" class="btn btn-light">$</button>
                            </div>
                            <!-- /.current-value -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.gap-20.w-100.p-20-->
                    <div class="gap-20 bd w-100 bgc-white p-20">
                        <table id="dataTable" class="table table-bordered mainTable table-hover">
                            <thead>
                                <tr>
                                    <th colspan="3">Трафик</th>
                                    <th colspan="9">Коэффициенты</th>
                                    <th colspan="5">Конверсии</th>
                                    <th colspan="4">Финансы</th>
                                </tr>
                                <tr>
                                    <th>Дата</th>
                                    <th>Клики</th>
                                    <th>Уники</th>
                                    <th>Пробитие</th>
                                    <th>Ratio</th>
                                    <th>CR</th>
                                    <th>CPC</th>
                                    <th>EPC</th>
                                    <th>Approve</th>
                                    <th>CPL</th>
                                    <th>CPS</th>
                                    <th>Выкуп %</th>
                                    <th><i class="fa fa-bars"></i></th>
                                    <th><i class="fa fa-check-circle-o"></i></th>
                                    <th><i class="fa fa-clock-o"></i></th>
                                    <th><i class="fa fa-ban"></i></th>
                                    <th><i class="fa fa-trash"></i></th>
                                    <th><i class="fa fa-bars"></i> <i class="fa fa-rub"></i></th>
                                    <th><i class="fa fa-check-circle-o"></i> <i class="fa fa-rub"></i></th>
                                    <th><i class="fa fa-clock-o"></i> <i class="fa fa-rub"></i></th>
                                    <th><i class="fa fa-ban"></i> <i class="fa fa-rub"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10.12.2019</td>
                                    <td>18000</td>
                                    <td>18000</td>
                                    <td>10.10%</td>
                                    <td>12</td>
                                    <td>10.10%</td>
                                    <td>12.1</td>
                                    <td>10.10%</td>
                                    <td>0R ~ 0$</td>
                                    <td>110R~110$</td>
                                    <td>10%</td>
                                    <td>788</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                </tr>
                                <tr>
                                    <td>09.12.2019</td>
                                    <td>18000</td>
                                    <td>18000</td>
                                    <td>10.10%</td>
                                    <td>12</td>
                                    <td>10.10%</td>
                                    <td>12.1</td>
                                    <td>10.10%</td>
                                    <td>0R ~ 0$</td>
                                    <td>110R~110$</td>
                                    <td>10%</td>
                                    <td>788</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                    <td>250000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Всього</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.gap-20.bd.w-100.bgc-white.p-20-->
                </div>
                <!-- /#mainContent -->
            </main>
        </div>
        <!-- /.page-container -->
    </div>
    <!-- /.wrapper -->



    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/fh-3.1.6/datatables.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/statistic.js"></script>

</body>

</html>