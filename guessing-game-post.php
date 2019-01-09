<?php
  $oldguess = '';
  $message = false;
  if ( isset($_REQUEST['guess']) ) {
  // trick for integer / numeric parameters
  $oldguess = $_REQUEST['guess'] +0;
  if ( $oldguess == 42 ) {
  $message = "Great Job";
  } else if ( $oldguess < 42 ) {
  $message = "Too low"; 
  } else {
  $message = "Too high";
  }
 }
?>

<?php  $oldguess = isset($_POST['guess']) ? $_POST['guess'] : ''; ?>

<html>
<head>
<title> Romain Bruzzese's Guessing game</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>Guessing game...</p>
<?php 
if ( $message !== false ) {
echo ("<p>$message</p>\n");
}
?>
<form method="post">
<p><label for="guess">Input Guess</label>
<input type="text" name="guess" size="40" id="guess" value="<?= htmlentities($oldguess) ?>"/></p>
<input type="submit"/>
</form>

<br>
<br>
<h2>$_POST:</h2> <?php print_r($_POST); ?>
<h2>$_POST:</h2> <?php print_r($_GET); ?>
</body>
</html>
