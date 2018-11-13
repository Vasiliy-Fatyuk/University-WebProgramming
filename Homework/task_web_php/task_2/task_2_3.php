<!doctype html>
<html lang="Default">
<head>
    <style>
        h3 {
            direction: ltr;
        }
        p {
            direction: ltr;
        }

    </style>
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
    <title>Task_2_3</title>


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

    <!-- bloc-32 -->
    <div class="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-32">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center mg-md  lg-shadow">
                        Лабораторна робота №2
                    </h1>
                    <h2 class="text-center mg-md  sm-shadow">
                        Завдання №3
                    </h2>
                    <h3>

                        <?php
                        define("LINK", 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=3');
                        $data = file_get_contents(LINK);
                        $courses = json_decode($data, true);
                        function convert ($value, $currensyFrom, $currensyTo, $courses){
                            $course = array(
                                "usd" => $courses[2]["buy"],
                                "eu" => $courses[0]["buy"],
                                "uan" => 1,
                                "rub" => $courses[1]["buy"]
                            );
                            return round($course[$currensyFrom] * $value / $course[$currensyTo], 2);
                        }
                        ?>
                        <form action="#" method="get">
                            <select name="select2">
                                <option value="usd" selected>Долар</option>
                                <option value="eu">Євро</option>
                                <option value="uan">Гривня</option>
                                <option value="rub">Рубль</option>
                            </select>
                            <select name="select1">
                                <option value="usd">Долар</option>
                                <option value="eu">Євро</option>
                                <option value="uan" selected>Гривня</option>
                                <option value="rub">Рубль</option>
                            </select>
                            <input type="text" placeholder="Конвертатор онлайн"  name="value">
                            <div class="result">
                                <?php
                                if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['value'])) {
                                    echo convert($_GET['value'], $_GET['select1'], $_GET['select2'], $courses);
                                }
                                ?>
                            </div>
                            <button type="submit">Результат</button>
                        </form>
                    </h3>


                </div>
            </div>
        </div>
    </div>
    <!-- bloc-32 END -->

    <!-- Bloc Group -->
    <div class='bloc-group'>

        <!-- bloc-33 -->
        <div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-33">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mg-md  sm-shadow">
                            Завдання
                        </h3>
                        <p>
                            Написати скрипт конвектора валют.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-33 END -->

        <!-- bloc-34 -->
        <div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-34">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mg-md  sm-shadow">
                            Результат мовою PHP+HTML
                        </h3>
                        <p class=" text-left">
                            &lt;?php<br> define("LINK", 'https://api.privatbank.ua/p24api/pubinfo?json&amp;exchange&amp;coursid=3');<br> $data = file_get_contents(LINK);<br> $courses = json_decode($data, true);<br> function convert ($value, $currensyFrom, $currensyTo, $courses){<br> $course = array(<br> "usd" =&gt; $courses[2]["buy"],<br> "eu" =&gt; $courses[0]["buy"],<br> "uan" =&gt; 1,<br> "rub" =&gt; $courses[1]["buy"]<br> );<br> return round($course[$currensyFrom] * $value / $course[$currensyTo], 2);<br> }<br> ?&gt;<br> &lt;form action="#" method="get"&gt;<br> &lt;select name="select2"&gt;<br> &lt;option value="usd" selected&gt;Долар&lt;/option&gt;<br> &lt;option value="eu"&gt;Євро&lt;/option&gt;<br> &lt;option value="uan"&gt;Гривня&lt;/option&gt;<br> &lt;option value="rub"&gt;Рубль&lt;/option&gt;<br> &lt;/select&gt;<br> &lt;select name="select1"&gt;<br> &lt;option value="usd"&gt;Долар&lt;/option&gt;<br> &lt;option value="eu"&gt;Євро&lt;/option&gt;<br> &lt;option value="uan" selected&gt;Гривня&lt;/option&gt;<br> &lt;option value="rub"&gt;Рубль&lt;/option&gt;<br> &lt;/select&gt;<br> &lt;input type="text" placeholder="Конвертатор онлайн" name="value"&gt;<br> &lt;div class="result"&gt;<br> &lt;?php<br> if($_SERVER['REQUEST_METHOD'] == "GET" &amp;&amp; isset($_GET['value'])) {<br> echo convert($_GET['value'], $_GET['select1'], $_GET['select2'], $courses);<br> }<br> ?&gt;<br> &lt;/div&gt;<br> &lt;button type="submit"&gt;Результат&lt;/button&gt;<br> &lt;/form&gt;<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-34 END -->
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
                        <a class="social-lg" href="https://twitter.com/_MLG__"><span class="fa fa-twitter icon-lg"></span></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="https://www.facebook.com/petro.podminohin?ref=bookmarks"><span class="fa fa-facebook icon-lg"></span></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="https://dribbble.com/siriusplay"><span class="fa fa-dribbble icon-lg"></span></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="https://www.instagram.com/_mlg___/"><span class="fa fa-instagram icon-lg"></span></a>
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
