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

    <!-- Font-Awesom -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="icon/themify-icons.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="icon/ie7/ie7.css">

    <!-- Global CSS -->
    <link rel="stylesheet" href="css/style.css">
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
                            <div class="form-group col-lg-4 col-md-6">
                                <label for="login">Логин</label>
                                <input type="text" id="login" class="form-control" name="login" placeholder="Логин" required="">
                            </div>
                            <div class="form-group col-lg-4 col-md-6">
                                <label for="Email">Email address</label>
                                <input type="email" class="form-control" id="Email" name="email" placeholder="Enter email" required="">
                            </div>
                            <div class="form-group col-lg-4 col-md-6 c">
                                <label for="password">Новый пароль</label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="Укажите новый пароль">
                            </div>
                            <div class="form-group col-lg-4 col-md-6">
                                <label for="confirmPassword">Повторите пароль</label>
                                <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" placeholder="Повторите пароль">
                            </div>
                            <div class="form-group col-lg-4 col-md-6">
                                <label for="phone">Телефон</label>
                                <input type="text" id="phone" class="form-control" name="phone" placeholder="Телефон">
                            </div>
                            <div class="form-group col-lg-4 col-md-6">
                                <label for="skype">Skype</label>
                                <input type="text" id="skype" class="form-control" name="skype" placeholder="Введите skype">
                            </div>
                            <div class="form-group col-lg-4 col-md-6">
                                <label for="icq">ICQ</label>
                                <input type="text" id="icq" class="form-control" name="icq" placeholder="Введите icq">
                            </div>
                            <div class="form-group col-lg-4 col-md-6 center-block-md">
                                <button id="sendUserData" type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div><!-- /.profile-main -->
                </div><!-- /.profile -->
            </main>
        </div><!-- /.page-container  -->
    </div><!-- /.wrapper -->

    <!-- Js-Cookie -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <!-- Global Script -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>