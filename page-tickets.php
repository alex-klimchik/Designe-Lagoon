<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-tickets.css">

    <script type="text/javascript" src="js/script.js"></script>

    <!-- link rel="stylesheet" href="icon/demo-files/demo.css"> -->
    <link rel="stylesheet" href="icon/themify-icons.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="icon/ie7/ie7.css">
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
        <div class="container-fluid py-4">
            <div class="row">
<!--                <div class="wrap-head-page">-->
<!--                    <h4 class="c-grey-900">Офферы</h4>-->
<!--                </div>-->
                <div class="col-md-12">

                    <ul id="tabs" class="ticket-tab nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#all-offers" data-toggle="tab"
                               class="nav-link small text-uppercase active">Открытые</a></li>
                        <li class="nav-item">
                            <a href="" data-target="#my-offers" data-toggle="tab" class="nav-link small text-uppercase">Закрытые</a>
                        </li>

                        <div>
                            <button type="button" class=" btn-ticket btn" data-toggle="modal" data-target="#exampleModalTickets">
                                <i class="fa fa-plus tic-fa" aria-hidden="true"></i>Создать тикет</button>
                            <div class="modal fade" id="exampleModalTickets" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true"><div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Управление ресурсами</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                    </div><div class="modal-body">
                                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalTickets">
                                        <i class="fa fa-plus set-fa" aria-hidden="true"></i>Добавить новый Ресурс</button>
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>



                    </ul>


                    <div id="tabsContent" class="tab-content">

                        <!--   Tab - все офферы-->

                        <div id="all-offers" class="tab-pane fade active show">

                            <div class="head-line-ticket">
                                <h4>Открытые тикеты</h4>
                            </div>

                        </div>

                        <div id="my-offers" class="tab-pane fade">
                            <div class="head-line-ticket">
                                <h4>Закрытые тикеты</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        </main>


    </div>
</div>
</body>
</html>