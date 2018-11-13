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
	<script src="../../../js/lazysizes.min.js" defer></script>
    <title>Task_2_1</title>

    
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

<!-- bloc-26 -->
<div class="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-26">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center mg-md  lg-shadow">
					Лаболаторна робота №2
				</h1>
				<h2 class="text-center mg-md  sm-shadow">
					Завдання №1
				</h2>
                <h3>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['first'])){
                echo isleap($_POST['first']);
                }
                function isleap($year) {
                    if ($year % 4 == 0) {
                            echo "Це високосний рік";
                        }
                        else {
                            echo "Це не високосний рік";
                        }
                }
                ?>
                    <form action="task_2_1.php" method="post">
                        <p><input type="text" placeholder="Ведіть рік" name="first"></p>
                        <p><input type="submit" value="Результат"></p>
                    </form>
                </h3>
				
			</div>
		</div>
	</div>
</div>
<!-- bloc-26 END -->

<!-- Bloc Group -->
<div class='bloc-group'>

<!-- bloc-27 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-27">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Завдання
				</h3>
				<p>
					Перевірити чи високосний рік.<br>Опис: Вам потрібно розробити програму, яка перевіряла б введене користувачем число (рік). Число може бути в діапазоні від 1 до 9999.<br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-27 END -->

<!-- bloc-28 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-28">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Результат мовою PHP+HTML
				</h3>
				<p class=" text-left">
                    &lt;?php<br> if ($_SERVER['REQUEST_METHOD'] == 'POST' &amp;&amp; isset($_POST['first'])){<br> echo isleap($_POST['first']);<br> }<br> function isleap($year) {<br> if ($year % 4 == 0) {<br> echo "Це високосний рік";<br> }<br> else {<br> echo "Це не високосний рік";<br> }<br> }<br> ?&gt;<br><br> &lt;form action="task_2_1.php" method="post"&gt;<br> &lt;p&gt;&lt;input type="text" placeholder="Ведіть рік" name="first"&gt;&lt;/p&gt;<br> &lt;p&gt;&lt;input type="submit" value="Результат"&gt;&lt;/p&gt;<br> &lt;/form&gt;<br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-28 END -->
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
