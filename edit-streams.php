<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Редактирование потока</title>
    <?php require_once('block/head.php'); ?>
    <!-- Main CSS for this Page -->
    <link rel="stylesheet" href="css/edit-streams.css">
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
                <h4 class="c-grey-900 mB-20">Редактирование потока</h4>
                <div class="container-fluid">
                    <div class="bgc-white p-20 bd">
                        <fieldset>
                            <legend>Основные настройки</legend>
                            <div class="form-group name-firstBlock-b">

                                <label>Название</label>

                                <input type="text" class="form-control">
                            </div>
                            <div class="border"></div>
                            <div class="form-group name-twoBlock-b">

                                <label>Выбор партнёра на аутсорсе: <br>
                                   <small>Выбрать если аутсорсинг</small>  </label>
                                <select class="selectpicker form-control" data-live-search="true">
                                <option selected>lagoon</option>
                                <option>test1</option>
                                <option>test2</option>
                            </select>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Страницы</legend>
                            <div class="form-group page-block">

                                <div class="change-domen">
                                    <select class="selectpicker form-control" data-live-search="true">
                                <option selected>Домен не выбран</option>
                                <option>test1</option>
                                <option>test2</option>
                            </select></div>
                                <div class="tabel-lending table-responsive">
                                    <table class="tabel-streams table center table-bordered">
                                        <thead>

                                            <tr>
                                                <th></th>
                                                <th>Название</th>
                                                <th>Ссылка</th>
                                                <th>Тип</th>
                                                <th>CR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck24" name="example24">
                                                        <label class="custom-control-label" for="customCheck24"></label>
                                                    </div>
                                                </td>
                                                <td>Естественное сжигание</td>
                                                <td class="c-blue-500"><a href="https://official.org.ua/slimbiotic-diet-49grn-alx/">https://official.org.ua/slimbiotic-diet-49grn-alx/</a></td>
                                                <td>Адаптивный</td>
                                                <td class="c-deep-orange-500">new</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Прелендинги</legend>
                            <div class="form-group ">

                                <div class="tabel-lending  table-responsive">
                                    <table class="tabel-streams  center table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Название</th>
                                                <th>Ссылка</th>
                                                <th>Тип</th>
                                                <th>CR</th>
                                                <th>PP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck20" name="example20">
                                                            <label class="custom-control-label" for="customCheck20"></label>
                                                    </div>
                                                    </label>
                                </div>
                                </td>
                                <td>Новости Медицины Людмила Сергеевна без формы</td>
                                <td><a href="https://novosti-o-vazhnom.com/slimbiotic-49grn-ludmila-sergeevna-fixed-no-form-alx/">https://novosti-o-vazhnom.com/slimbiotic-49grn-ludmila-sergeevna-fixed-no-form-alx/</a></td>
                                <td>Адаптивный</td>
                                <td class="c-deep-orange-500">new</td>
                                <td class="c-deep-orange-500">new</td>
                                </tr>

                                </tbody>
                                </table>
                            </div>
                    </div>
                    </fieldset>
                    <fieldset>
                        <legend>Домены</legend>
                        <div class="form-group domen-block row">
                            <div class="list-domens col-sm-5 offset-sm-2">

                                <div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckDom1" name="exampleDom1">
                                        <label class="custom-control-label" for="customCheckDom1"><a href="http://officialdoc.com.ua/">http://officialdoc.com.ua/</a></label>
                                    </div>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckDom11" name="exampleDom11">
                                        <label class="custom-control-label" for="customCheckDom11"><a href="http://officialgroup.com.ua/">http://officialgroup.com.ua/</a></label>
                                    </div>
                                </div>
                                <div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckDom2" name="exampleDom2">
                                        <label class="custom-control-label" for="customCheckDom2"><a href="http://sex-story.top/">http://sex-story.top/</a></label>
                                    </div>
                                </div>
                                <div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckDom3" name="exampleDom3">
                                        <label class="custom-control-label" for="customCheckDom3"><a href="http://sex-is.work/">http://sex-is.work/</a></label>
                                    </div>
                                </div>
                                <div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckDom4" name="exampleDom4">
                                        <label class="custom-control-label" for="customCheckDom4"><a href="http://official.org.ua/">http://official.org.ua/</a></label>
                                    </div>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckDom5" name="exampleDom5">
                                        <label class="custom-control-label" for="customCheckDom5"><a href="http://sex-story.top/">http://sex-story.top/</a></label>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="form-group link-page-thenk">

                            <label>Ссылка на страницу спасибо</label>

                            <input type="text" placeholder="ссылка" class="form-control">
                        </div>
                        <div class="border"></div>
                        <div class="form-group link-page-thenk">

                            <label>Ссылка на скрипт</label>

                            <input type="text" placeholder="ссылка" class="form-control">
                        </div>
                        <div class="border"></div>
                        <div class="form-group row">

                            <div class="col-lg-6 col-sm-8 offset-sm-2">
                                <div class="link-script-a1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
                                        <label class="custom-control-label" for="customCheck1">Включить ComeBacker для транзитных страниц</label>
                                    </div>
                                </div>
                                <div class="link-script-a2">
                                    <iframe src="http://official.org.ua/www/float/freeze.html" class="link-frame-a2" id="freeze_frame"></iframe>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="example2">
                                        <label class="custom-control-label" for="customCheck2">Freeze</label>
                                    </div>
                                </div>
                                <div class="link-script-a3">
                                    <iframe src="http://official.org.ua/www/float/popup.html" class="link-frame-a3" id="popup_frame"></iframe>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3" name="example3">
                                        <label class="custom-control-label" for="customCheck3">Popup</label>
                                    </div>
                                </div>
                                <div class="link-script-a4">
                                    <iframe src="http://official.org.ua/www/float/popup_bottom.html" class="link-frame-a4" id="popup_bottom_frame" scrolling="no"></iframe>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4" name="example4">
                                        <label class="custom-control-label" for="customCheck4">Popup bottom (адаптивный поплавок)</label>
                                    </div>
                                </div>
                                <div class="link-script-a5">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5" name="example5">
                                        <label class="custom-control-label" for="customCheck5">Открывать лендинги в новой вкладке</label>
                                    </div>
                                    </divclass="link-script-a1">
                                </div>
                            </div>
                    </fieldset>
                    <div class="border"></div>
                    <fieldset>
                        <legend>Отслеживание и счетчики</legend>
                        <div class="form-group tracking-and-counters">


                            <label>№ Счетчика Метрики</label>
                            <input type="text" placeholder="0" class="form-control">
                        </div>
                        <div class="border"></div>
                        <div class="form-group tracking-and-counters">

                            <label>№ Счетчика Mail.ru</label>

                            <input type="text" placeholder="0" class="form-control">
                        </div>
                        <div class="border"></div>
                        <div class="form-group tracking-and-counters">

                            <label>№ Счетчика Google</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="border"></div>

                        <div class="form-group tracking-and-counters">

                            <label>Facebook pixe</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="border"></div>
                    </fieldset>
                    <fieldset>
                        <legend>Настройки</legend>
                        <div class="form-group settings-blocks">


                            <label>TrafficBack URL</label>

                            <input type="text" class="form-control">
                        </div>
                        <div class="border"></div>
                        <div class="form-group settings-blocks">

                            <label>TrafficBack URL</label>
                            <input type="text" class="form-control">
                            <a href="javascript:void(0);" id="postback_inform">Информация</a>
                        </div>
                        <div class="inf-bottom hide">

                            <div class="slide_descr">
                                Параметр PostBack URL будет полезен, если Вам необходимо в автоматическом режиме получать информацию о совершенной конверсии. Например в случае если Вы ведете учет конверсий в сторонней системе статистики или отслеживаете конверсии на источниках трафика.
                                <br><br> PostBack запрос будет отправлен на указанный адрес методом POST. Для передачи параметров в запрос, Вы можете использовать макросы указанные ниже.
                                <br><br> Пример PostBack ссылки для передачи суммы заработока и субаккаунта:
                                <br><br> http://example.com/mystat.php?myprofit={amount}
                                <br><br> В момент перехода макрос {amount} будут заменен на соответствующее значения.


                                <br><br><b>Макросы</b><br><br>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><i>{flow_id}</i></td>
                                            <td>ID потока</td>
                                        </tr>
                                        <tr>
                                            <td><i>{ip}</i></td>
                                            <td>IP лида</td>
                                        </tr>
                                        <tr>
                                            <td><i>{date}</i></td>
                                            <td>Дата и время (UNIX Epoch/timestamp)</td>
                                        </tr>
                                        <tr>
                                            <td><i>{goal_id}</i></td>
                                            <td>ID цели</td>
                                        </tr>
                                        <tr>
                                            <td><i>{goal_name}</i></td>
                                            <td>Название цели</td>
                                        </tr>
                                        <tr>
                                            <td><i>{amount}</i></td>
                                            <td>Прибыль с заявки</td>
                                        </tr>
                                        <tr>
                                            <td><i>{offer_id}</i></td>
                                            <td>ID оффера</td>
                                        </tr>
                                        <tr>
                                            <td><i>{offer_name}</i></td>
                                            <td>Название оффера</td>
                                        </tr>
                                        <tr>
                                            <td><i>{order_id}</i></td>
                                            <td>ID заказа</td>
                                        </tr>
                                        <tr>
                                            <td><i>{status}</i></td>
                                            <td>Статус заказа (hold | submit | decline | double)</td>
                                        </tr>
                                        <tr>
                                            <td><i>{vcode}</i></td>
                                            <td>Уникальный ID клика</td>
                                        </tr>
                                        <tr>
                                            <td><i>{sub1}</i></td>
                                            <td>Суб1</td>
                                        </tr>
                                        <tr>
                                            <td><i>{sub2}</i></td>
                                            <td>Суб2</td>
                                        </tr>
                                        <tr>
                                            <td><i>{sub3}</i></td>
                                            <td>Суб3</td>
                                        </tr>
                                        <tr>
                                            <td><i>{sub4}</i></td>
                                            <td>Суб4</td>
                                        </tr>
                                        <tr>
                                            <td><i>{sub5}</i></td>
                                            <td>Суб5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Информация</legend>
                        <div class="form-group row">
                            <div class="col-sm-8 offset-sm-2">
                                Для того, чтобы добавить к примеру utm-метки к странице перехода, нужно всего-лишь к выданной вам URL вставить нужную строку после слэша. <br> Пример: <b>http://on-the.work/7sah7/</b>?utm_sourse=direct.yandex.ru&amp;utm_term={keyword}
                            </div>
                        </div>
                        <div class="border"></div>
                        <div class="form-group row">
                            <div class="col-sm-8 offset-sm-2">
                                <b>Субаккаунты</b><br>Чтобы воспользоваться субаккаунтами, нужно к вашей ссылке после слеша вставить
                                <br><u>?data1=</u>sub1&amp;<u>data2=</u>sub2. Пример: http://lagoon.me/s7J71/?data1=test&amp;data2=test2
                            </div>
                        </div>
                    </fieldset>
                    <div class="border"></div>
                    <div class="footer-block">
                        <button type="submit" class="btn btn-info btn-go">Редактировать</button>
                    </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- /.page-container  -->
    </div>
    <!-- /.wrapper -->
    <script>
        $(document).ready(function() {
            $("#postback_inform").click(function() {
                $(".inf-bottom ").toggleClass("hide");
            });
        });
    </script>
</body>

</html>