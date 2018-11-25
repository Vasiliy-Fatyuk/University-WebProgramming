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
    <link rel="shortcut icon" type="image/png" href="../../../../favicon.png">

    <link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Domine&amp;subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>

    <script src="../../../../js/jquery-2.1.0.js"></script>
    <script src="../../../../js/bootstrap.js"></script>
    <script src="../../../../js/blocs.js"></script>
    <script src="../../../../js/lazysizes.min.js" defer></script>
    <title>Task_2_4</title>


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
                    <a class="navbar-brand" href="../../../../index.html"><img src="../../../../img/icons8-apple-24.png"
                                                                               alt="logo"/>Web</a>
                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1 special-dropdown-nav">
                    <ul class="site-navigation nav navbar-nav">
                        <li>
                            <a href="../../../labolatorni.php">Лабораторні</a>
                        </li>
                        <li>
                            <a href="../../../../index.html">Головна</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- bloc-0 END -->

    <!-- bloc-35 -->
    <div class="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-35">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center mg-md  lg-shadow">
                        Лабораторна робота №2
                    </h1>
                    <h2 class="text-center mg-md  sm-shadow">
                        Завдання №4
                    </h2>
                    <h3>
                        <?php

                        $R1_as_array = file("R1.txt");

                        $result = "";
                        for ($i = 0; $i < count($R1_as_array); $i += 10) {
                            if ($i + 10 > count($R1_as_array)) break;
                            $min_element = $R1_as_array[$i];
                            $max_element = $R1_as_array[$i];
                            for ($j = $i; $j < $i + 10; $j++) {
                                if ($min_element < $R1_as_array[$j]) $min_element = $R1_as_array[$j];
                                if ($max_element > $R1_as_array[$j]) $max_element = $R1_as_array[$j];
                            }
                            $result .= $min_element;
                            $result .= PHP_EOL;
                            $result .= $max_element;
                            $result .= PHP_EOL;
                        }

                        $file = fopen('R2.txt', 'w+');
                        $file_write = fwrite($file, $result);
                        fclose($file);
                        ?>
                        <h2>Файл записано</h2>
                    </h3>

                </div>
            </div>
        </div>
    </div>
    <!-- bloc-35 END -->

    <!-- Bloc Group -->
    <div class='bloc-group'>

        <!-- bloc-36 -->
        <div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-36">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mg-md  sm-shadow">
                            Завдання
                        </h3>
                        <p>
                            Для файлу R1, компонентами якого є дійсні числа, скласти програму, що знаходить максимум і
                            мінімум серед кожних десяти компонент файлу R1 і формують з них файл R2.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-36 END -->

        <!-- bloc-37 -->
        <div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-37">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mg-md  sm-shadow">
                            Результат мовою PHP+HTML
                        </h3>
                        <p class=" text-left">
                            &lt;?php<br><br>$R1_as_array = file("R1.txt");<br><br>$result = "";<br>for ($i=0; $i &lt;
                            count($R1_as_array); $i += 10) {<br> if ($i + 10 &gt; count($R1_as_array)) break;<br>
                            $min_element = $R1_as_array[$i];<br> $max_element = $R1_as_array[$i];<br> for ($j = $i; $j
                            &lt; $i + 10; $j++) {<br> if ($min_element &lt; $R1_as_array[$j]) $min_element =
                            $R1_as_array[$j];<br> if ($max_element &gt; $R1_as_array[$j]) $max_element =
                            $R1_as_array[$j];<br> }<br> $result.=$min_element;<br> $result.=PHP_EOL;<br>
                            $result.=$max_element;<br> $result.=PHP_EOL;<br>}<br><br>$file = fopen('R2.txt', 'w+');<br>$file_write
                            = fwrite($file, $result);<br>fclose($file);<br>?&gt;<br>&lt;h2&gt;Файл
                            записано&lt;/h2&gt;<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-37 END -->
    </div>
    <!-- Bloc Group END -->

    <!-- ScrollToTop Button -->
    <a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span
                class="fa fa-chevron-up"></span></a>
    <!-- ScrollToTop Button END-->


    <!-- Footer - bloc-41 -->
    <div class="bloc bgc-white l-bloc" id="bloc-41">
        <div class="container bloc-sm b-divider-dashed">
            <div class="row">
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="../../../../index.html"><span
                                    class="fa fa-twitter icon-lg"></span></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="../../../../index.html"><span
                                    class="fa fa-facebook icon-lg"></span></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="../../../../index.html"><span
                                    class="fa fa-dribbble icon-lg"></span></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="../../../../index.html"><span class="fa fa-instagram icon-lg"></span></a>
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
