<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lagoon</title>
 
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


    <link rel="stylesheet" href="icon/themify-icons.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="icon/ie7/ie7.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/finance.css">
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

                <div class="gap-20 bd w-100 bgc-white p-20">
                    <h4 class="c-grey-900 mB-20">Выплаты, заказанные вебмастерами</h4>
                    <table id="dataTable" class="table table-bordered mainTable table-hover">
                        <thead>
                            <tr>
                                <th>Дата</th>
                                <th>User ID</th>
                                <th>Тип кошелька</th>
                                <th>Счет</th>
                                <th>Сумма</th>
                                <th>Оплачен</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:55</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-12 12:33:54</td>
                                <td>699</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-11 11:32:50</td>
                                <td>125</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-10 12:33:55</td>
                                <td>153</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-9 12:33:55</td>
                                <td>535</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-12-8 12:33:55</td>
                                <td>412</td>
                                <td>WebMoney</td>
                                <td>R333444555111</td>
                                <td>46650</td>
                                <td>Нет</td>
                                <td>
                                    <button type="button" class="btn btn-info">Тикет</button>
                                    <button type="button" class="btn btn-success">Оплатить</button>
                                    <button type="button" class="btn btn-danger">Отменить</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/fh-3.1.6/datatables.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/finance.js"></script>

</body>

</html>