<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Datas Usando PHP</title>
</head>

<body class="w-screen h-screen flex justify-center items-center">
	<main class="flex flex-col justify-center items-center">
		<form action="" method="POST">
			<input required type="date" name="date" id="date">
			<input type="submit" value="Enviar">
		</form>

		<div>
			<?php
			if (isset($_POST["date"])) {
				$userDate = strtotime($_POST["date"]);
				$currentDate = time();

				$timeDiff = $currentDate - $userDate;

				// Calculate time units
				$seconds = $timeDiff;
				$minutes = floor($seconds / 60);
				$hours = floor($minutes / 60);
				$days = floor($hours / 24);
				$months = floor($days / 30);
				$years = floor($days / 365);

				echo "Segundos: {$seconds} <br>";
				echo "Minutos: {$minutes} <br>";
				echo "Horas: {$hours} <br>";
				echo "Dias: {$days} <br>";
				echo "Meses (aproximadamente): {$months} <br>";
				echo "Anos (aproximadamente): {$years} <br>";
			}
			?>
		</div>
	</main>
</body>

</html>