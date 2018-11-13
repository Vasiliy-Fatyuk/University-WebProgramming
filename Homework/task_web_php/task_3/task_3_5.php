<?php
class TicTacGame {
    private $fieldWidth = 4;
    private $fieldHeight = 4;

    private $countToWin = 4;


    private $field = array();


    private $winnerCells = array();

    private $currentPlayer = 1; // 1 або 2, а після закінчення гри - null.
    private $winner = null; // після закінчення гри буде містити 1 або 2.


    public function makeMove($x, $y) {
//    Враховуємо хід, якщо виконуються всі умови:
//     1) гра ще йде,
//    2) клітина знаходиться в межах ігрового поля.
//       3) в поле на зазначеному місці ще порожньо
        if(
            $this->currentPlayer
            &&
            $x >= 0 && $x < $this->fieldWidth
            &&
            $y >= 0 && $y < $this->fieldHeight
            &&
            empty($this->field[$x][$y]))
        {
            $current = $this->currentPlayer;

            $this->field[$x][$y] = $current;
            $this->currentPlayer = ($current == 1) ? 2 : 1;

            $this->checkWinner();
        }
    }

    /**
     * Поїск
     */
    private function checkWinner() {
        for($y = 0; $y < $this->fieldHeight; $y++) {
            for($x = 0; $x < $this->fieldWidth; $x++) {
                $this->checkLine($x, $y, 1, 0);
                $this->checkLine($x, $y, 1, 1);
                $this->checkLine($x, $y, 0, 1);
                $this->checkLine($x, $y, -1, 1);
            }
        }
        if($this->winner) {
            $this->currentPlayer = null;
        }
    }

    /**
     * Провірка чи знаходиться тут хтось
     */
    private function checkLine($startX, $startY, $dx, $dy) {
        $x = $startX;
        $y = $startY;
        $field = $this->field;
        $value = isset($field[$x][$y])? $field[$x][$y]: null;
        $cells = array();
        $foundWinner = false;
        if($value) {
            $cells[] = array($x, $y);
            $foundWinner = true;
            for($i=1; $i < $this->countToWin; $i++) {
                $x += $dx;
                $y += $dy;
                $value2 = isset($field[$x][$y])? $field[$x][$y]: null;
                if($value2 == $value) {
                    $cells[] = array($x, $y);
                } else {
                    $foundWinner = false;
                    break;
                }
            }
        }
        if($foundWinner) {
            foreach($cells as $cell) {
                $this->winnerCells[$cell[0]][$cell[1]] = $value;
            }
            $this->winner = $value;
        }
    }

    /*
     * Функції нижче дозволяють отримати поточний стан гри і ігрового поля.)
     */

    public function getCurrentPlayer() { return $this->currentPlayer; }
    public function getWinner()        { return $this->winner; }
    public function getField()         { return $this->field; }
    public function getWinnerCells()   { return $this->winnerCells; }
    public function getFieldWidth()    { return $this->fieldWidth; }
    public function getFieldHeight()   { return $this->fieldHeight; }
}
?>


<?php

session_start();

//Сохранення сесії (кукі)
//Якщо ні то начати нову гру
$game = isset($_SESSION['game'])? $_SESSION['game']: null;
if(!$game || !is_object($game)) {
    $game = new TicTacGame();
}

// Опрацювання запроса користувача
$params = $_GET + $_POST;
if(isset($params['action'])) {
    $action = $params['action'];

    if($action == 'move') {
        // Опрацювання
        $game->makeMove((int)$params['x'], (int)$params['y']);

    } else if($action == 'newGame') {
        // Користувач вирішив грати зпочатку
        $game = new TicTacGame();
    }
}

$_SESSION['game'] = $game;


// Вітображаєм сторінку HTML
$width = $game->getFieldWidth();
$height = $game->getFieldHeight();
$field = $game->getField();
$winnerCells = $game->getWinnerCells();

?>
<!doctype html>
<html lang="Default">
<head>
    <style>
        h3 {
            margin: 30%;
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
	<script src="./js/jqBootstrapValidation.js"></script>
	<script src="./js/formHandler.js"></script>
	<script src="../../../js/lazysizes.min.js" defer></script>
    <title>Task_3_5</title>

    
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
                        <a href="../../labolatorni.php">Лабораторні</a>
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

<!-- bloc-38 -->
<div class="bloc bgc-white feature-list b-parallax bg-lines-dl l-bloc bg-repeat" id="bloc-38">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center mg-md  lg-shadow">
					Лабораторні робота №3
				</h1>
				<h2 class="text-center mg-md  sm-shadow">
					Завдання №5
				</h2>
<h3>


    <style type="text/css">
        .ticTacField {overflow:hidden;}
        .ticTacRow {clear:both;}
        .ticTacCell {float:left; border: 1px solid #ccc; width: 20px; height:20px;
            position:relative; text-align:center;}
        .ticTacCell a {position:absolute; left:0;top:0;right:0;bottom:0}
        .ticTacCell a:hover { background: #aaa; }
        .ticTacCell.winner { background:#f00;}

        .icon { display:inline-block; }
        .player1:after { content: 'X'; }
        .player2:after { content: 'O'; }
    </style>

    <?php if($game->getCurrentPlayer()) { ?>
        <!-- Виводить зробити хід -->
        Хід робить гравець
        <div class="icon player<?php echo $game->getCurrentPlayer() ?>"></div>...
    <?php } ?>

    <?php if($game->getWinner()) { ?>
        <!-- Виводить хто виграв -->
        Виграв гравець
        <div class="icon player<?php echo $game->getWinner() ?>"></div>!
    <?php } ?>

    <!-- Малюємо ігарове поле, відображаючи зроблені ходи
    і підсвічуючи перемогла комбінацію. -->
    <div class="ticTacField">
        <?php for($y=0; $y < $height; $y++) { ?>
            <div class="ticTacRow">
                <?php for($x=0; $x < $width; $x++) {
                    // $player - игрок, сходивший в эту клетку :), или null, если клетка свободна.
                    // $winner - флаг, означающий, что эта клетка должна быть подсвечена при победе.
                    $player = isset($field[$x][$y])? $field[$x][$y]: null;
                    $winner = isset($winnerCells[$x][$y]);
                    $class = ($player? ' player' . $player: '') . ($winner? ' winner': '');
                    ?>
                    <div class="ticTacCell<?php echo $class ?>">
                        <?php if(!$player) { ?>
                            <!-- Клітка вільна. Відображаємо тут посилання,
                            на яку потрібно клікнути для здійснення ходу. -->
                            <a href="?action=move&amp;x=<?php echo $x ?>&amp;y=<?php echo $y ?>"></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <br/><a href="?action=newGame">Почати наву гру</a>


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
                    Розробити гру «Хрестики нулики». <br>
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
                    &lt;?php<br>class TicTacGame {<br> private $fieldWidth = 4;<br> private $fieldHeight = 4;<br><br> private $countToWin = 4;<br><br><br> private $field = array();<br><br><br> private $winnerCells = array();<br><br> private $currentPlayer = 1; // 1 або 2, а після закінчення гри - null.<br> private $winner = null; // після закінчення гри буде містити 1 або 2.<br><br><br> public function makeMove($x, $y) {<br>// Враховуємо хід, якщо виконуються всі умови:<br>// 1) гра ще йде,<br>//&nbsp;&nbsp;&nbsp;&nbsp;2) клітина знаходиться в межах ігрового поля.<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3) в поле на зазначеному місці ще порожньо<br> if(<br> $this-&gt;currentPlayer<br> &amp;&amp;<br> $x &gt;= 0 &amp;&amp; $x &lt; $this-&gt;fieldWidth<br> &amp;&amp;<br> $y &gt;= 0 &amp;&amp; $y &lt; $this-&gt;fieldHeight<br> &amp;&amp;<br> empty($this-&gt;field[$x][$y]))<br> {<br> $current = $this-&gt;currentPlayer;<br><br> $this-&gt;field[$x][$y] = $current;<br> $this-&gt;currentPlayer = ($current == 1) ? 2 : 1;<br><br> $this-&gt;checkWinner();<br> }<br> }<br><br> /**<br> * Поїск<br> */<br> private function checkWinner() {<br> for($y = 0; $y &lt; $this-&gt;fieldHeight; $y++) {<br> for($x = 0; $x &lt; $this-&gt;fieldWidth; $x++) {<br> $this-&gt;checkLine($x, $y, 1, 0);<br> $this-&gt;checkLine($x, $y, 1, 1);<br> $this-&gt;checkLine($x, $y, 0, 1);<br> $this-&gt;checkLine($x, $y, -1, 1);<br> }<br> }<br> if($this-&gt;winner) {<br> $this-&gt;currentPlayer = null;<br> }<br> }<br><br> /**<br> * Провірка чи знаходиться тут хтось<br> */<br> private function checkLine($startX, $startY, $dx, $dy) {<br> $x = $startX;<br> $y = $startY;<br> $field = $this-&gt;field;<br> $value = isset($field[$x][$y])? $field[$x][$y]: null;<br> $cells = array();<br> $foundWinner = false;<br> if($value) {<br> $cells[] = array($x, $y);<br> $foundWinner = true;<br> for($i=1; $i &lt; $this-&gt;countToWin; $i++) {<br> $x += $dx;<br> $y += $dy;<br> $value2 = isset($field[$x][$y])? $field[$x][$y]: null;<br> if($value2 == $value) {<br> $cells[] = array($x, $y);<br> } else {<br> $foundWinner = false;<br> break;<br> }<br> }<br> }<br> if($foundWinner) {<br> foreach($cells as $cell) {<br> $this-&gt;winnerCells[$cell[0]][$cell[1]] = $value;<br> }<br> $this-&gt;winner = $value;<br> }<br> }<br><br> /*<br> * Функції нижче дозволяють отримати поточний стан гри і ігрового поля.)<br> */<br><br> public function getCurrentPlayer() { return $this-&gt;currentPlayer; }<br> public function getWinner() { return $this-&gt;winner; }<br> public function getField() { return $this-&gt;field; }<br> public function getWinnerCells() { return $this-&gt;winnerCells; }<br> public function getFieldWidth() { return $this-&gt;fieldWidth; }<br> public function getFieldHeight() { return $this-&gt;fieldHeight; }<br>}<br>?&gt;<br><br><br>&lt;?php<br><br>session_start();<br><br>//Сохранення сесії (кукі)<br>//Якщо ні то начати нову гру<br>$game = isset($_SESSION['game'])? $_SESSION['game']: null;<br>if(!$game || !is_object($game)) {<br> $game = new TicTacGame();<br>}<br><br>// Опрацювання запроса користувача<br>$params = $_GET + $_POST;<br>if(isset($params['action'])) {<br> $action = $params['action'];<br><br> if($action == 'move') {<br> // Опрацювання<br> $game-&gt;makeMove((int)$params['x'], (int)$params['y']);<br><br> } else if($action == 'newGame') {<br> // Користувач вирішив грати зпочатку<br> $game = new TicTacGame();<br> }<br>}<br><br>$_SESSION['game'] = $game;<br><br><br>// Вітображаєм сторінку HTML<br>$width = $game-&gt;getFieldWidth();<br>$height = $game-&gt;getFieldHeight();<br>$field = $game-&gt;getField();<br>$winnerCells = $game-&gt;getWinnerCells();<br><br>?&gt; <br> <br> <br> <br> <br> <br>&lt;?php if($game-&gt;getCurrentPlayer()) { ?&gt;<br> &lt;!-- Виводить зробити хід --&gt;<br> Хід робить гравець<br> &lt;div class="icon player&lt;?php echo $game-&gt;getCurrentPlayer() ?&gt;"&gt;&lt;/div&gt;...<br> &lt;?php } ?&gt;<br><br> &lt;?php if($game-&gt;getWinner()) { ?&gt;<br> &lt;!-- Виводить хто виграв --&gt;<br> Виграв гравець<br> &lt;div class="icon player&lt;?php echo $game-&gt;getWinner() ?&gt;"&gt;&lt;/div&gt;!<br> &lt;?php } ?&gt;<br><br> &lt;!-- Малюємо ігарове поле, відображаючи зроблені ходи<br>&nbsp;&nbsp;&nbsp;&nbsp;і підсвічуючи перемогла комбінацію. --&gt;<br> &lt;div class="ticTacField"&gt;<br> &lt;?php for($y=0; $y &lt; $height; $y++) { ?&gt;<br> &lt;div class="ticTacRow"&gt;<br> &lt;?php for($x=0; $x &lt; $width; $x++) {<br> // $player - игрок, сходивший в эту клетку :), или null, если клетка свободна.<br> // $winner - флаг, означающий, что эта клетка должна быть подсвечена при победе.<br> $player = isset($field[$x][$y])? $field[$x][$y]: null;<br> $winner = isset($winnerCells[$x][$y]);<br> $class = ($player? ' player' . $player: '') . ($winner? ' winner': '');<br> ?&gt;<br> &lt;div class="ticTacCell&lt;?php echo $class ?&gt;"&gt;<br> &lt;?php if(!$player) { ?&gt;<br> &lt;!-- Клітка вільна. Відображаємо тут посилання,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;на яку потрібно клікнути для здійснення ходу. --&gt;<br> &lt;a href="?action=move&amp;amp;x=&lt;?php echo $x ?&gt;&amp;amp;y=&lt;?php echo $y ?&gt;"&gt;&lt;/a&gt;<br> &lt;?php } ?&gt;<br> &lt;/div&gt;<br> &lt;?php } ?&gt;<br> &lt;/div&gt;<br> &lt;?php } ?&gt;<br> &lt;/div&gt;<br><br> &lt;br/&gt;&lt;a href="?action=newGame"&gt;Почати наву гру&lt;/a&gt;<br>
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
