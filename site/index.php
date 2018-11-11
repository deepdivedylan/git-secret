<!DOCTYPE html>
<html>
	<head>
		<title>git-secret</title>
	</head>
	<body>
		<h1>git secrets revealed</h1>
		<ul>
			<li>Is Fuzzy: <?php echo $_ENV["IS_FUZZY"]; ?></li>
			<li>Name: <?php echo $_ENV["NAME"]; ?></li>
			<li>Number of Lives: <?php echo $_ENV["NUM_LIVES"]; ?></li>
		</ul>
	</body>
</html>