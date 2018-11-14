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
    <title>Task_2_5</title>

    
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
				<a class="navbar-brand" href="../../../../index.php"><img src="../../../../img/icons8-apple-24.png" alt="logo" />Web</a>
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
					Лабораторні робота №2
				</h1>
				<h2 class="text-center mg-md  sm-shadow">
					Завдання №5
				</h2>
<h3>
                <?php
                session_start();
                if (!isset($_SESSION['file_name_array'])) $_SESSION['file_name_array'] = json_encode(['test']);
                function getFileNameArray() {
                    return json_decode($_SESSION['file_name_array']);
                }
                function setValueInFileNameArray($value) {
                    $arr = getFileNameArray();
                    array_push($arr, $value);
                    $_SESSION['file_name_array'] = json_encode($arr);
                }
                function checkUploadCount($value) {
                    $arr = getFileNameArray();
                    $arr = array_count_values($arr);
                    if (isset($arr[$value]) && $arr[$value] > 9) return false;
                    return true;
                }
                ?>
                <form enctype="multipart/form-data" action="#" method="post">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="file" type="file" />
                    <input type="submit" value="Відправити файл" />


                    <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST") {
                        $file = $_FILES['file']['name'];
                        if (checkUploadCount($file)) {
                            setValueInFileNameArray($file);
                            echo "<div class='success'>Файл додано</div>";
                        } else {
                            echo "<div class='error'>Файл не додано</div>";
                        }
                    }
                    ?>

                </form>
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
					Створити скрипт підрахунку кількості загрузок певного файлу і заборонити завантаження файлу після 10 таких завантажень<br>
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
					&lt;?php<br>session_start();<br>if (!isset($_SESSION['file_name_array'])) $_SESSION['file_name_array'] = json_encode(['test']);<br>function getFileNameArray() {<br> return json_decode($_SESSION['file_name_array']);<br>}<br>function setValueInFileNameArray($value) {<br> $arr = getFileNameArray();<br> array_push($arr, $value);<br> $_SESSION['file_name_array'] = json_encode($arr);<br>}<br>function checkUploadCount($value) {<br> $arr = getFileNameArray();<br> $arr = array_count_values($arr);<br> if (isset($arr[$value]) &amp;&amp; $arr[$value] &gt; 9) return false;<br> return true;<br>}<br>?&gt;<br>&lt;form enctype="multipart/form-data" action="#" method="post"&gt;<br> &lt;input type="hidden" name="MAX_FILE_SIZE" value="30000" /&gt;<br> &lt;input name="file" type="file" /&gt;<br> &lt;input type="submit" value="Відправити файл" /&gt;<br><br><br> &lt;?php<br> if($_SERVER['REQUEST_METHOD'] == "POST") {<br> $file = $_FILES['file']['name'];<br> if (checkUploadCount($file)) {<br> setValueInFileNameArray($file);<br> echo "&lt;div class='success'&gt;Файл додано&lt;/div&gt;";<br> } else {<br> echo "&lt;div class='error'&gt;Файл не додано&lt;/div&gt;";<br> }<br> }<br> ?&gt;<br><br>&lt;/form&gt;<br>
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
					<a class="social-lg" href="../../../../index.php"><span class="fa fa-twitter icon-lg"></span></a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="text-center">
					<a class="social-lg" href="../../../../index.php"><span class="fa fa-facebook icon-lg"></span></a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="text-center">
					<a class="social-lg" href="../../../../index.php"><span class="fa fa-dribbble icon-lg"></span></a>
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
