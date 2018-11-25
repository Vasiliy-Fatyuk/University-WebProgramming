<?php
$arr = array(
    array(
        'text' => "Test1",
        'cells' => '1,2,3,4,6,7,8,9',
        'align' => 'right',
        'valign' => 'top',
        'color' => 'red',
        'bgcolor' => 'blue'
    ),
    array(
        'text' => "Test2",
        'cells' => '13,14,15,18,19,20,23,24,25',
        'align' => 'center',
        'valign' => 'middle',
        'color' => 'blue',
        'bgcolor' => 'red'
    ),
);
function getTable(array $arr){
// Створюю масив з номерів осередків які ввів користувач в массівв $ arr під
// ключем cells і тут же його сортую в порядку зростання
for ($i = 0; $i < count($arr); $i++) {
    $delimiter = ',';
    $arr_cells[] = explode($delimiter, $arr[$i]['cells']);
    sort($arr_cells[$i]);
}
// КІНЕЦЬ Створення масиву з номерів, які ввів користувач
$size = 5; // Размер Таблицы = $size*$size.
// МОЖНА вибирати будь-який розмір матриці.

static $k = 1;
// Під кожен елемент створюю окремий масив
$colspan = array();
$rowspan = array();
$width = array();
$height = array();
$class = array();
$color = array();
$bgcolor = array();
$text = array();
// Заповнюю тадліцу даними за замовчуванням
for ($i = 1; $i <= $size * $size; $i++) {
    $width[] = '100';
    $height[] = '100';
    $colspan[] = '1';
    $rowspan[] = '1';
    $text[] = $i;
}
// Основний код програми

for ($i = 0; $i < count($arr_cells); $i++) {
    // запам'ятовуючи для кожної групи осередків потрібні дані
    $color[$arr_cells[$i][0] - 1] = $arr[$i]['color'];
    $bgcolor[$arr_cells[$i][0] - 1] = $arr[$i]['bgcolor'];
    $text[$arr_cells[$i][0] - 1] = $arr[$i]['text'];
    $align[$arr_cells[$i][0] - 1] = $arr[$i]['align'];
    $valign[$arr_cells[$i][0] - 1] = $arr[$i]['valign'];

    $count = count($arr_cells[$i]);
    $row = 1;
    for ($s = $count - 2, $j = 1; $j < $count, $s >= 0; $j++, $s--) {
        $class[$arr_cells[$i][$j] - 1] = 'hidden';// для непотрібних мені осередків привласнюю клас
        // Установлюю число осередків, які повинні бути об'єднані по вертикалі.
        if (($arr_cells[$i][$count - $j] - $arr_cells[$i][$s]) != 1) {
            $row++;
        }
    }
    $col = $count / $row;// Установлюю число осередків, які повинні бути об'єднані по горизонталі
    $colspan[$arr_cells[$i][0] - 1] = $col;
    $rowspan[$arr_cells[$i][0] - 1] = $row;
    // Перевірка того якщо номери осередків йдуть підряд
    for ($l = 1; $l < $count; $l++) {
        if ((max($arr_cells[$i]) - min($arr_cells[$i])) == $l * $size - 1) {
            $rowspan[$arr_cells[$i][0] - 1] = $count / $size;
            $colspan[$arr_cells[$i][0] - 1] = $size;
        }
    }
    // КІНЕЦЬ Перевірки того якщо номери осередків йдуть підряд
}
// КІНЕЦЬ Основного коду програми
?>

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
    <link rel="stylesheet" type="text/css" href="../test/css/main.css" media="screen"/>
    <!-- Bootstrap -->
    <link href="../test/css/bootstrap.css" rel="stylesheet">
    <link href="../test/css/font-awesome.css" rel="stylesheet">
    <link href="../test/css/mystyle.css" rel="stylesheet">
    <link href="../test/js/bootstrap.js" rel="stylesheet">


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
    <title>Task_3_6</title>


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

    <!-- bloc-38 -->
    <div class
         ="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-38">
        <!--    <div class="container bloc-sm">-->

        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center mg-md  lg-shadow">
                    Лабораторні робота №3
                </h1>
                <h2 class="text-center mg-md  sm-shadow">
                    Завдання №6
                </h2>
                <!---->

                <h3>

                    <div class=" container-fluid">

                        <div class=" col-lg-<?php echo $size ?>">
                            <table class="table table-bordered">
                                <?php for ($i = 0; $i < $size; $i++) {
                                    ?>
                                    <tr>
                                        <?php for ($j = 0; $j < $size; $j++, $k++) { ?>
                                            <td colspan="<?php echo $colspan[$k - 1] ?>"
                                                rowspan="<?php echo $rowspan[$k - 1] ?>"
                                                class="<?php echo $class[$k - 1] ?>"
                                                style="
                                                        width: <?php echo $colspan[$k - 1] * $width[$k - 1] . 'px'; ?>;
                                                        height: <?php echo $rowspan[$k - 1] * $height[$k - 1] . 'px'; ?>;
                                                        background: <?php echo $bgcolor[$k - 1] ?>;
                                                        color: <?php echo $color[$k - 1] ?>;
                                                        text-align: <?php echo $align[$k - 1] ?>;
                                                        vertical-align: <?php echo $valign[$k - 1] ?>;
                                                        ">
                                                <?php echo $text[$k - 1]; ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>


                        <?php } ?> <! - КІНЕЦЬ тіла функції getTable ->

                        <?php getTable($arr); ?> <! - Виклик функції getTable ($ arr) ->

                        <!--            </div>-->
                    </div>
                </h3>
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
                                Необхідно реалізувати метод (функцію), яка згенерує HTML сторінку по заданих параметрах.<br>
                                На вхід подається двовимірний масив з параметрами.<br>
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
                                <br>&lt;?php<br>$arr = array(<br> array(<br> 'text' =&gt; "Test1",<br> 'cells' =&gt;
                                '1,2,3,4,6,7,8,9',<br> 'align' =&gt; 'right',<br> 'valign' =&gt; 'top',<br> 'color' =&gt;
                                'red',<br> 'bgcolor' =&gt; 'blue'<br> ),<br> array(<br> 'text' =&gt; "Test2",<br>
                                'cells' =&gt; '13,14,15,18,19,20,23,24,25',<br> 'align' =&gt; 'center',<br> 'valign' =&gt;
                                'middle',<br> 'color' =&gt; 'blue',<br> 'bgcolor' =&gt; 'red'<br> ),<br>);<br>function
                                getTable(array $arr){<br>// Створюю масив з номерів осередків які ввів користувач в
                                массівв $ arr під<br>// ключем cells і тут же його сортую в порядку зростання<br>for($i
                                = 0;$i &lt; count($arr);$i++)<br>{<br> $delimiter =',';<br> $arr_cells[] =
                                explode($delimiter, $arr[$i]['cells']);<br> sort($arr_cells[$i]);<br>}<br>// КІНЕЦЬ
                                Створення масиву з номерів, які ввів користувач<br>$size =5; // Размер Таблицы =
                                $size*$size.<br>// МОЖНА вибирати будь-який розмір матриці.<br><br>static $k=1;<br>//
                                Під кожен елемент створюю окремий масив<br>$colspan = array();<br>$rowspan =
                                array();<br>$width = array();<br>$height = array();<br>$class = array();<br>$color =
                                array();<br>$bgcolor = array();<br>$text = array();<br>// Заповнюю тадліцу даними за
                                замовчуванням<br>for($i=1; $i &lt;= $size*$size; $i++)<br>{<br> $width[] = '100';<br>
                                $height[] = '100';<br> $colspan[] = '1';<br> $rowspan[] = '1';<br> $text[] =
                                $i;<br>}<br>// Основний код програми<br><br>for($i=0;$i&lt;count($arr_cells); $i++)<br>{<br>
                                // запам'ятовуючи для кожної групи осередків потрібні дані<br>
                                $color[$arr_cells[$i][0]-1] = $arr[$i]['color'];<br> $bgcolor[$arr_cells[$i][0]-1] =
                                $arr[$i]['bgcolor'];<br> $text[$arr_cells[$i][0]-1] = $arr[$i]['text'];<br>
                                $align[$arr_cells[$i][0]-1] = $arr[$i]['align'];<br> $valign[$arr_cells[$i][0]-1] =
                                $arr[$i]['valign'];<br><br> $count =count($arr_cells[$i]);<br> $row=1;<br> for($s=
                                $count-2 ,$j=1;$j&lt;$count,$s &gt;= 0; $j++, $s--)<br> {<br>
                                $class[$arr_cells[$i][$j]-1] = 'hidden';// для непотрібних мені осередків привласнюю
                                клас<br> // Установлюю число осередків, які повинні бути об'єднані по вертикалі.<br>
                                if(($arr_cells[$i][$count -$j] - $arr_cells[$i][$s]) != 1 )<br> {<br> $row++;<br> }<br>
                                }<br> $col =$count/$row;// Установлюю число осередків, які повинні бути об'єднані по
                                горизонталі<br> $colspan[$arr_cells[$i][0]-1] = $col;<br> $rowspan[$arr_cells[$i][0]-1]
                                = $row;<br> // Перевірка того якщо номери осередків йдуть підряд<br> for($l=1;$l&lt;$count;$l++)<br>
                                {<br> if((max($arr_cells[$i])-min($arr_cells[$i])) == $l*$size-1)<br> {<br>
                                $rowspan[$arr_cells[$i][0]-1] = $count/$size;<br> $colspan[$arr_cells[$i][0]-1] = $size;<br>
                                }<br> }<br> // КІНЕЦЬ Перевірки того якщо номери осередків йдуть підряд<br>}<br>//
                                КІНЕЦЬ Основного коду програми<br>?&gt; <br> <br> <br>&nbsp;<br>&lt;div class="
                                container-fluid"&gt;<br><br> &lt;div class=" col-lg-&lt;?php echo$size?&gt;"&gt;<br>
                                &lt;table class="table table-bordered"&gt;<br> &lt;?php for($i=0;$i&lt;$size;$i++)<br>
                                {?&gt;<br> &lt;tr&gt;<br> &lt;?php for($j=0;$j&lt;$size;$j++,$k++){ ?&gt;<br> &lt;td
                                colspan="&lt;?php echo $colspan[$k-1]?&gt;"<br> rowspan="&lt;?php echo $rowspan[$k-1]?&gt;"<br>
                                class="&lt;?php echo $class[$k-1]?&gt;"<br> style="<br> width: &lt;?php echo
                                $colspan[$k-1]*$width[$k-1].'px';?&gt;;<br> height: &lt;?php echo
                                $rowspan[$k-1]*$height[$k-1].'px';?&gt;;<br> background: &lt;?php echo $bgcolor[$k-1]?&gt;;<br>
                                color: &lt;?php echo $color[$k-1]?&gt;;<br> text-align: &lt;?php echo $align[$k-1]?&gt;;<br>
                                vertical-align: &lt;?php echo $valign[$k-1]?&gt;;<br> "&gt;<br> &lt;?php echo
                                $text[$k-1];?&gt;&lt;/td&gt;<br> &lt;?php }?&gt;<br> &lt;/tr&gt;<br> &lt;?php }?&gt;<br>
                                &lt;/table&gt;<br> &lt;/div&gt;<br><br><br> &lt;?php }?&gt; &lt;! - КІНЕЦЬ тіла функції
                                getTable -&gt;<br><br> &lt;?php getTable($arr); ?&gt; &lt;! - Виклик функції getTable ($
                                arr) -&gt;<br><br> &lt;!-- &lt;/div&gt;--&gt;<br> &lt;/div&gt;<br>
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
                            <a class="social-lg" href="../../../../index.html"><span
                                        class="fa fa-instagram icon-lg"></span></a>
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
