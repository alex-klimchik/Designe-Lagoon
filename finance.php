<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lagoon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">

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
                                        <button type="button" class="btn btn-info">Тикет</button>
                                        <button type="button" class="btn btn-success">Оплатить</button>
                                        <button type="button" class="btn btn-danger">Отменить</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.gap-20.bd.w-100.bgc-white.p-20 -->
            </main>
        </div><!-- /.page-container  -->
    </div><!-- /.wrapper -->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/fh-3.1.6/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/finance.js"></script>

</body>

</html>