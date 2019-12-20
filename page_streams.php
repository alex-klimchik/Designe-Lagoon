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
    <link rel="stylesheet" type="text/css" href="css/style-streams.css">

    <script type="text/javascript" src="js/script.js"></script>

    <!-- link rel="stylesheet" href="icon/demo-files/demo.css"> -->
    <link rel="stylesheet" href="icon/themify-icons.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="icon/ie7/ie7.css">
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav class="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-link td-n" href="index.html">
                <div class="peers ai-c fxw-nw">
                    <div class="peer">
                        <div class="logo"><img src="icon/lagoon.png" alt=""></div>
                    </div>
                    <!--   <div class="peer peer-greed">
                          <p>Lagoon</p>
                      </div> -->
                </div>
            </a>
        </div>

        <ul class="list-unstyled components">

            <li>
                <a class="sidebar-link" href="index.html">
                    <span class="icon-holder"><i class="c-blue-500 ti-user"></i> </span>
                    <span class="title">Профиль</span></a>
            </li>

            <li>
                <a class="sidebar-link" href="email.html">
                    <span class="icon-holder"><i class="c-brown-500 ti-bar-chart"></i> </span>
                    <span class="title">Статистика</span></a>

            <li>
                <a class="sidebar-link" href="page_streams.html">
                    <span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span>
                    <span class="title">Потоки</span></a>

            </li>
            <li>
                <a class="sidebar-link" href="page-offers.html">
                    <span class="icon-holder"><i class="c-deep-orange-500 ti-calendar"></i> </span>
                    <span class="title">Офферы</span></a>

            </li>
            <li>
                <a class="sidebar-link" href="chat.html">
                    <span class="icon-holder"><i class="c-deep-purple-500 ti-comment-alt"></i> </span>
                    <span class="title">Финансы</span></a>

            </li>
            <li>
                <a class="sidebar-link" href="page-tickets.html">
                    <span class="icon-holder"><i class="c-indigo-500 ti-bar-chart"></i> </span>
                    <span class="title">Тикеты</span></a>

            </li>
            <li>
                <a class="sidebar-link" href="forms.html">
                    <span class="icon-holder"><i class="c-light-blue-500 ti-pencil"></i> </span>
                    <span class="title">Настройки</span></a>

            </li>
            <li>
                <a class="sidebar-link" href="ui.html">
                    <span class="icon-holder"><i class="c-pink-500 ti-palette"></i> </span>
                    <span class="title">Топ</span></a>
            </li>

        </ul>


    </nav>

    <!-- Page Content  -->
    <div class="page-container">

        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">

                <ul class="nav navbar-nav ml-auto">

                    <button type="button" id="sidebarCollapse" class="btn-sidebar">
                        <i class="ti-menu"></i>
                        <!-- <span>Toggle Sidebar</span> -->
                    </button>

                    <li class="nav-item"><a class="nav-link"><i class="far fa-user-circle"></i> fancpa@lagoon.me</a></li>
                    <li class="nav-item"><a class="nav-link"><i class="ti-money"></i> Баланс: 8 500 $</a></li>
                    <li class="nav-item"><a class="nav-link"><i class="ti-money"></i> Холд: 220 $</a></li>
                    <li class="nav-item"><a class="nav-link"><i class="ti-alarm-clock"></i> В ожидании: 15230 $</a></li>


                </ul>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link"><i class="ti-arrow-right"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="ti-shift-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


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