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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-offers.css">

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
            <div class="row">
                <div class="wrap-head-page">
                    <h4>Офферы</h4>
                </div>
                <div class="col-md-12">

                    <ul id="tabs" class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#all-offers" data-toggle="tab"
                               class="nav-link small text-uppercase active">Все офферы
                                <div class="peer2"><span class="badge badge-pill bgc-deep-purple-50 c-deep-purple-700">+99</span></div></a>
                        </li>
                        <li class="nav-item"><a href="" data-target="#my-offers" data-toggle="tab"
                                                class="nav-link small text-uppercase">Мои офферы
                            <div class="peer2"><span class="badge badge-pill bgc-amber-50 c-amber-700">5</span></div>
                        </a></li>
                        <li class="nav-item"><a href="" data-target="#new-offers" data-toggle="tab"
                                                class="nav-link small text-uppercase">Новые офферы
                            <div class="peer2"><span class="badge badge-pill bgc-green-50 c-green-700">12</span></div>
                        </a></li>
                    </ul>
                    <br>
                    <div id="tabsContent" class="tab-content">

                        <!--   Tab - все офферы-->

                        <div id="all-offers" class="tab-pane fade active show">
                            <div class="head-tab-info">
                                <div class="form-group">
                                    <select class="selectpicker" id="allOffersCategory" data-live-search="true" >
                                        <option>Категория</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-style selectpicker" id="allOffersProduct" data-live-search="true">
                                        <option>Категория товара</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-style selectpicker" id="allOffersCountry" data-live-search="true">
                                        <option>Страна</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-style selectpicker" id="allOffersPrice" data-live-search="true">
                                        <option>Цена</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <!-- Search form -->
                                <form class="form-inline md-form form-sm active-cyan active-cyan-2">
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                    <input class="form-style form-control-sm ml-3 w-75" type="text" placeholder="Поиск"
                                           aria-label="Search">
                                </form>
                            </div>

                            <div class="body-tab-offers">
                                <div class="bgc-white bd">

                                        <table class="table-striped table-streams">
                                            <thead>
                                            <tr>
                                                <th colspan="2" >Название</th>
                                                <th>Цель</th>
                                                <th>Гео</th>
                                                <th>EPC</th>
                                                <th>Approve</th>
                                                <th>Действия</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="images-offers">
                                                  <a href="page-offer-info.php">
                                                    <img src="images/product.png" alt="prod"/>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="page-offer-info.php">Name Offers</a>
                                                </td>
                                                <td>Подтверждённая заявка</td>
                                                <td>
                                                    <table class="table-price">
                                                        <tr>
                                                            <th>Страна</th>
                                                            <th>Цена</th>
                                                            <th>Выплата</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="images/ukr.png" alt="Флаг"/>
                                                                <span class="pl-2">Украина</span>
                                                            </td>
                                                            <td>
                                                                <span>0</span>
                                                                <span>грн</span>
                                                            </td>
                                                            <td>
                                                                <span>700</span>
                                                                <span>руб</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>625.14</td>
                                                <td>

                                                    <a href="">n/a</a>
                                                </td>
                                                <td class="setting-offers">
                                                    <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-random"
                                                                                                                    aria-hidden="true"></i></button>
                                                    <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-trash-alt" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                </div>
                            </div>
                        </div>

                        <!--   Tab - мои офферы-->


                        <div id="my-offers" class="tab-pane fade">

                            <div class="head-tab-info">
                                <div class="form-group">
                                    <select class="selectpicker"  id="myOffersCategory" data-live-search="true" >
                                        <option>Категория</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-style selectpicker" id="myOffersProduct" data-live-search="true">
                                        <option>Категория товара</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-style selectpicker" id="myOffersCountry" data-live-search="true">
                                        <option>Страна</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-style selectpicker" id="myOffersPrice" data-live-search="true">
                                        <option>Цена</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <!-- Search form -->
                                <form class="form-inline md-form form-sm active-cyan active-cyan-2">
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                    <input class="form-style form-control-sm ml-3 w-75" type="text" placeholder="Поиск"
                                           aria-label="Search">
                                </form>
                            </div>

                            <div class="body-tab-offers">
                                <div class="bgc-white bd">
                                    <div class="table-responsive">
                                        <table class="table-striped table-streams">
                                            <thead>
                                            <tr>
                                                <th colspan="2" >Название</th>
                                                <th>Цель</th>
                                                <th>Гео</th>
                                                <th>EPC</th>
                                                <th>Approve</th>
                                                <th>Действия</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="images-offers">
                                                    <img src="images/product.png" alt="prod"/>
                                                </td>
                                                <td>
                                                    <a href="">Name Offers</a>
                                                </td>
                                                <td>Подтверждённая заявка</td>
                                                <td>
                                                    <table class="table-price">
                                                        <tr>
                                                            <th>Страна</th>
                                                            <th>Цена</th>
                                                            <th>Выплата</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="images/ukr.png" alt="Флаг"/>
                                                                <span>Украина</span>
                                                            </td>
                                                            <td>
                                                                <span>0</span>
                                                                <span>грн</span>
                                                            </td>
                                                            <td>
                                                                <span>700</span>
                                                                <span>руб</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>625.14</td>
                                                <td>
                                                    <a href="">n/a</a>
                                                </td>
                                                <td class="setting-offers">
                                                    <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-random"
                                                                                                                    aria-hidden="true"></i></button>
                                                    <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-trash-alt" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--   Tab - новые офферы-->

                        <div id="new-offers" class="tab-pane fade">

                            <div class="head-tab-info">
                                <div class="form-group">
                                    <select class="selectpicker"  id="newOffersCategory" data-live-search="true" >
                                        <option>Категория</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-style selectpicker" id="newOffersProduct" data-live-search="true">
                                        <option>Категория товара</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-style selectpicker" id="newOffersCountry" data-live-search="true">
                                        <option>Страна</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-style selectpicker" id="newOffersPrice" data-live-search="true">
                                        <option>Цена</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <!-- Search form -->
                                <form class="form-inline md-form form-sm active-cyan active-cyan-2">
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                    <input class="form-style form-control-sm ml-3 w-75" type="text" placeholder="Поиск"
                                           aria-label="Search">
                                </form>
                            </div>

                            <div class="body-tab-offers">
                                <div class="bgc-white bd">
                                    <div class="table-responsive">
                                        <table class="table-striped table-streams">
                                            <thead>
                                            <tr>
                                                <th colspan="2" >Название</th>
                                                <th>Цель</th>
                                                <th>Гео</th>
                                                <th>EPC</th>
                                                <th>Approve</th>
                                                <th>Действия</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="images-offers">
                                                    <img src="images/product.png" alt="prod"/>
                                                </td>
                                                <td>
                                                    <a href="">Name Offers</a>
                                                </td>
                                                <td>Подтверждённая заявка</td>
                                                <td>
                                                    <table class="table-price">
                                                        <tr>
                                                            <th>Страна</th>
                                                            <th>Цена</th>
                                                            <th>Выплата</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="images/ukr.png" alt="Флаг"/>
                                                                <span>Украина</span>
                                                            </td>
                                                            <td>
                                                                <span>0</span>
                                                                <span>грн</span>
                                                            </td>
                                                            <td>
                                                                <span>700</span>
                                                                <span>руб</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>625.14</td>
                                                <td>
                                                    <a href="">n/a</a>
                                                </td>
                                                <td class="setting-offers">
                                                    <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-random"
                                                                                                                    aria-hidden="true"></i></button>
                                                    <button type="button" class="btn-mini btn-outline-secondary"><i class="fa fa-trash-alt" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </main>

    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
</body>
</html>