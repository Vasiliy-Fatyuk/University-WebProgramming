<?php

class User
{

    private $name = "";
    private $surname = "";
    private $age = "";
    private $email = "";

    function __construct($name, $surname, $age, $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->surname = $surname;
    }

    public function parametrValidation()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['name'])) {
            $errors = array();
            if (strlen($this->name) == 0) array_push($errors, "Ім'я не введено");
            else if (strlen($this->surname) == 0) array_push($errors, "Фамілію не введено");
            else if (strlen($this->age) == 0) array_push($errors, "Вік не введено");
            else if (strlen($this->email) == 0) array_push($errors, "Email не введено");
            return $errors;
        }
    }

    public function renderInfoAboutUser()
    {
        echo "Користувач:";
        echo $this->name;
        echo " ";
        echo $this->surname;
        echo "<div></div>";
        echo "Вік: ";
        echo $this->age;
        echo "<div></div>";
        echo "Email:";
        echo $this->email;
        echo "</div>";

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
    <title>Task_3_3</title>


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
                        Лабораторна робота №3
                    </h1>
                    <h2 class="text-center mg-md  sm-shadow">
                        Завдання №3
                    </h2>


                    <h3>

                        <?php
                        $result_valid = false;
                        $user = new User($_POST['name'], $_POST['surname'], $_POST['age'], $_POST['email']);
                        if (count($user->parametrValidation()) == 0) {
                            $result_valid = true;
                        }
                        ?>


                        <form action="task_3_3.php" method="post">
                            <input type="text" placeholder="Введіть ім'я" name="name"
                                   value="<?php echo $_POST['name']; ?>">
                            <input type="text" placeholder="Введіть фамілію" name="surname"
                                   value="<?php echo $_POST['surname']; ?>">
                            <input type="text" placeholder="Введіть вік" name="age"
                                   value="<?php echo $_POST['age']; ?>">
                            <input type="text" placeholder="Введіть email" name="email"
                                   value="<?php echo $_POST['email']; ?>">
                            <button type="submit">Готово</button>
                        </form>
                        <div class="result">

                            <?php if ($result_valid) $user->renderInfoAboutUser(); ?>
                        </div>

                        <div class="error">
                            <?php
                            for ($i = 0; $i < count($user->parametrValidation()); $i++) {
                                echo $user->parametrValidation()[$i];
                                break;
                            }
                            ?>
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
                            Створіть клас користувача, з полями: прізвище, ім'я, вік і e-mail.<br>
                            У HTML формі користувач вводить в чотири різні поля: прізвище, ім'я, вік і e-mail.<br>
                            Після натискання клавіші кнопки ГОТОВО створюється об'єкт користувача, з методом, який
                            вносить ці дані в поле об'єкту і далі виводить їх використовуючи другий метод класу
                            користувача.<br>
                            У формі передбачити перевірку, що всі поля перед відправленням не порожні.
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
                            &lt;?php<br><br>class User {<br><br> private $name = "";<br> private $surname = "";<br>
                            private $age = "";<br> private $email = "";<br> function __construct($name,$surname, $age,
                            $email){<br> $this -&gt; name = $name;<br> $this -&gt; age = $age;<br> $this -&gt; email =
                            $email;<br> $this -&gt; surname =$surname;<br> }<br><br> public function
                            parametrValidation() {<br> if($_SERVER['REQUEST_METHOD'] == "POST" &amp;&amp;
                            isset($_POST['name'])) {<br> $errors = array();<br> if (strlen($this-&gt;name) == 0)
                            array_push($errors, "Ім'я не введено");<br> else if (strlen($this-&gt;surname) == 0)
                            array_push($errors, "Фамілію не введено");<br> else if (strlen($this-&gt;age) == 0)
                            array_push($errors, "Вік не введено");<br> else if (strlen($this-&gt;email) == 0)
                            array_push($errors, "Email не введено");<br> return $errors;<br> }<br> }<br><br> public
                            function renderInfoAboutUser() {<br> echo "Користувач:";echo $this-&gt;name;echo " ";echo
                            $this-&gt;surname; echo "&lt;div&gt;&lt;/div&gt;";<br> echo "Вік: ";echo $this-&gt;age;<br>
                            echo "&lt;div&gt;&lt;/div&gt;";<br> echo "Email:";echo $this-&gt;email; echo "&lt;/div&gt;";<br><br>
                            }<br><br>}<br>?&gt;&nbsp;<br> <br> <br>&lt;?php<br> $result_valid = false;<br> $user = new
                            User($_POST['name'],$_POST['surname'], $_POST['age'], $_POST['email']);<br> if (count($user-&gt;parametrValidation())
                            == 0) {<br> $result_valid = true;<br> }<br> ?&gt;<br><br><br> &lt;form action="task_3_3.php"
                            method="post"&gt;<br> &lt;input type="text" placeholder="Введіть ім'я" name="name" value="&lt;?php
                            echo $_POST['name']; ?&gt;"&gt;<br> &lt;input type="text" placeholder="Введіть фамілію"
                            name="surname" value="&lt;?php echo $_POST['surname']; ?&gt;"&gt;<br> &lt;input type="text"
                            placeholder="Введіть вік" name="age" value="&lt;?php echo $_POST['age']; ?&gt;"&gt;<br> &lt;input
                            type="text" placeholder="Введіть email" name="email" value="&lt;?php echo $_POST['email']; ?&gt;"&gt;<br>
                            &lt;button type="submit"&gt;Готово&lt;/button&gt;<br> &lt;/form&gt;<br> &lt;div
                            class="result"&gt;<br><br> &lt;?php if ($result_valid) $user-&gt;renderInfoAboutUser(); ?&gt;<br>
                            &lt;/div&gt;<br><br> &lt;div class="error"&gt;<br> &lt;?php<br> for ($i=0; $i &lt;
                            count($user-&gt;parametrValidation()); $i++) {<br> echo
                            $user-&gt;parametrValidation()[$i];<br> break;<br> }<br> ?&gt;<br> &lt;/div&gt;<br>
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
