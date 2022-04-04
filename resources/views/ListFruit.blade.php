<!DOCTYPE html>
<html>
<head>
	<title>Liste de fruits pour cocktail</title>
	<style>
		div {
			font-size: 22px;
		}
	</style>
</head>
<body>
	<div>
		<?php 
		if(DB::connection()->getPdo())
		{
			echo"Connexion réussie à la BDD =>";
			DB::connection()->getDatabaseName();
		}
		?>
	</div>
</body>
</html>