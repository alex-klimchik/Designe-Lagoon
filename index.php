<!DOCTYPE html>
<html lang="en">

<head>
<title>Профиль</title>
<?php require_once('block/head.php'); ?>
<!--график-->
<link type="text/css" rel="StyleSheet" href="//bootstraptema.ru/plugins/2016/shieldui/style.css" />
<script src="//bootstraptema.ru/plugins/2016/shieldui/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
 

<body>
    <?php require_once('block/spinner.php'); ?>
    <div class="wrapper">

        <?php require_once('block/sidebar.php'); ?>

        <!-- Page Content  -->
        <div class="page-container">
            <?php require_once('block/header.php'); ?>

            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 col-sm-12 ">
                            <div class="bgc-white p-20 bd">
                                <h6>Активность за сутки</h6>
                                <div class="row pT-20 ">
                                    <div class="col-4 col-md-2 col-sm-2 d-flex flex-column center">
                                        <a><i class="c-deep-purple-500 fas fa-hand-point-up"></i></a>
                                        <a>0</a>
                                        <a>Клики</a>
                                    </div>
                                    <div class="col-4 col-md-2 col-sm-2 d-flex flex-column center">
                                        <a><i class="c-pink-500 fas fa-users"></i></a>
                                        <a>0</a>
                                        <a>Заявки</a>
                                    </div>
                                    <div class="col-4 col-md-2 col-sm-2 d-flex flex-column center">
                                        <a><i class="c-light-blue-500 fas fa-check"></i></a>
                                        <a>0 ₽</a>
                                        <a>Принято</a>
                                    </div>
                                    <div class="col-4 col-md-2 col-sm-2 d-flex flex-column center">
                                        <a><i class="c-deep-orange-500 fas fa-lock"></i></a>
                                        <a>0 ₽</a>
                                        <a>Холд</a>
                                    </div>
                                    <div class="col-4 col-md-2 col-sm-2 d-flex flex-column center">
                                        <a><i class="c-deep-purple-500  far fa-clock"></i></a>
                                        <a>0 ₽</a>
                                        <a>Ожидает</a>
                                    </div>
                                    <div class="col-4 col-md-2 col-sm-2 d-flex flex-column center">
                                        <a><i class="c-pink-500 far fa-times-circle"></i></a>
                                        <a>0 $</a>
                                        <a>Отклонено</a>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="container-fluid p-20 graf">
                            <div class="bgc-white p-20 bd">
                                <h6>Ваша статистика</h6>
                                <!-- График -->
                                <div id="chart">


                                    <script>
                                        $(document).ready(function() {


                                            $("#chart").shieldChart({
                                                theme: "bootstrap",
                                                primaryHeader: {
                                                    text: "График"
                                                },
                                                seriesSettings: {
                                                    area: {
                                                        pointMark: {
                                                            enabled: true
                                                        }
                                                    }
                                                },
                                                axisX: {
                                                    categoricalValues: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"]
                                                },
                                                dataSeries: [{
                                                    seriesType: "area",
                                                    collectionAlias: "Активные",
                                                    data: [48, 50, 55, 64, 73, 79, 82, 83, 80, 70, 61, 53]
                                                }, {
                                                    seriesType: "area",
                                                    collectionAlias: "Заблоченые",
                                                    data: [3.907, 7.943, 7.848, 9.284, 9.263, 9.819, 3.894, 8.287, 9.552, 6.855, 2.865, 1.341]
                                                }],
                                                events: {
                                                    legendSeriesClick: function(e) {
                                                        // остановить событие щелчка элемента серии, так что
                                                        // пользователь нажимает не переключить видимость серии
                                                        e.preventDefault();
                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- /.График -->
                                </div>
                            </div>

             </main>
            </div>
            </div>

</body>

</html>