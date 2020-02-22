<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    session_start();
    if (isset($_SESSION['username_teacher'])) {
?>
  <meta charset="utf-8">
  <title>Teacher</title>
  <script type="text/javascript" src="../lib/jquery/app.js"></script>
  <script type="text/javascript" src="../lib/bootstrap/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" media="all" href="../lib/css/style.css">

  <header id="header">
    <div class="container">
      <a href="index.php" id="logo" title="HarrisonHighSchool"></a>
      <div class="menu-trigger"></div>
      <nav id="menu">
        <ul>
          <li><a href="index.php?action=question">Questions</a></li>
		  <li><a href="index.php?action=test_course">Tests</a></li>
        </ul>
        <ul>
          <li><a href="index.php?action=grammar">Grammars</a></li>                  
          <li><a href="index.php?action=logout">Logout</a></li>
        </ul>
      </nav>
      <!-- / navigation -->
    </div>
    <!-- / container -->
  
  </header>
  <div class="divider"></div>

	<div class="content container">
		<?php
		$action = $_GET["action"];
			switch ($action) {
				case 'logout':
					session_destroy();
					header("location:index.php");
					break;
				case 'question':
					include_once("controller/question_c.php");
					$question = new Question_c();
					$question->run();
					break;
				case 'test_course':
					include_once("controller/test_c.php");
					$test = new Test_c();
					$test->run();
					break;	
				case 'grammar'	:
					include_once("controller/grammar_c.php");
					$grammar = new grammar_c();
					$grammar -> run();
					break;		
				default:
					echo "";
					break;
			}
		?>
	</div>

<?php
} else {
	include_once("controller/login_c.php");
	$login = new Login_c();
	$login->run();
}
?>
