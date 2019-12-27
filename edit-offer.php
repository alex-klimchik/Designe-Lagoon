<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lagoon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled Bootstrap-Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">

    <!-- Font-Awesom -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="icon/themify-icons.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="icon/ie7/ie7.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <!-- Global CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Main CSS for this Page -->
    <link rel="stylesheet" href="css/edit-offer.css">

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

                <h4 class="c-grey-900 mB-20">Редактирование оффера</h4>
                <div class="bd p-20 bgc-white">

                    <div class="bgc-white">
                        <!-- <h5 class="col-12 c-grey-900 bd">Личные данные</h5> -->
                        <form method="" action="#">
                            <fieldset class="description">
                                <legend>Описание</legend>

                                <div class="form-group col-4">
                                    <label for="title">Название</label>
                                    <input type="text" id="title" class="form-control" name="title" placeholder="Название" required="">
                                </div>
                                <div class="form-group product col-4">
                                    <label for="product">Продукт</label>
                                    <select class="selectpicker form-control" id="product" data-live-search="true">
                                        <option selected>Кому принадлежит оффер?</option>
                                        <option>Нейросистема</option>
                                        <option>Ремакслим</option>
                                    </select>
                                </div>
                                <div class="border"></div>
                                <div class="form-row col-12 price">
                                    <div class="form-group col-2">
                                        <label for="price">Цена (<span style="color: #000">руб</span>)</label>
                                        <input type="text" id="price" class="form-control" name="price">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="country">Страна</label>
                                        <select class="selectpicker form-control" id="country" data-live-search="true">
                                            <option selected>Россия</option>
                                            <option>Украина</option>
                                            <option>Беларусь</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="opacity: 0">.</label>
                                        <button style="display: block" type="button" class="btn btn-danger">
                                            <span class="btn-label" style="padding-right: 5px;"><i class="fa fa-times"></i></span>
                                            Удалить
                                        </button>
                                    </div>
                                    <div class="form-group col-12">
                                        <button style="display: block" type="button" class="btn btn-secondary">
                                            <span class="btn-label" style="padding-right: 5px;"><i class="fa fa-plus-circle"></i></span>
                                            Добавить
                                        </button>
                                    </div>
                                </div>
                                <div class="border"></div>
                                <div class="col-12">
                                    <div>Приватный?</div>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="private" id="inlineRadioYes" value="on">
                                            <label class="form-check-label" for="inlineRadioYes">Да</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="private" id="inlineRadioNo" value="off" checked>
                                            <label class="form-check-label" for="inlineRadioNo">Нет</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border"></div>
                                <div class="col-12">
                                    <div>Adult?</div>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="adult" id="AdultRadioYes" value="on">
                                            <label class="form-check-label" for="AdultRadioYes">Да</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="adult" id="AdultRadioNo" value="off" checked>
                                            <label class="form-check-label" for="AdultRadioNo">Нет</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border"></div>
                                <div class="form-group col-3">
                                    <label for="sale">Sale?</label>
                                    <select class="selectpicker form-control" id="sale" data-live-search="true">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>9</option>
                                    </select>
                                </div>
                                <div class="border"></div>
                                <div class="form-group col-3">
                                    <label for="category">Категория</label>
                                    <select class="selectpicker form-control" id="category" data-live-search="true">
                                        <option>Товары почтой</option>
                                        <option>Онлайн-игры</option>
                                        <option value="">Электроника и бытовая техника</option>
                                    </select>
                                </div>
                                <div class="border"></div>
                                <div class="form-group col-3">
                                    <label for="category-product">Категория товара</label>
                                    <select class="selectpicker form-control" id="category-product" data-live-search="true">
                                        <option>Без категории</option>
                                        <option>Похудение</option>
                                    </select>
                                </div>
                                <div class="border"></div>
                                <div class="form-group col-6">
                                    <label for="shorDescribe">Краткое описание</label>
                                    <textarea class="form-control" id="shorDescribe" name="shorDescribe" rows="4"></textarea>
                                </div>
                                <div class="border"></div>
                                <div class="form-group col-6">
                                    <label for="describe">Описание</label>
                                    <textarea class="form-control" id="describe" name="describe" rows="4"></textarea>
                                </div>
                                <div class="border"></div>
                                <div class="form-group col-6">
                                    <label for="offerRules">Правила оффера</label>
                                    <textarea class="form-control" id="offerRules" name="offerRules" rows="4"></textarea>
                                </div>
                                <div class="border"></div>
                            </fieldset>
                            <fieldset>
                                <legend>Условия</legend>
                                <div class="form-group col-4">
                                    <label for="geography">География</label>
                                    <select class="form-control" id="geography" name="geography" multiple="multiple" size="10">
                                        <option>Россия</option>
                                        <option>Беларусь</option>
                                        <option>Украина</option>
                                        <option>Казахстан</option>
                                        <option>Молдова</option>
                                        <option>Россия</option>
                                        <option>Беларусь</option>
                                        <option>Украина</option>
                                        <option>Казахстан</option>
                                        <option>Молдова</option>
                                    </select>
                                </div>
                                <div class="border"></div>
                                <div class="form-group col-4">
                                    <label for="trafficsources">Источники трафика</label>
                                    <select class="form-control" id="trafficsources" name="trafficsources" multiple="multiple" size="10">
                                        <option>Веб-сайты</option>
                                        <option>Дорвеи</option>
                                        <option>Контекстная реклама</option>
                                        <option>Контекстная реклама на бренд</option>
                                        <option>Тизерная реклама</option>
                                        <option>Россия</option>
                                        <option>Беларусь</option>
                                        <option>Украина</option>
                                        <option>Казахстан</option>
                                        <option>Молдова</option>
                                    </select>
                                </div>
                                <div class="border"></div>
                                <div class="form-group col-4">
                                    <label for="postclick">Постклик</label>
                                    <input type="text" id="postclick" class="form-control" name="postclick">
                                </div>
                                <div class="border"></div>
                            </fieldset>
                            <fieldset>
                                <legend>Целевая аудитория</legend>
                                <div class="col-12">
                                    <div>Пол</div>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="men">
                                            <label class="form-check-label" for="men">Мужчины</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="women">
                                            <label class="form-check-label" for="women">Женщины</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="all" checked>
                                            <label class="form-check-label" for="all">Все</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border"></div>
                                <div class="form-group">
                                    <label for="rangeAge">Возраст</label>
                                    <div class="col-12">
                                        <input id="rangeAge" type="text" class="span2" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[18,40]" />
                                    </div>
                                </div>

                            </fieldset>

                            <!-- <div class="form-group col-lg-4 col-md-6 center-block-md">
                                <button id="sendUserData" type="submit" class="btn btn-primary">Сохранить</button>
                            </div> -->
                        </form>
                    </div><!--  -->
                </div><!--  -->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </main>
        </div><!-- /.page-container  -->
    </div><!-- /.wrapper -->

    <!-- Js-Cookie -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!-- Latest compiled Bootstrap-Slider JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>

    <!-- Global Script -->
    <script type="text/javascript" src="js/script.js"></script>
    
    <script>
        $('#rangeAge').slider();
    </script>
</body>

</html>