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



                        <div class="col-12 p-20 graf">
                            <div class="bgc-white p-20 bd">
                                <h6>Ваша статистика</h6>
                                <div class="chart-container">
                                  <canvas id="myLineChart"></canvas>
                                </div>
                            </div>

             </main>
            </div>
            </div>



    <script>

        var ctx = document.getElementById('myLineChart').getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
                datasets: [
                    {
                        label: "Активные",
                        borderColor: "rgba(255,152,0,1)",
                        backgroundColor: "rgba(255,152,0, .2)",
                        data: [38, 40, 45, 54, 63, 69, 72, 73, 70, 60, 51, 43]
                    },
                    {
                        label: "Заблоченые",
                        borderColor: "rgba(244,67,54,1)",
                        backgroundColor: "rgba(244,67,54, .2)",
                        data: [3.907, 7.943, 7.848, 9.284, 9.263, 9.819, 3.894, 8.287, 9.552, 6.855, 2.865, 1.341]
                    }
                ]
            },

            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        gridLines: {
                            lineWidth: 0
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 90,
                            stepSize: 10
                        }
                    }]

                }

                // ///Boolean - Whether grid lines are shown across the chart
                // scaleShowGridLines : true,
                //
                // //String - Colour of the grid lines
                // scaleGridLineColor : "rgba(0,0,0,.05)",
                //
                // //Number - Width of the grid lines
                // scaleGridLineWidth : 1,
                //
                // //Boolean - Whether to show horizontal lines (except X axis)
                // scaleShowHorizontalLines: true,
                //
                // //Boolean - Whether to show vertical lines (except Y axis)
                // scaleShowVerticalLines: false,
                //
                // //Boolean - Whether the line is curved between points
                // bezierCurve : true,
                //
                // //Number - Tension of the bezier curve between points
                // bezierCurveTension : 0.4,
                //
                // //Boolean - Whether to show a dot for each point
                // pointDot : true,
                //
                // //Number - Radius of each point dot in pixels
                // pointDotRadius : 4,
                //
                // //Number - Pixel width of point dot stroke
                // pointDotStrokeWidth : 1,
                //
                // //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                // pointHitDetectionRadius : 20,
                //
                // //Boolean - Whether to show a stroke for datasets
                // datasetStroke : true,
                //
                // //Number - Pixel width of dataset stroke
                // datasetStrokeWidth : 2,
                //
                // //Boolean - Whether to fill the dataset with a colour
                // datasetFill : true,
                //
                // //String - A legend template
                // legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

            }
        });

    </script>






</body>

</html>