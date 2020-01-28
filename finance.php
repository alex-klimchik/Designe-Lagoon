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
                <h4 class="c-grey-900 mB-20">Выплаты</h4>
                <div class="gap-20 bd w-100 bgc-white p-20" style="margin-bottom: 20px">
                    <form method=" " action="">
                        <fieldset>
                            <div class="form-group">
                                <label for="wallet">Ваш кошелек</label>
                                <input type="text" id="wallet" class="form-control" name="wallet" placeholder="WMR кошелек отсутствует">
                            </div>
                            <div class="form-group ">
                                <label for="sum">Укажите сумму</label>
                                <input type="text" class="form-control" id="sum" name="sum" placeholder="Сумма">
                                <div class="text-help">
                                    <p>Выплата производится на ваш кошелек WMR, указанный в настройках профиля. Минимальная сумма выплаты - 0</p>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group btn-order">
                            <button type="submit" class="btn btn-primary">Заказать выплату</button>
                        </div>
                    </form>
                </div>
                <div class="gap-20 bd w-100 bgc-white p-20">
                    <div class="table-wrap">
                        <table class="mainTable table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Дата</th>
                                    <th>Способ выплаты</th>
                                    <th>Счет</th>
                                    <th>Сумма</th>
                                    <th>Выплачен</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2019-12-12 12:33:55</td>
                                    <td>WebMoney</td>
                                    <td>R333444555111</td>
                                    <td>46 650</td>
                                    <td>Да</td>
                                </tr>
                                <tr>
                                    <td>2019-12-12 12:33:55</td>
                                    <td>WebMoney</td>
                                    <td>R333444555111</td>
                                    <td>46 650</td>
                                    <td>Да</td>
                                </tr>
                                <tr>
                                    <td>2019-12-12 12:33:55</td>
                                    <td>WebMoney</td>
                                    <td>R111111111111</td>
                                    <td>46 650</td>
                                    <td>Да</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.gap-20.bd.w-100.bgc-white.p-20 -->
            </main>
        </div>
        <!-- /.page-container  -->
    </div>
    <!-- /.wrapper -->


</body>

</html>