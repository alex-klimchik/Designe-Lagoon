<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Настройки</title>
    <?php require_once('block/head.php'); ?>

    <!-- Main CSS for this Page -->
    <link rel="stylesheet" href="css/settings.css">

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

                <h4 class="c-grey-900 mB-20">Настройки аккаунта</h4>
                <div class="profile">

                    <nav class="nav nav-tabs">
                        <a class="nav-item nav-link active" data-toggle="tab">Профиль</a>
                    </nav>

                    <div class="profile-main bgc-white">
                        <!-- <h5 class="col-12 c-grey-900 bd">Личные данные</h5> -->
                        <form method=" " action="">
                            <fieldset class="p-20">
                                <legend>Личные данные</legend>
                                <div class="form-group  profile-set-wrap">
                                    <label for="login">Имя в топе</label>
                                    <input type="text" id="login" class="form-control" name="login" placeholder="Имя" required="">
                                </div>
                                <div class="form-group  profile-set-wrap">
                                    <label for="phone">Телефон</label>
                                    <input type="text" id="phone" class="form-control" name="phone" placeholder="Телефон">
                                </div>
                                <div class="form-group  profile-set-wrap">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" id="Email" name="email" placeholder="Enter email" required="">
                                    <p class="text-help">Email можно сменить при запросе в тикеты</p>
                                </div>
                                <div class="form-group  profile-set-wrap">
                                    <label for="skype">Skype</label>
                                    <input type="text" id="skype" class="form-control" name="skype" placeholder="Введите skype">
                                </div>
                                <div class="form-group  profile-set-wrap">
                                    <label for="icq">ICQ</label>
                                    <input type="text" id="icq" class="form-control" name="icq" placeholder="Введите icq">
                                </div>

                            </fieldset>
                            <fieldset class="p-20">
                                <legend>Платежные данные</legend>
                                <div class="form-group  profile-set-wrap">
                                    <label for="confirmPassword">WMR Кошелек</label>
                                    <p>Изменение возможно при обращении к тех. поддержке</p>
                                </div>
                                <div class="form-group  profile-set-wrap">
                                    <label for="password">Новый пароль</label>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Укажите новый пароль">
                                </div>
                            </fieldset>
                            <div class="form-group p-20 btn-save">
                                <button id="sendUserData" type="submit" class="btn btn-primary">Сохранить</button>
                            </div>

                        </form>
                    </div><!-- /.profile-main -->
                </div><!-- /.profile -->
            </main>
        </div><!-- /.page-container  -->
    </div><!-- /.wrapper -->


</body>

</html>