<!DOCTYPE html>
<html lang="en">

<head>

    <title>Финансы</title>
    <?php require_once('block/head.php'); ?>
    <!--Datatabels-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/fh-3.1.6/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/fh-3.1.6/datatables.min.js"></script>
    <!-- Main CSS for this Page -->
    <link rel="stylesheet" href="css/finance.css">
    <!--JS Page-->
    <script type="text/javascript" src="js/finance.js"></script>

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
                <h4 class="c-grey-900 mB-20">Выплаты, заказанные вебмастерами</h4>
                <div class="gap-20 bd w-100 bgc-white p-20">
                    <table id="dataTable" class="mainTable table table-bordered table-hover">
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
                                    <div class="set-button">
                                        <button type="button" class="btn btn-outline-info">Тикет</button>
                                        <button type="button" class="btn btn-outline-success">Оплатить</button>
                                        <button type="button" class="btn btn-outline-danger">Отменить</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.gap-20.bd.w-100.bgc-white.p-20 -->
            </main>
        </div>
        <!-- /.page-container  -->
    </div>
    <!-- /.wrapper -->


</body>

</html>