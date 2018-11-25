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
	<script src="../../../../js/lazysizes.min.js" defer></script>
    <title>Task_1_5</title>

    
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
                        <a href="../../../labolatorni.php">Лаболаторні</a>
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

<!-- bloc-20 -->
<div class="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-20">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center mg-md  lg-shadow">
					Лаболаторна робота №1
				</h1>
				<h2 class="text-center mg-md  sm-shadow">
					Завдання №5
				</h2>
<h3>
                <?php
                $a1 = array();
                for ($i=0; $i < 7; $i++) $a1[$i] = rand(0, 7);

                $a2 = array();
                for ($i=0; $i < 7; $i++) $a2[$i] = rand(0, 7);


                function getSumArrayElements($array) {
                    $suma = 0;
                    for ($i=0; $i < count($array); $i++) $suma += $array[$i];
                    return $suma;
                }

                $s1 = getSumArrayElements($a1) + getSumArrayElements($a2);

                echo "<br>";
                echo "Результат: ";
                echo $s1;
                ?>
</h3>
				
			</div>
		</div>
	</div>
</div>
<!-- bloc-20 END -->

<!-- Bloc Group -->
<div class='bloc-group'>

<!-- bloc-21 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-21">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Завдання
				</h3>
				<p>
					Обчислити значення змінної s=s1+s2, де s1 – сума елементів масиву A1(7), абсолютна величина яких не перевищує числа 7, а s2 – сума елементів масиву A2(7), що володіють тією ж властивістю.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-21 END -->

<!-- bloc-22 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-22">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Результат мовою PHP
				</h3>
				<p class=" text-left">
					&lt;?php<br> $a1 = array();<br> for ($i=0; $i &lt; 7; $i++) $a1[$i] = rand(0, 7);<br><br> $a2 = array();<br> for ($i=0; $i &lt; 7; $i++) $a2[$i] = rand(0, 7);<br><br><br> function getSumArrayElements($array) {<br> $suma = 0;<br> for ($i=0; $i &lt; count($array); $i++) $suma += $array[$i];<br> return $suma;<br> }<br><br> $s1 = getSumArrayElements($a1) + getSumArrayElements($a2);<br><br> echo "&lt;br&gt;";<br> echo "Результат: ";<br> echo $s1;<br> ?&gt;<br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-22 END -->
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
