<? 
// define variables and set to empty values
$question1Error = $question2Error = $question3Error = $question4Error = $question5Error = $question6Error = $question7Error = "";
$question1 = $question2 = $question3 = $question4 = $question5 = $question6 = $question7 = "";

$validation = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["question1"])) {
    $question1Error = "Voer hier een woord in!";
    $validation = false;

  } else {
    $question1 = test_input($_POST["question1"]);
    $validation = true;
  }

  if (empty($_POST["question2"])) {
    $question2Error = "Voer hier een woord in!";
    $validation = false;
  } else {
    $question2 = test_input($_POST["question2"]);
    $validation = true;
  }

  if (empty($_POST["question3"])) {
    $question3Error = "Voer hier een woord in!";
    $validation = false;
  } else {
    $question3 = test_input($_POST["question3"]);
    $validation = true;
  }

  if (empty($_POST["question4"])) {
    $question4Error = "Voer hier een woord in!";
    $validation = false;
  } else {
    $question4 = test_input($_POST["question4"]);
    $validation = true;
  }
  
  if (empty($_POST["question5"])) {
    $question5Error = "Voer hier een woord in!";
    $validation = false;
  } else {
    $question5 = test_input($_POST["question5"]);
    $validation = true;
  }
  if (empty($_POST["question6"])) {
    $question6Error = "Voer hier een woord in!";
    $validation = false;
  } else {
    $question6 = test_input($_POST["question6"]);
    $validation = true;
  }
  if (empty($_POST["question7"])) {
    $question7Error = "Voer hier een woord in!";
    $validation = false;
  } else {
    $question7 = test_input($_POST["question7"]);
    $validation = true;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs - Paniek</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sigmar+One" rel="stylesheet">
</head>
<body>
	<div class="page">
	<h1>Mad Libs</h1>
	<div class="container">
		<nav>
			<ul>
				<li><a href="paniek.php">Er heerst paniek...</a></li>
				<li><a href="onkunde.php">Onkunde</a></li>
			</ul>
		</nav>
		<h2>Er heerst paniek...</h2>
	<?php
		if ($validation == false) { ?>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Welk dier zou je nooit als huisdier willen hebben?
				<input type="text" name="question1">
				<span class="error">* <?php echo $question1Error;?></span><br><br>
			Wie is de belangrijkste persoon in je leven?
				<input type="text" name="question2">
				<span class="error">* <?php echo $question2Error;?></span><br><br>
			In welk land zou je graag willen wonen?
				<input type="text" name="question3">
				<span class="error">* <?php echo $question3Error;?></span><br><br>
			Met welk speelgoed speelde je als kind het meest?
				<input type="text" name="question4">
				<span class="error">* <?php echo $question4Error;?></span><br><br>
			Bij welke docent spijbel je het liefst?
				<input type="text" name="question5">
				<span class="error">* <?php echo $question5Error;?></span><br><br>
			Als je &euro; 100.000,- had, wat zou je dan kopen?
				<input type="text" name="question6">
				<span class="error">* <?php echo $question6Error;?></span><br><br>
			Wat is je favoriete bezigheid?
				<input type="text" name="question7">
				<span class="error">* <?php echo $question7Error;?></span><br><br>
			<input type="submit">
		</form>

		<?php } 
	?>

			<?php 
			if ($validation == true) {
				include 'paniekresult.php';
				}
		 ?>
	</div>
</div>

<footer>
	<p>Damian de Mie, 2019</p>
</footer>

</body>
</html>