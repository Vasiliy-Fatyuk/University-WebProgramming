<?php

class Country
{

    public $name;
    public $populations;
    public $capital;

    function __construct($name, $populations, $capital)
    {
        $this->name = $name;
        $this->populations = $populations;
        $this->capital = $capital;
    }

}

?>

<?php

$array_with_country = ['Україна', 'Німечина', 'Іспанія', 'Росія', 'США'];
$array_with_population = [47000000, 24000000, 11000000, 98000000, 9000000];
$array_with_capital = ['Київ', 'Берлін', 'Мадрид', 'Москва', 'Вашингтон'];

$object_array = array();
for ($i = 0; $i < count($array_with_country); $i++) {
    array_push($object_array, new Country($array_with_country[$i], $array_with_population[$i], $array_with_capital[$i]));
}

?>
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

        .result {
            text-align: left;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 20px;
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
    <script src="./js/jqBootstrapValidation.js"></script>
    <script src="./js/formHandler.js"></script>
    <script src="../../../../js/lazysizes.min.js" defer></script>
    <title>Task_3_2</title>


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
                    <a class="navbar-brand" href="../../../../index.php"><img src="../../../../img/icons8-apple-24.png"
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
                            <a href="../../../../index.php">Головна</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- bloc-0 END -->

    <!-- bloc-38 -->
    <div class="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-38">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center mg-md  lg-shadow">
                        Лабораторні робота №3
                    </h1>
                    <h2 class="text-center mg-md  sm-shadow">
                        Завдання №2
                    </h2>
                    <h3>
                        <div class="result">
                            <?php
                            for ($i = 0; $i < count($object_array); $i++) {
                                echo "<div>Країна:</div>";
                                echo "<div>";
                                echo $object_array[$i]->name;
                                echo "</div>";
                                echo "Населення: ";
                                echo "<div>";
                                echo $object_array[$i]->populations;
                                echo "</div>";
                                echo "<div>Столиця:</div>";
                                echo "<div>";
                                echo $object_array[$i]->capital;
                                echo "</div>";
                                echo "<br> </br>";
                                echo "<div> </div>";
                            }
                            ?>
                        </div>
                    </h3>

                </div>
            </div>
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
                            Створіть клас країни в якому будуть поля: назва країни, населення і назва столиці
                            (англійські назви придумайте самостійно).<br>
                            Створіть масив об'єктів, виведіть кожний з них у таблицю в три рядки по дві комірки в
                            кожному.<br>
                            У лівій комірці ім'я елемента, в правій - його значення.<br>
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
                            Результат мовою PHP+HTML
                        </h3>
                        <p class=" text-left">
                            &nbsp;&lt;?php<br><br>class Country {<br><br> public $name;<br> public $populations;<br>
                            public $capital;<br> function __construct($name, $populations, $capital) {<br> $this -&gt;
                            name = $name;<br> $this -&gt; populations = $populations;<br> $this -&gt; capital =
                            $capital;<br> }<br><br>}<br>?&gt;<br><br>&lt;?php<br><br>$array_with_country = ['Україна',
                            'Німечина', 'Іспанія', 'Росія', 'США'];<br>$array_with_population = [47000000, 24000000,
                            11000000, 98000000, 9000000];<br>$array_with_capital = ['Київ', 'Берлін', 'Мадрид',
                            'Москва', 'Вашингтон'];<br><br>$object_array = array();<br>for ($i=0; $i &lt;
                            count($array_with_country); $i++) {<br> array_push($object_array, new
                            Country($array_with_country[$i], $array_with_population[$i], $array_with_capital[$i]));<br>}<br><br>?&gt;<br><br>&lt;div
                            class="result"&gt;<br> &lt;?php<br> for ($i=0; $i &lt; count($object_array); $i++) {<br>
                            echo "&lt;div&gt;Країна:&lt;/div&gt;"; echo "&lt;div&gt;"; echo $object_array[$i]-&gt;name;
                            echo "&lt;/div&gt;";<br> echo "Населення: "; echo "&lt;div&gt;"; echo $object_array[$i]-&gt;populations;
                            echo "&lt;/div&gt;";<br> echo "&lt;div&gt;Столиця:&lt;/div&gt;"; echo "&lt;div&gt;"; echo
                            $object_array[$i]-&gt;capital; echo "&lt;/div&gt;";<br> echo "&lt;br&gt; &lt;/br&gt;";<br>
                            echo "&lt;div&gt; &lt;/div&gt;";<br> }<br> ?&gt;<br> &lt;/div&gt;<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-40 END -->
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
                        <a class="social-lg" href="../../../../index.php"><span
                                    class="fa fa-twitter icon-lg"></span></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="../../../../index.php"><span
                                    class="fa fa-facebook icon-lg"></span></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="../../../../index.php"><span
                                    class="fa fa-dribbble icon-lg"></span></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a class="social-lg" href="../../../../index.php"><span class="fa fa-instagram icon-lg"></span></a>
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
