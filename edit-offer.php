<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Редактирование оффера</title>
    <?php require_once('block/head.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <form method="" action="#">
                            <fieldset class="description">
                                <legend>Описание</legend>

                                <div class="form-group nameOffer">
                                    <label for="title">Название</label>
                                    <input type="text" id="title" class="form-control" name="title" placeholder="Название" required="">
                                </div><!-- /.nameOffer -->

                                <div class="form-group product">
                                    <label for="product">Продукт</label>
                                    <select class="selectpicker form-control product-select" id="product" data-live-search="true">
                                        <option selected>Кому принадлежит оффер?</option>
                                        <option>Нейросистема</option>
                                        <option>Ремакслим</option>
                                    </select>
                                </div><!-- /.product -->
                                <div class="border"></div>

                                <div class="form-group price">
                                    <label>Цена</label>
                                    <div class="price-main">
                                        <div class="price-row">
                                            <input type="text" class="form-control" placeholder="0" name="price"><span class="price-currency">руб</span>
                                            <select class="selectpicker form-control price-select" id="country" data-live-search="true">
                                                <option selected>Россия</option>
                                                <option>Украина</option>
                                                <option>Беларусь</option>
                                            </select>
                                            <button type="button" class="btn btn-danger">
                                                <span class="btn-label"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div><!-- /.price-row -->
                                        <!-- <div class="price-row">
                                            <input type="text" class="form-control" placeholder="0" name="price"><span class="price-currency">руб</span>
                                            <select class="selectpicker form-control price-select" id="country" data-live-search="true">
                                                <option selected>Россия</option>
                                                <option>Украина</option>
                                                <option>Беларусь</option>
                                            </select>
                                            <button type="button" class="btn btn-danger">
                                                <span class="btn-label"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div> -->
                                    </div><!-- /.price -->


                                    <button type="button" class="btn btn-secondary">
                                        <span class="btn-label"><i class="fa fa-plus-circle"></i></span>
                                        Добавить
                                    </button>
                                </div><!-- /.price -->
                                <div class="border"></div>

                                <div class=" makeChoice">
                                    <label>Приватный?</label>
                                    <div class="makeChoice-radio">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="private" id="inlineRadioYes" value="on">
                                            <label class="form-check-label" for="inlineRadioYes">Да</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="private" id="inlineRadioNo" value="off" checked>
                                            <label class="form-check-label" for="inlineRadioNo">Нет</label>
                                        </div>
                                    </div>
                                </div><!-- /.makeChoice -->
                                <div class="border"></div>

                                <div class="makeChoice">
                                    <label>Adult?</label>
                                    <div class="makeChoice-radio">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="adult" id="AdultRadioYes" value="on">
                                            <label class="form-check-label" for="AdultRadioYes">Да</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="adult" id="AdultRadioNo" value="off" checked>
                                            <label class="form-check-label" for="AdultRadioNo">Нет</label>
                                        </div>
                                    </div>
                                </div><!-- /.makeChoice -->
                                <div class="border"></div>

                                <div class="sale">
                                    <label for="sale">Sale?</label>
                                    <select class="selectpicker form-control sale-select" id="sale" data-live-search="true">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>9</option>
                                    </select>
                                </div><!-- /.sale -->
                                <div class="border"></div>

                                <div class="category">
                                    <label for="category">Категория</label>
                                    <select class="selectpicker form-control" id="category" data-live-search="true">
                                        <option>Товары почтой</option>
                                        <option>Онлайн-игры</option>
                                        <option value="">Электроника и бытовая техника</option>
                                    </select>
                                </div><!-- /.category -->
                                <div class="border"></div>

                                <div class="category-product">
                                    <label for="ctg">Категория товара</label>
                                    <select class="selectpicker form-control" id="ctg" data-live-search="true">
                                        <option>Без категории</option>
                                        <option>Похудение</option>
                                    </select>
                                </div><!-- /.category-product -->
                                <div class="border"></div>

                                <div class="description-main_textarea">
                                    <label for="sDescription">Краткое описание</label>
                                    <textarea class="form-control" id="sDescription" name="shorDescribe" rows="4" required></textarea>
                                </div><!-- /.description-main_textarea -->
                                <div class="border"></div>

                                <div class="description-main_textarea">
                                    <label for="describe">Описание</label>
                                    <textarea class="form-control" id="describe" name="describe" rows="4"></textarea>
                                </div><!-- /.description-main_textarea -->
                                <div class="border"></div>

                                <div class="description-main_textarea">
                                    <label for="offerRules">Правила оффера</label>
                                    <textarea class="form-control" id="offerRules" name="offerRules" rows="4"></textarea>
                                </div><!-- /.description-main_textarea -->
                                <div class="border"></div>
                            </fieldset><!-- /.description -->
                            <fieldset>
                                <legend>Условия</legend>

                                <div class="description-main_select">
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
                                </div><!-- /.description-main_select -->
                                <div class="border"></div>

                                <div class="description-main_select">
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
                                </div><!-- /.description-main_select -->
                                <div class="border"></div>

                                <div class="postclick">
                                    <label for="pstclick">Постклик</label>
                                    <input type="text" id="pstclick" class="form-control" name="postclick">
                                </div><!-- /.postclick -->
                                <div class="border"></div>
                            </fieldset>
                            <fieldset>
                                <legend>Целевая аудитория</legend>
                                <div class="gender">
                                    <label>Пол</label>
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

                                <div class="age">
                                    <label for="rangeAge">Возраст</label>
                                    <input id="rangeAge" type="text" class="span2" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[18,40]" />
                                </div>
                                <div class="border"></div>
                            </fieldset>
                            <fieldset class="page">
                                <legend>Страница</legend>
                                <div class="form-row col-12">
                                    <div class="col-md-2">Name</div>
                                    <div class="col-md-5">
                                        Url
                                        <span class="editing-deletion">
                                            <i class="fa fa-pencil" title="изменить"></i>
                                            <i class="fa fa-times" title="удалить"></i>
                                        </span>
                                    </div>
                                    <div class="col-md-1">Цена</div>
                                    <div class="col-md-2">Метрика отсутствует</div>
                                    <div class="col-md-2">Адаптивный</div>
                                </div>
                                <div class="border"></div>
                                <div class="form-row col-12">
                                    <div class="col-md-2">Лендинг Lite пример</div>
                                    <div class="col-md-5">
                                        https://official.org.ua/neurosystem7-0-ooa/
                                        <span class="editing-deletion">
                                            <i class="fa fa-pencil" title="изменить"></i>
                                            <i class="fa fa-times" title="удалить"></i>
                                        </span>
                                    </div>
                                    <div class="col-md-1"> 0 грн.</div>
                                    <div class="col-md-2">Метрика отсутствует</div>
                                    <div class="col-md-2">Адаптивный</div>
                                </div>
                                <div class="border"></div>
                                <div class="form-group page-new">
                                    <button type="button" class="btn btn-secondary">
                                        <span class="btn-label" style="padding-right: 5px;"><i class="fa fa-plus-circle"></i></span>
                                        Новая страница
                                    </button>
                                </div>
                                <div class="border"></div>
                            </fieldset><!-- /.page -->
                            <fieldset class="page">
                                <legend>Приватные страницы</legend>
                                <!-- сюда добавлять новые страницы -->
                                <div class="form-group page-new">
                                    <button type="button" class="btn btn-secondary">
                                        <span class="btn-label" style="padding-right: 5px;"><i class="fa fa-plus-circle"></i></span>
                                        Новая страница
                                    </button>
                                </div>
                                <div class="border"></div>
                            </fieldset><!-- /.page -->
                            <fieldset class="page">
                                <legend>Приватные страницы</legend>
                                <div class="form-row col-12">
                                    <div class="col-md-2">Елена Шульженко Тест</div>
                                    <div class="col-md-4">
                                        https://novosti-o-vazhnom.com/elena-shulzhenko-neurosystem0-inn/тест
                                        <span class="editing-deletion">
                                            <i class="fa fa-pencil" title="изменить"></i>
                                            <i class="fa fa-times" title="удалить"></i>
                                        </span>
                                    </div>
                                    <div class="col-md-2">Метрика отсутствует</div>
                                    <div class="col-md-2">Похудение</div>
                                    <div class="col-md-2 ">Адаптивный</div>
                                </div>
                                <div class="border"></div>
                                <div class="form-group page-new">
                                    <button type="button" class="btn btn-secondary">
                                        <span class="btn-label" style="padding-right: 5px;"><i class="fa fa-plus-circle"></i></span>
                                        Новая страница
                                    </button>
                                </div>
                                <div class="border"></div>
                            </fieldset><!-- /.page -->
                            <fieldset>
                                <legend>Цель</legend>
                                <div class="goal">
                                    <select class="selectpicker form-control">
                                        <option value="" selected>Подтверждённая заявка</option>
                                        <option value="">Оплаченный заказ</option>
                                        <option value="">Установка приложения</option>
                                        <option value="">Подписка</option>
                                    </select>
                                </div>
                                <div class="border"></div>
                            </fieldset> 
                            <fieldset class="pay">
                                <legend>Выплаты</legend>
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 advertis">
                                        <label for="advertis-select">Рекламодатель</label>
                                        <select class="selectpicker form-control" id="advertis-select">
                                            <option value="" selected>Виталий Попета</option>
                                            <option value="">Алексей Климчук</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-sm-6 col-md-2 col-lg-1 geo">
                                        <label>Гео</label>
                                        <div>Украина</div>
                                    </div>
                                    <div class="form-group col-12 col-sm-6 col-md-3 col-lg-3 payment">
                                        <label>Опллата рек.</label>
                                        <div class="form-row col-12">
                                            <input type="text" class="form-control col-6" value="0">
                                            <select class="selectpicker form-control col-6">
                                                <option value="" selected disabled>руб</option>
                                                <option value="" disabled>грн</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-sm-6 col-md-3 col-lg-3 payment">
                                        <label>Опллата веб.</label>
                                        <div class="form-row col-12">
                                            <input type="text" class="form-control col-6" value="0">
                                            <select class="selectpicker form-control col-6">
                                                <option value="" selected disabled>руб</option>
                                                <option value="" disabled>грн</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border"></div>
                            </fieldset>


                            <div class="form-group col-lg-4 col-md-6">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div><!--  -->
                </div><!--  -->
            </main>
        </div><!-- /.page-container  -->
    </div><!-- /.wrapperper -->



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!-- Latest compiled Bootstrap-Slider JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>



    <script>
        $('#rangeAge').slider();
    </script>
</body>

</html>