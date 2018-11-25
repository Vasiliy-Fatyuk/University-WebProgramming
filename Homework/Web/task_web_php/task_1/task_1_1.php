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
    <title>Task_1_1</title>

    
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

<!-- bloc-8 -->
<div class="bloc bgc-white feature-list b-parallax bg-lines-h2-bg l-bloc bg-repeat" id="bloc-8">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center mg-md  lg-shadow">
					Лабораторна робота №1
				</h1>
				<h2 class="text-center mg-md  sm-shadow">
					Завдання №1
				</h2>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['first'])){
                    $a=$_POST['first'];
                    $b=$_POST['second'];

                    $result=sin($a) + (log(abs($b)) / log($a)) - M_E*pow($a*$b);
                    $result=round($result, 4);
                    echo "Отримані результати <b>a =</b> $a <b>x =</b> $b <b>y =</b> $result";
                }
                ?>
                <div><h3>
                  <form action="task_1_1.php" method="post" class="">
                  <p>Значення а = : <input type="text" name="first"></p>
                  <p>Значення x = : <input type="text" name="second"></p>
                  <p><input type="submit"></p>
                  </form>
                    </h3>
                    </div>

			</div>
		</div>
	</div>
</div>
<!-- bloc-8 END -->

<!-- Bloc Group -->
<div class='bloc-group'>

<!-- bloc-9 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-9">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Завдання
				</h3>
				<p>
					Обчислити&nbsp;sin a + (ln |b| / ln a) - e^a*b, при a=2,67; b=-8,63;
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-9 END -->

<!-- bloc-10 -->
<div class="bloc bgc-white bloc-tile-2 bg-lines-h-bg l-bloc bg-repeat b-parallax" id="bloc-10">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md  sm-shadow">
					Результат мовою PHP+HTML
				</h3>
				<p class=" text-left">
					&lt;p&gt;<br>&lt;?php<br> if ($_SERVER['REQUEST_METHOD'] == 'POST' &amp;&amp; isset($_POST['first'])){<br> $a=$_POST['first'];<br> $b=$_POST['second'];<br><br> $result=sin($a) + (log(abs($b)) / log($a)) - M_E*pow($a*$b);<br> $result=round($result, 4);<br> echo "Отримані результати &lt;b&gt;a =&lt;/b&gt; $a &lt;b&gt;x =&lt;/b&gt; $b &lt;b&gt;y =&lt;/b&gt; $result";<br> }<br> ?&gt;<br> &lt;form action="../lab_1/task_1.php" method="post"&gt;<br> &lt;p&gt;Значення а = : &lt;input type="text" name="first" /&gt;&lt;/p&gt;<br> &lt;p&gt;Значення x = : &lt;input type="text" name="second" /&gt;&lt;/p&gt;<br> &lt;p&gt;&lt;input type="submit" /&gt;&lt;/p&gt;<br> &lt;/form&gt;<br> &lt;/p&gt;<br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-10 END -->
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
