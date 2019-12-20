<!DOCTYPE html>
<html lang="en">
<?php require_once('block/head.php'); ?> 
<body>
  <div class="wrapper">
      
  <?php require_once('block/sidebar.php'); ?> 

        <!-- Page Content  -->
        <div class="page-container">
        <?php require_once('block/header.php'); ?> 
        
             <main>
             	<div class="container-fluid">
             		<div class="row">
             			<div class="col-8">
             				<div class="bgc-white p-20 bd">
             					<h6>Активность за сутки</h6>
             					<div class="mT-30">
             						<ul class="test-alx d-flex justify-content-center">
                					<li>
                						<a><i class="fas fa-hand-point-up"></i></a>
                						<a>0</a>
                						<a>Клики</a>
                					</li>
                					<li>
                						<a><i class="fas fa-users"></i></a>
                						<a>0</a>
                						<a>Заявки</a>
                					</li>
                					<li>
                						<a><i class="fas fa-check"></i></a>
                						<a>0 $</a>
                						<a>Принято</a>
                					</li>
                					<li>
                						<a><i class="fas fa-lock"></i></a>
                						<a>0 $</a>
                						<a>Холд</a>
                					</li>
                					<li>
                						<a><i class="far fa-clock"></i></a>
                						<a>0 $</a>
                						<a>Ожидает</a>
                					</li>
                					<li>
                						<a><i class="far fa-times-circle"></i></a>
                						<a>0 $</a>
                						<a>Отклонено</a>
                					</li>
                				</ul>
             					</div>
             				</div>
             			</div>
             			<div class="col-4">
             				<div class="bgc-white p-20 bd">
             					<h6>График</h6>
             					
             				</div>
             			</div>
             		</div>

             	</div>
              <div class="container-fluid p-20">
              	<div class="bgc-white p-20 bd">
              		<h6>Ваша статистика</h6>
              		<!-- График --><div id="chart">


<script>


 $(document).ready(function () {


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
 legendSeriesClick: function (e) {
 // остановить событие щелчка элемента серии, так что
 // пользователь нажимает не переключить видимость серии
 e.preventDefault();
 }
 }
 });
 });
 </script><!-- /.График -->
              	</div>
              </div>
            </main>
        </div>
    </div>
</body>
</html>