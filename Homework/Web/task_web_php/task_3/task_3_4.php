<?php

class Calc
{
    public $value1;
    public $value2;
    public $errors = array();

    function __construct()
    {
        $arguments = func_get_args();
        $arguments_amount = func_num_args();
        if ($arguments_amount == 1) {
            $this->value1 = $arguments[0];
        } else if ($arguments_amount == 2) {
            $this->value1 = $arguments[0];
            $this->value2 = $arguments[1];
        } else {
            array_push($this->errors, "Ви не ввели жодного значення");
        }
    }

    public function plus()
    {
        return $this->value1 + $this->value2;
    }

    public function minus()
    {
        return $this->value1 - $this->value2;
    }

    public function division()
    {
        return $this->value1 / $this->value2;
    }

    public function product()
    {
        return $this->value1 * $this->value2;
    }

    public function pow()
    {
        return pow($this->value1, $this->value2);
    }

    public function sqrt()
    {
        if ($this->value1 >= 2) return sqrt($this->value1);
        else array_push($this->errors, "Значення повинне бути не менше 2");
    }

    public function mod()
    {
        return $this->value1 % $this->value2;
    }

}

?>

<?php

class CalcDispatcher
{
    private $value1;
    private $value2;
    private $action;
    public $errors = array();

    public function dispatch()
    {
        $this->value1 = $_GET['value1'];
        if (!$this->validOnlyNumbers($this->value1)) array_push($this->errors, "Значення 1 не коректне");
        if (strlen($this->value1) == 0) array_push($this->errors, "Значення 1 не введене");
        $this->action = $_GET['action'];
        if ($this->action != 'sqrt') {
            $this->value2 = $_GET['value2'];
            if (!$this->validOnlyNumbers($this->value2)) array_push($this->errors, "Значення 2 не коректне");
            if (strlen($this->value2) == 0) array_push($this->errors, "Значення 2 не введене");
        }
    }

    public function display()
    {
        $result = null;
        if ($this->action == "sqrt") {
            $calc = new Calc($this->value1);
            if ($this->action == "sqrt") $result = $calc->sqrt();
            $this->errors = $this->array_concat($this->errors, $calc->errors);
            if (count($this->errors) == 0) {
                return $result;
            } else return $this->errors;
        } else {
            $calc = new Calc($this->value1, $this->value2);
            if ($this->action == "+") $result = $calc->plus();
            if ($this->action == "-") $result = $calc->minus();
            if ($this->action == "*") $result = $calc->product();
            if ($this->action == "/") $result = $calc->division();
            if ($this->action == "/") $result = $calc->division();
            if ($this->action == "pow") $result = $calc->pow();
            if ($this->action == "mod") $result = $calc->mod();

            $this->errors = $this->array_concat($this->errors, $calc->errors);
            if (count($this->errors) == 0) {
                return $result;
            } else return $this->errors;
        }

    }

    private function validOnlyNumbers($value)
    {
        $dot_amount = 0;
        for ($i = 0; $i < strlen($value); $i++) {
            if (!is_numeric($value[$i])) {
                if ($value[$i] == ".") {
                    if ($dot_amount != 0) return false;
                    else $dot_amount++;
                } else return false;
            }
        }
        return true;
    }

    function array_concat($arr1, $arr2)
    {
        for ($i = 0; $i < count($arr2); $i++) array_push($arr1, $arr2[$i]);
        return $arr1;
    }
}

?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $is_error = false;
    $result = null;

    $dispatch = new CalcDispatcher();
    $dispatch->dispatch();
    if (gettype($dispatch->display()) == 'array') {
        $is_error = true;
    } else {
        $result = $dispatch->display();
    }
}

?>
<!doctype html>
<html lang="Default">
<head>
    <style>
        h3 {
            margin: 20%;
            direction: ltr;
        }

        p {
            direction: ltr;
        }

        .calc-action-box {
            justify-content: space-between;
            direction: ltr;
        }

        .calc-action-box button {
            margin: auto;
        }

        form .error-input {
            border: 2px solid brown;
            color: brown;
            text-align: center;
        }

        form .sucsses-input {
            border: 2px solid green;
            color: green;
            text-align: center;

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
    <title>Task_3_4</title>


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
                            <a href="../../../labolatorni.php">Лаболаторні</a>
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
                        Лабораторна робота №3
                    </h1>
                    <h2 class="text-center mg-md  sm-shadow">
                        Завдання №4
                    </h2>
                    <h3>

                        <form action="task_3_4.php" method="get">
                            <input type="text" placeholder="Введіть вичло 1" name="value1"
                                   value="<?php echo $_GET['value1']; ?>">
                            <div></div>
                            <input type="text" placeholder="Введіть вичло 2" name="value2"
                                   value="<?php echo $_GET['value2']; ?>" <?php if ($_GET['action'] == 'sqrt') echo "disabled"; ?>>
                            <div class="calc-action-box">
                                <button type="submit" name="action" value="+">+</button>
                                <button type="submit" name="action" value="-">-</button>
                                <button type="submit" name="action" value="*">*</button>
                                <button type="submit" name="action" value="/">/</button>
                            </div>
                            <div class="calc-action-box">
                                <button type="submit" name="action" value="pow">pow</button>
                                <button type="submit" name="action" value="sqrt">sqrt</button>
                                <button type="submit" name="action" value="mod">mod</button>
                                <button disabled></button>
                            </div>

                            <?php
                            if ($is_error) {
                                echo "<input type='text' class='error-input' value='";
                                echo $dispatch->errors[0];
                                echo "'>";
                            }
                            ?>
                            <?php
                            if ($result) {
                                echo "<input type='text' class='sucsses-input' value='";
                                echo $result;
                                echo "'>";
                            }
                            ?>
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
                            Створити клас калькулятор (Calc). <br>
                            В клас включити методи, що реалізують всі арифметичні дії (додавання, віднімання, ділення,
                            ділення по модулю, добування кореня, піднесення до степеня).<br>
                            У кожному методі передбачити перевірку допустимості аргументів. Якщо аргумент виходить за
                            рамки допустимих значень - видати відповідне повідомлення.<br>
                            Перевірити працездатність класу створивши об'єкт і, викликавши кожний з його методів з
                            довільними аргументами.<br>
                            Створити клас для виводу і обробки форми розрахунку (CalcDispatcher). <br>
                            Розхрахунок повинен здійснюватися усередині методу display (). Обробка введення форми
                            повинна відбуватися усередині методу dispatch (). <br>
                            Передбачити перевірку на введення тільки чисел. Зв'яжіть класи Calc і CalcDispatcher
                            ставленням агрегації, таким чином, що б вся логіка калькулятора відбувалася за допомогою
                            об'єкту класу Calc.
                            <br>
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
                            &lt;?php<br>class Calc {<br> public $value1;<br> public $value2;<br> public $errors =
                            array();<br><br> function __construct(){<br> $arguments = func_get_args();<br>
                            $arguments_amount = func_num_args();<br> if ($arguments_amount == 1) {<br> $this -&gt;
                            value1 = $arguments[0];<br> }<br> else if ($arguments_amount == 2){<br> $this -&gt; value1 =
                            $arguments[0];<br> $this -&gt; value2 = $arguments[1];<br> }<br> else {<br>
                            array_push($this-&gt;errors, "Ви не ввели жодного значення");<br> }<br> }<br><br> public
                            function plus () {<br> return $this-&gt;value1 + $this-&gt;value2;<br> }<br><br> public
                            function minus () {<br> return $this-&gt;value1 - $this-&gt;value2;<br> }<br><br> public
                            function division () {<br> return $this-&gt;value1 / $this-&gt;value2;<br> }<br><br> public
                            function product () {<br> return $this-&gt;value1 * $this-&gt;value2;<br> }<br><br> public
                            function pow () {<br> return pow($this-&gt;value1, $this-&gt;value2);<br> }<br><br> public
                            function sqrt () {<br> if ($this-&gt;value1 &gt;= 2) return sqrt($this-&gt;value1);<br> else
                            array_push($this-&gt;errors, "Значення повинне бути не менше 2");<br> }<br><br> public
                            function mod () {<br> return $this-&gt;value1 % $this-&gt;value2;<br>
                            }<br><br>}<br>?&gt;<br><br>&lt;?php<br>class CalcDispatcher {<br> private $value1;<br>
                            private $value2;<br> private $action;<br> public $errors = array();<br><br> public function
                            dispatch(){<br> $this -&gt; value1 = $_GET['value1'];<br> if (!$this-&gt;validOnlyNumbers($this-&gt;value1))
                            array_push($this-&gt;errors, "Значення 1 не коректне");<br> if (strlen($this-&gt;value1) ==
                            0) array_push($this-&gt;errors, "Значення 1 не введене");<br> $this -&gt; action =
                            $_GET['action'];<br> if ($this-&gt;action != 'sqrt') {<br> $this-&gt;value2 =
                            $_GET['value2'];<br> if (!$this-&gt;validOnlyNumbers($this-&gt;value2)) array_push($this-&gt;errors,
                            "Значення 2 не коректне");<br> if (strlen($this-&gt;value2) == 0) array_push($this-&gt;errors,
                            "Значення 2 не введене");<br> }<br> }<br><br> public function display() {<br> $result =
                            null;<br> if ($this-&gt;action == "sqrt") {<br> $calc = new Calc($this-&gt;value1);<br> if
                            ($this-&gt;action == "sqrt") $result = $calc-&gt;sqrt();<br> $this-&gt;errors = $this-&gt;array_concat($this-&gt;errors,
                            $calc-&gt;errors);<br> if (count($this-&gt;errors) == 0) {<br> return $result;<br> } else
                            return $this-&gt;errors;<br> } else {<br> $calc = new Calc($this-&gt;value1, $this-&gt;value2);<br>
                            if ($this-&gt;action == "+") $result = $calc-&gt;plus();<br> if ($this-&gt;action == "-")
                            $result = $calc-&gt;minus();<br> if ($this-&gt;action == "*") $result = $calc-&gt;product();<br>
                            if ($this-&gt;action == "/") $result = $calc-&gt;division();<br> if ($this-&gt;action ==
                            "/") $result = $calc-&gt;division();<br> if ($this-&gt;action == "pow") $result = $calc-&gt;pow();<br>
                            if ($this-&gt;action == "mod") $result = $calc-&gt;mod();<br><br> $this-&gt;errors = $this-&gt;array_concat($this-&gt;errors,
                            $calc-&gt;errors);<br> if (count($this-&gt;errors) == 0) {<br> return $result;<br> } else
                            return $this-&gt;errors;<br> }<br><br> }<br><br> private function validOnlyNumbers($value) {<br>
                            $dot_amount = 0;<br> for ($i=0; $i &lt; strlen($value); $i++) {<br> if
                            (!is_numeric($value[$i])) {<br> if ($value[$i] == ".") {<br> if ($dot_amount != 0) return
                            false;<br> else $dot_amount++;<br> }<br> else return false;<br> }<br> }<br> return true;<br>
                            }<br><br> function array_concat ($arr1, $arr2) {<br> for ($i=0; $i &lt; count($arr2); $i++)
                            array_push($arr1, $arr2[$i]);<br> return $arr1;<br> }<br>}<br>?&gt;<br><br>&lt;?php<br>if($_SERVER['REQUEST_METHOD']
                            == "GET") {<br> $is_error = false;<br> $result = null;<br><br> $dispatch = new
                            CalcDispatcher();<br> $dispatch-&gt;dispatch();<br> if (gettype($dispatch-&gt;display()) ==
                            'array') { $is_error = true; }<br> else {<br> $result = $dispatch-&gt;display();<br>
                            }<br>}<br><br>?&gt; <br> <br> <br><br> &lt;form action="task_3_4.php" method="get"&gt;<br>
                            &lt;input type="text" placeholder="Введіть вичло 1" name="value1" value="&lt;?php echo
                            $_GET['value1']; ?&gt;"&gt;<br> &lt;div&gt; &lt;/div&gt;<br> &lt;input type="text"
                            placeholder="Введіть вичло 2" name="value2" value="&lt;?php echo $_GET['value2']; ?&gt;"
                            &lt;?php if ($_GET['action'] == 'sqrt') echo "disabled"; ?&gt;&gt;<br> &lt;div
                            class="calc-action-box"&gt;<br> &lt;button type="submit" name="action" value="+"&gt;+&lt;/button&gt;<br>
                            &lt;button type="submit" name="action" value="-"&gt;-&lt;/button&gt;<br> &lt;button
                            type="submit" name="action" value="*"&gt;*&lt;/button&gt;<br> &lt;button type="submit"
                            name="action" value="/"&gt;/&lt;/button&gt;<br> &lt;/div&gt;<br> &lt;div
                            class="calc-action-box"&gt;<br> &lt;button type="submit" name="action" value="pow"&gt;pow&lt;/button&gt;<br>
                            &lt;button type="submit" name="action" value="sqrt"&gt;sqrt&lt;/button&gt;<br> &lt;button
                            type="submit" name="action" value="mod"&gt;mod&lt;/button&gt;<br> &lt;button disabled&gt;&lt;/button&gt;<br>
                            &lt;/div&gt;<br><br> &lt;?php<br> if ($is_error) {<br> echo "&lt;input type='text'
                            class='error-input' value='";<br> echo $dispatch-&gt;errors[0];<br> echo "'&gt;";<br> }<br>
                            ?&gt;<br> &lt;?php<br> if ($result) {<br> echo "&lt;input type='text' class='sucsses-input'
                            value='";<br> echo $result;<br> echo "'&gt;";<br> }<br> ?&gt;<br>
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
