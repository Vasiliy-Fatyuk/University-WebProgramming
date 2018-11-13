<?php

class MultiplicationTable {

    public $value;
    function __construct($value) {
        $this->value = $value;
    }

    public function getMultiplicationTable() {
        $result_array = array();
        for ($i=0; $i <= 9; $i++) array_push($result_array, $i * $this->value);
        return $result_array;
    }

    public function renderResultTable() {
        for ($i=1; $i < count($this->getMultiplicationTable()); $i++) {
            echo $i;
            echo " * ";
            echo $this->value;
            echo " = ";
            echo $this->getMultiplicationTable()[$i];
            echo "<br>";
        }
    }

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
        .content {
            display: flex;
            margin-left: 0;
            justify-content: space-around;
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
    <title>Task_3_1</title>


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
    <div class="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-38">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center mg-md  lg-shadow">
                        Лабораторні робота №3
                    </h1>
                    <h2 class="text-center mg-md  sm-shadow">
                        Завдання №1
                    </h2>
                    <h3>
                        <div class="content">
                            <div>
                                <?php
                                $table1 = new MultiplicationTable("4");
                                $table1 -> renderResultTable();
                                ?>
                            </div>
                            <div>
                                <?php
                                $table1 = new MultiplicationTable("6");
                                $table1 -> renderResultTable();
                                ?>
                            </div>
                            <div>
                                <?php
                                $table1 = new MultiplicationTable("8");
                                $table1 -> renderResultTable();
                                ?>
                            </div>
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
                            Створіть клас для виведення таблиці множення для вказаного числа (передавати в конструкторі).<br>
                            Створити окремий метод для обчислення. Далі створити кілька об'єктів даного класу для демонстрації працездатності класу.<br>
                            Висновок оформити у вигляді таблиці.<br>
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
                            Результат мовою PHP
                        </h3>
                        <p class=" text-left">
                            &lt;?php<br>class MultiplicationTable {<br><br> public $value;<br> function __construct($value) {<br> $this-&gt;value = $value;<br> }<br><br> public function getMultiplicationTable() {<br> $result_array = array();<br> for ($i=0; $i &lt;= 9; $i++) array_push($result_array, $i * $this-&gt;value);<br> return $result_array;<br> }<br><br> public function renderResultTable() {<br> for ($i=1; $i &lt; count($this-&gt;getMultiplicationTable()); $i++) {<br> echo $i;<br> echo " * ";<br> echo $this-&gt;value;<br> echo " = ";<br> echo $this-&gt;getMultiplicationTable()[$i];<br> echo "&lt;br&gt;";<br> }<br> }<br><br>}<br>?&gt; <br> <br> <br>&lt;div class="content"&gt;<br> &lt;div&gt;<br> &lt;?php<br> $table1 = new MultiplicationTable("4");<br> $table1 -&gt; renderResultTable();<br> ?&gt;<br> &lt;/div&gt;<br> &lt;div&gt;<br> &lt;?php<br> $table1 = new MultiplicationTable("6");<br> $table1 -&gt; renderResultTable();<br> ?&gt;<br> &lt;/div&gt;<br> &lt;div&gt;<br> &lt;?php<br> $table1 = new MultiplicationTable("8");<br> $table1 -&gt; renderResultTable();<br> ?&gt;<br> &lt;/div&gt;<br> &lt;/div&gt;<br>
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
