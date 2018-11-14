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
    <link rel="stylesheet" type="text/css" href="../test/css/main.css" media="screen" />
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
	<link href='https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Domine&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<script src="../../../../js/jquery-2.1.0.js"></script>
	<script src="../../../../js/bootstrap.js"></script>
	<script src="../../../../js/blocs.js"></script>
	<script src="./js/jqBootstrapValidation.js"></script>
	<script src="./js/formHandler.js"></script>
	<script src="../../../../js/lazysizes.min.js" defer></script>
    <title>Task_5_1</title>
    
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
    <div class
         ="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-38">
        <!--    <div class="container bloc-sm">-->

        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center mg-md  lg-shadow">
                    Лабораторні робота №5
                </h1>
                <h2 class="text-center mg-md  sm-shadow">
                    Завдання №1
                </h2>
                <!---->
                <style>
                    #wrapp {
                        display: grid;
                        grid-template-columns: 250px 100px;
                        grid-column-gap: 40px;
                    }
                    h4{
                        display: grid;

                    }
                </style>
                <h4>
                    <div id="wrapp">

                    </div>

                </h4>


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
                    Ввести масив чисел. Організувати сортування за зменшенням і зростанням двох видів:<br>
                    символьне та числове.<br>
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
					Результат мовою JS+HTML
				</h3>
				<p class=" text-left">
                    script<br><br>
                    let HTML = "";<br>
                    const numberArray = [9, 4, 4, 2, 1, 3, 5];<br>
                    const charArray = ['b', 'z', 'g', 't', 'a', 'u', 'q'];<br>


                    addToHtml(addDivTag("Початковий масив: "));<br>
                    addToHtml(addDivTag(renderArray(numberArray)));<br>
                    addToHtml(addDivTag("Сортування за спаданням: "));<br>
                    addToHtml(addDivTag(renderArray(sortNumberArrayAsIncrease(numberArray))));<br>
                    addToHtml(addDivTag("Сортування за зростанням: "));<br>
                    addToHtml(addDivTag(renderArray(sortNumberArrayAsDecrease(numberArray))));<br>

                    addToHtml(addDivTag("&nbsp;"));<br>
                    addToHtml(addDivTag("&nbsp;"));<br>

                    addToHtml(addDivTag("Початковий масив"));<br>
                    addToHtml(addDivTag(renderArray(charArray)));<br>
                    addToHtml(addDivTag("Сортування за спаданням: "));<br>
                    addToHtml(addDivTag(renderArray(sortCharsArrayAsIncrease(charArray))));<br>
                    addToHtml(addDivTag("Сортування за зростанням: "));<br>
                    addToHtml(addDivTag(renderArray(sortCharsArrayAsDecrease(charArray))));<br>

                    renderHTML();<br>


                    function addToHtml(string) {<br>
                    HTML += string;<br>
                    }<br>
                    function addDivTag(string) {<br>
                    let result = "<dіv>";<br>
                    result += string;<br>
                    result += "</dіv>";<br>
                return result;<br>
                }<br>
                function renderArray(array) {<br>
                let result = "";<br>
                for (i=0; i<array.length; i++) {<br>
                result += array[i];<br>
                result += " ";<br>
                }<br>
                return result;<br>
                }<br>
                function renderHTML() {<br>
                document.getElementById('wrapp').innerHTML = HTML;<br>
                }<br>

                function sortNumberArrayAsDecrease(array) {<br>
                return array.sort((value1, value2) => {<br>
                if (value1 > value2) return 1;<br>
                else return -1;<br>
                });<br>
                }<br>
                function sortNumberArrayAsIncrease(array) {<br>
                return array.sort((value1, value2) => {<br>
                if (value1 < value2) return 1;<br>
                else return -1;<br>
                });<br>
                }<br>
                function sortCharsArrayAsIncrease(array) {<br>
                return array.sort().reverse();<br>
                }<br>
                function sortCharsArrayAsDecrease(array) {<br>
                return array.sort();<br>
                }<br>
                    script<br><br>

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
<script src="../../task_web_js/task_5/task_5_1.js"></script>
</html>
