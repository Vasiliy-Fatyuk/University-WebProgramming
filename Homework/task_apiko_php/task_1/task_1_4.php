<!doctype html>
<html lang="Default">
<head>
    <style>
        h3 {
            direction: ltr;
            text-align: center;
            color: black;
            font-size: 28px;
        }
        p {
            direction: ltr;
        }

    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test task</title>
    <link rel="stylesheet" type="text/css" href="../test/css/main.css" media="screen" />
    <!-- Bootstrap -->
    <link href="../test/css/bootstrap.css" rel="stylesheet">
    <link href="../test/css/font-awesome.css" rel="stylesheet">
    <link href="../test/css/mystyle.css" rel="stylesheet">
    <link href="../test/js/bootstrap.js" rel="stylesheet">






    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="shortcut icon" type="image/png" href="../../../favicon.png">
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Domine&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <script src="../../../js/jquery-2.1.0.js"></script>
    <script src="../../../js/bootstrap.js"></script>
    <script src="../../../js/blocs.js"></script>
    <script src="./js/jqBootstrapValidation.js"></script>
    <script src="./js/formHandler.js"></script>
    <script src="../../../js/lazysizes.min.js" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="../../task_apiko_js/task_1/task_1_4.js"></script>
    <title>Task_5_3</title>

    <!-- Google Analytics -->

    <!-- Google Analytics END -->

</head>
<body>
<!-- Main container -->
<div class="page-container">

    <!-- bloc-0 -->
    <div class="bloc l-bloc bgc-white" id="bloc-0">
        <div class="container bloc-sm">
            <nav class="navbar nav-center row">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../../index.php"><img src="../../../img/icons8-apple-24.png" alt="logo" />Web</a>
                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1 special-dropdown-nav">
                    <ul class="site-navigation nav navbar-nav">
                        <li>
                            <a href="../../labolatorni.php">Лабораторні</a>
                        </li>
                        <li>
                            <a href="../../../index.php">Головна</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- bloc-0 END -->

    <!-- bloc-38 -->
    <div class
         ="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-38">
        <!--    <div class="container bloc-sm">-->

        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center mg-md  lg-shadow">
                    Лабораторні робота №1
                </h1>
                <h2 class="text-center mg-md  sm-shadow">
                    Завдання №4
                </h2>
                <!---->
                <style>
                    #password{
                        display: block;
                        margin-right: auto;
                        margin-left: auto;
                        border-radius: 10px;
                        background-color: #f6f6f6;
                    }
                    #pid{
                        text-align: center;
                    }
                   a{
                       display: block;
                       text-align: -webkit-center;
                   }

                </style>
                <h4>

                        <input type="password" name="password" id="password" size="60"/>
                    <p id="pid">Кількість символів:</p>
                        <a href="#" class="generatePassword">10</a>
                    <a href="#" class="generatePassword15">15</a>
                    <a href="#" class="generatePassword30">30</a>
                    <a href="#" class="generatePassword50">50</a>
                    <a href="#" class="generatePassword80">80</a>
                    <a href="#" class="generatePassword100">100</a>
                        <a href="#" class="generatePassword150">150</a>
                        <a href="#" class="generatePassword200">200</a>
                    <a href="#" class="generatePassword300">300</a>

                </h4>

            </div>

        </div>
        <!-- bloc-38 END -->

        <!-- Bloc Group -->
        <div class='bloc-group'>

            <!-- bloc-39 -->
            <div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-39">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="mg-md  sm-shadow">
                                Завдання
                            </h3>
                            <p class=" text-left">
                                Створити метод, який генерує рандомну строку пароль. Враховуючи можливість задати довжину.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bloc-39 END -->

            <!-- bloc-40 -->
            <div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-40">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="mg-md  sm-shadow">
                                Результат мовою JS+HTML
                            </h3>
                            <p class=" text-left">
                                skript <br><br>
                                $(document).ready(function() {<br>
                                function str_rand() {<br>
                                var result       = '';<br>
                                var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';<br>
                                var max_position = words.length - 1;<br>
                                for( i = 0; i < 10; ++i ) {<br>
                                position = Math.floor ( Math.random() * max_position );<br>
                                result = result + words.substring(position, position + 1);<br>
                                }<br>
                                return result;<br>
                                }<br>
                                function str_rand15() {<br>
                                var result       = '';<br>
                                var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';<br>
                                var max_position = words.length - 1;<br>
                                for( i = 0; i < 15; ++i ) {<br>
                                position = Math.floor ( Math.random() * max_position );<br>
                                result = result + words.substring(position, position + 1);<br>
                                }<br>
                                return result;<br>
                                }<br>
                                function str_rand30() {<br>
                                var result       = '';<br>
                                var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';<br>
                                var max_position = words.length - 1;<br>
                                for( i = 0; i < 30; ++i ) {<br>
                                position = Math.floor ( Math.random() * max_position );<br>
                                result = result + words.substring(position, position + 1);<br>
                                }<br>
                                return result;<br>
                                }<br>
                                function str_rand50() {<br>
                                var result       = '';<br>
                                var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';<br>
                                var max_position = words.length - 1;<br>
                                for( i = 0; i < 50; ++i ) {<br>
                                position = Math.floor ( Math.random() * max_position );<br>
                                result = result + words.substring(position, position + 1);<br>
                                }<br>
                                return result;<br>
                                }<br>
                                function str_rand80() {<br>
                                var result       = '';<br>
                                var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';<br>
                                var max_position = words.length - 1;<br>
                                for( i = 0; i < 80; ++i ) {<br>
                                position = Math.floor ( Math.random() * max_position );<br>
                                result = result + words.substring(position, position + 1);<br>
                                }<br>
                                return result;<br>
                                }<br>
                                function str_rand100() {<br>
                                var result       = '';<br>
                                var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';<br>
                                var max_position = words.length - 1;<br>
                                for( i = 0; i < 100; ++i ) {<br>
                                position = Math.floor ( Math.random() * max_position );<br>
                                result = result + words.substring(position, position + 1);<br>
                                }<br>
                                return result;<br>
                                }<br>
                                function str_rand150() {<br>
                                var result       = '';<br>
                                var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';<br>
                                var max_position = words.length - 1;<br>
                                for( i = 0; i < 150; ++i ) {<br>
                                position = Math.floor ( Math.random() * max_position );<br>
                                result = result + words.substring(position, position + 1);<br>
                                }<br>
                                return result;<br>
                                }<br>
                                function str_rand200() {<br>
                                var result       = '';<br>
                                var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';<br>
                                var max_position = words.length - 1;<br>
                                for( i = 0; i < 200; ++i ) {<br>
                                position = Math.floor ( Math.random() * max_position );<br>
                                result = result + words.substring(position, position + 1);<br>
                                }<br>
                                return result;<br>
                                }<br>
                                function str_rand300() {<br>
                                var result       = '';<br>
                                var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';<br>
                                var max_position = words.length - 1;<br>
                                for( i = 0; i < 300; ++i ) {<br>
                                position = Math.floor ( Math.random() * max_position );<br>
                                result = result + words.substring(position, position + 1);<br>
                                }<br>
                                return result;<br>
                                }<br>

                                $('.generatePassword').click(function() {<br>
                                document.getElementById('password').setAttribute('type', 'text');<br>
                                $('#password').attr('value', str_rand());<br>
                                });<br>
                                $('.generatePassword15').click(function() {<br>
                                document.getElementById('password').setAttribute('type', 'text');<br>
                                $('#password').attr('value', str_rand15());<br>
                                });<br>
                                $('.generatePassword30').click(function() {<br>
                                document.getElementById('password').setAttribute('type', 'text');<br>
                                $('#password').attr('value', str_rand30());<br>
                                });<br>
                                $('.generatePassword50').click(function() {<br>
                                document.getElementById('password').setAttribute('type', 'text');<br>
                                $('#password').attr('value', str_rand50());<br>
                                });<br>
                                $('.generatePassword80').click(function() {<br>
                                document.getElementById('password').setAttribute('type', 'text');<br>
                                $('#password').attr('value', str_rand80());<br>
                                });<br>
                                $('.generatePassword100').click(function() {<br>
                                document.getElementById('password').setAttribute('type', 'text');<br>
                                $('#password').attr('value', str_rand100());<br>
                                });<br>
                                $('.generatePassword150').click(function() {<br>
                                document.getElementById('password').setAttribute('type', 'text');<br>
                                $('#password').attr('value', str_rand150());<br>
                                });<br>
                                $('.generatePassword200').click(function() {<br>
                                document.getElementById('password').setAttribute('type', 'text');<br>
                                $('#password').attr('value', str_rand200());<br>
                                });<br>
                                $('.generatePassword300').click(function() {<br>
                                document.getElementById('password').setAttribute('type', 'text');<br>
                                $('#password').attr('value', str_rand300());<br>
                                });<br>
                                });<br>
                                <br><br>
                                skript<br><br>
                                <br><br>
                                html<br><br>
                                <іnрut type="password" name="password" id="password" size="60"/><br>
                            <р id="pid">Кількість символів:</р><br>
                            <а href="#" class="generatePassword">10</а><br>
                            <а href="#" class="generatePassword15">15</а><br>
                            <а href="#" class="generatePassword30">30</а><br>
                            <а href="#" class="generatePassword50">50</а><br>
                            <а href="#" class="generatePassword80">80</а><br>
                            <а href="#" class="generatePassword100">100</а><br>
                            <а href="#" class="generatePassword150">150</а><br>
                            <а href="#" class="generatePassword200">200</а><br>
                            <а href="#" class="generatePassword300">300</а><br>
                                <br><br>

                                html
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bloc-40 END -->
        </div>
        <!-- Bloc Group END -->

        <!-- ScrollToTop Button -->
        <a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
        <!-- ScrollToTop Button END-->


        <!-- Footer - bloc-41 -->
        <div class="bloc bgc-white l-bloc" id="bloc-41">
            <div class="container bloc-sm b-divider-dashed">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="text-center">
                            <a class="social-lg" href="../../../index.php"><span class="fa fa-twitter icon-lg"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-center">
                            <a class="social-lg" href="../../../index.php"><span class="fa fa-facebook icon-lg"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-center">
                            <a class="social-lg" href="../../../index.php"><span class="fa fa-dribbble icon-lg"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-center">
                            <a class="social-lg" href="../../../index.php"><span class="fa fa-instagram icon-lg"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer - bloc-41 END -->

    </div>
    <!-- Main container END -->



    <!-- Preloader -->
    <div id="page-loading-blocs-notifaction"></div>
    <!-- Preloader END -->

</body>
</html>
