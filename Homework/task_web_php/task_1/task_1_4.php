<!doctype html>
<html lang="Default">
<head>
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
	<script src="../../../js/lazysizes.min.js" defer></script>
    <title>Task_1_4</title>

    
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
                        <a href="../../labolatorni.php">Лаболаторні</a>
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

<!-- bloc-17 -->
<div class="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-17">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center mg-md  lg-shadow">
					Лаболаторна робота №1
				</h1>
				<h2 class="text-center mg-md  sm-shadow">
					Завдання №4
				</h2>
<h3>
                <?php
                $array = array();
                for ($i = 0; $i< 5; $i++) {
                    for ($j = 0; $j<4; $j++){
                        $array[$i][$j] = rand(-100, 100);
                    }
                }

                echo "<br>";
                echo "<br>";
                echo "Початкова матриця:";
                echo "<br>";
                renderArray($array);
                echo "<br>";
                echo "<br>";

                for ($i = 0; $i< 5; $i++) {
                    for ($j = 0; $j<4; $j++) {
                        if ($array[$i][$j] > 0 ) $array[$i][$j] = $array[$i][$j] / 5;
                        if ($array[$i][$j] < 0 ) $array[$i][$j] = $array[$i][$j] / 10;
                    }
                }
                echo "<br>";
                echo "Результат:";
                echo "<br>";
                renderArray($array);
                function renderArray($array) {
                    for ($i = 0; $i< 5; $i++) {
                        echo "<br>";
                        for ($j = 0; $j<4; $j++) {
                            echo $array[$i][$j];
                            echo "&nbsp;&nbsp;&nbsp";
                        }
                    }
                }
                ?>
</h3>
				
			</div>
		</div>
	</div>
</div>
<!-- bloc-17 END -->

<!-- Bloc Group -->
<div class='bloc-group'>

<!-- bloc-18 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-18">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Завдання
				</h3>
				<p>
					Задано прямокутну матрицю E(5,4). Отримати нову матрицю, поділивши всі невід&rsquo;ємні елементи на 5, а всі від&rsquo;ємні елементи — на 10.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-18 END -->

<!-- bloc-19 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-19">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Результат мовою PHP
				</h3>
				<p class=" text-left">
					&lt;?php<br> $array = array();<br> for ($i = 0; $i&lt; 5; $i++) {<br> for ($j = 0; $j&lt;4; $j++){<br> $array[$i][$j] = rand(-100, 100);<br> }<br> }<br><br> echo "&lt;br&gt;";<br> echo "&lt;br&gt;";<br> echo "Початкова матриця:";<br> echo "&lt;br&gt;";<br> renderArray($array);<br> echo "&lt;br&gt;";<br> echo "&lt;br&gt;";<br><br> for ($i = 0; $i&lt; 5; $i++) {<br> for ($j = 0; $j&lt;4; $j++) {<br> if ($array[$i][$j] &gt; 0 ) $array[$i][$j] = $array[$i][$j] / 5;<br> if ($array[$i][$j] &lt; 0 ) $array[$i][$j] = $array[$i][$j] / 10;<br> }<br> }<br> echo "&lt;br&gt;";<br> echo "Результат:";<br> echo "&lt;br&gt;";<br> renderArray($array);<br> function renderArray($array) {<br> for ($i = 0; $i&lt; 5; $i++) {<br> echo "&lt;br&gt;";<br> for ($j = 0; $j&lt;4; $j++) {<br> echo $array[$i][$j];<br> echo "&amp;nbsp;&amp;nbsp;&amp;nbsp";<br> }<br> }<br> }<br> ?&gt;<br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-19 END -->
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
