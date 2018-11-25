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
	<link href='https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Domine&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
	<script src="../../../../js/jquery-2.1.0.js"></script>
	<script src="../../../../js/bootstrap.js"></script>
	<script src="../../../../js/blocs.js"></script>
	<script src="./js/jqBootstrapValidation.js"></script>
	<script src="./js/formHandler.js"></script>
	<script src="../../../../js/lazysizes.min.js" defer></script>
    <title>Task_2_2</title>

    
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
				<a class="navbar-brand" href="../../../../index.html"><img src="../../../../img/icons8-apple-24.png" alt="logo" />Web</a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
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

<!-- bloc-29 -->
<div class="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-29">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center mg-md  lg-shadow">
					Лабораторна робота №2
				</h1>
				<h2 class="text-center mg-md  sm-shadow">
					Завдання №2
				</h2>
<h3>
                <?php
                function searchF ($value, $value_for_search) {
                    $value_as_array = array();
                    for ($i=0; $i < strlen($value); $i++)
                        array_push($value_as_array, $value[$i]);
                    return array_count_values($value_as_array)[$value_for_search];
                }
                ?>
                <form action="#" method="get">
                    <input type="text" placeholder="Введіть число" name="value"> <br/>
                    <input type="text" placeholder="Введіть число для пошуку" name="value_for_search"> <br/>
                    <button type="submit">Пошук</button>
                    <div class="result">
                        <?php
                        if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['value'])) {
                            echo "Результат: ";
                            echo searchF($_GET['value'], $_GET['value_for_search']);
                        }
                        ?>
                    </div>
                </form>
</h3>
				
			</div>
		</div>
	</div>
</div>
<!-- bloc-29 END -->

<!-- Bloc Group -->
<div class='bloc-group'>

<!-- bloc-30 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-30">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Завдання
				</h3>
				<p>
					Вам потрібно розробити програму, яка б зчитувала кількість входжень якої-небудь обраної вами цифри у вибраному вами числі. Наприклад: цифра 5 в числі 442158755745 зустрічається 4 рази.<br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-30 END -->

<!-- bloc-31 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-31">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Результат мовою PHP+HTML
				</h3>
				<p class=" text-left">
					&lt;?php<br>function searchF ($value, $value_for_search) {<br>$value_as_array = array();<br>for ($i=0; $i &lt; strlen($value); $i++)<br>array_push($value_as_array, $value[$i]);<br>return array_count_values($value_as_array)[$value_for_search];<br>}<br>?&gt;<br>&lt;form action="#" method="get"&gt;<br> &lt;input type="text" placeholder="Введіть число" name="value"&gt; &lt;br/&gt;<br> &lt;input type="text" placeholder="Введіть число для пошуку" name="value_for_search"&gt; &lt;br/&gt;<br> &lt;button type="submit"&gt;Пошук&lt;/button&gt;<br> &lt;div class="result"&gt;<br> &lt;?php<br> if($_SERVER['REQUEST_METHOD'] == "GET" &amp;&amp; isset($_GET['value'])) {<br> echo "Результат: ";<br> echo searchF($_GET['value'], $_GET['value_for_search']);<br> }<br> ?&gt;<br> &lt;/div&gt;<br>&lt;/form&gt;<br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-31 END -->
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
					<a class="social-lg" href="../../../../index.html"><span class="fa fa-twitter icon-lg"></span></a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="text-center">
					<a class="social-lg" href="../../../../index.html"><span class="fa fa-facebook icon-lg"></span></a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="text-center">
					<a class="social-lg" href="../../../../index.html"><span class="fa fa-dribbble icon-lg"></span></a>
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
