<!DOCTYPE html>
<html lang="en">

<head>
    <title>Тикеты</title>
    <?php require_once('block/head.php'); ?>
    <!-- Bootstrap DATAPICKER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" />
    <!-- Main CSS for this Page -->
    <link rel="stylesheet" type="text/css" href="css/style-tickets.css">
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
            <div class="col-md-12 p-0">

              <ul id="tabs" class="ticket-tab nav nav-tabs">
                <li class="nav-item">
                  <a href="" data-target="#open-tickets" data-toggle="tab"
                  class="nav-link tick-tab small text-uppercase active">Открытые</a></li>
                  <li class="nav-item">
                    <a href="" data-target="#exit-tickets" data-toggle="tab" class=" tick-tab nav-link small text-uppercase">Закрытые</a>
                  </li>
                  <button type="button" class="btn-new-ticket btn" data-toggle="modal" data-target="#exampleModalTickets">
                   <i class="fa fa-plus tic-fa" aria-hidden="true"></i>Создать тикет</button>
                 </ul>

                 <div id="tabsContent" class="tab-content">

                   <!-- ====== Tab - OPEN TICKETS  ======= -->

                   <div id="open-tickets" class="tab-pane fade active show">

                    <div class="head-line-ticket">
                      <h4>Открытые тикеты</h4>
                    </div>

                    <div class="body-open-tickets">
                      <div class="bd">
                       <div class="table-tickets-wrap">
                        <table class="table-tickets" >
                         <thead>
                          <tr>
                           <th>
                             <label>
                               <input type="text" class="dateselect" required="required"/>
                               <span>Дата</span>
                             </label>
                           </th>
                           <th>Тема</th>
                           <th>Сообщение</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td>21.12.2019</td>
                           <td><span> Aliquam sem et tortor consequat id porta nibh venenatis porta nibh venenatis</span></td>
                           <td>
                             <span class="message-info">Message  Aliquam sem et tortor consequat id porta nibh venenatis cras. In hac habitasse platea dictumst</span>
                             <button type="button" class="btn-details btn" data-toggle="modal" data-target="#exampleModalTicketInfo">Подробнее</button>
                           </td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
             <!-- ====== Tab - EXIT TICKETS  ======= -->

             <div id="exit-tickets" class="tab-pane fade">
              <div class="head-line-ticket">
                <h4>Закрытые тикеты</h4>
              </div>
              <div class="body-open-tickets">
               <div class="bd">
                 <div class="table-responsive">
                  <table class="table-tickets">
                   <thead>
                    <tr>
                     <th>
                       <label>
                         <input type="text" class="dateselect" required="required"/>
                         <span>Дата</span>
                       </label>
                     </th>
                     <th>Тема</th>
                     <th>Сообщение</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>21.12.2019</td>
                     <td><span> Aliquam sem et tortor consequat id porta nibh venenatis</span></td>
                     <td>
                       <span class="message-info">Message  Aliquam sem et tortor consequat id porta nibh venenatis cras. In hac habitasse platea dictumst</span>
                       <button type="button" class="btn-details btn" data-toggle="modal" data-target="#exampleModalTicketInfo">Подробнее</button>
                     </td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       <!-- ====== THE END Tab - EXIT TICKETS  ======= -->
     </div>

     <!-- ===== Modal tiket Add===== -->

     <div>

      <div class="modal fade" id="exampleModalTickets" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true"><div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Новый тикет</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <div class="content-new-ticket">
                <form>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Тема</label>
                    <input type="text" class="form-ticket form-control" id="formTicketTopic" placeholder="" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Сообщение</label>
                    <textarea class="form-ticket form-control" id="formTicketMessage" rows="3" required></textarea>
                  </div>
                </form>
              </div>
              <button type="submit" class="btn btn-outline-secondary btn-ticket" data-toggle="modal" data-target="#exampleModalTicketsAdd">

                <i class="fa fa-plus tic-fa" aria-hidden="true"></i>Добавить новый тикет</button>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-purple" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script>
            $(function() {
                $('.dateselect').datepicker({
                    format: 'mm/dd/yyyy',
                    // startDate: '-3d'
                });
            });
        </script>

</body>

</html>