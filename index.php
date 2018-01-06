<?php

	require ("php/functions.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/weather-icons.css">
	<link rel="stylesheet" href="css/weather-icons-wind.css">
	<script type="js/jquery.js"></script>
	<script type="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Vremenska Prognoza</title>
</head>
<body>

	<div class="container">
		<div class="header">
			<h2>Vremenska prognoza</h2>
		</div>

		<hr class="hr">

	<!-- datum -->
	<div class="row">
		<div class="col-xs-3" style="text-align: center;">
			<button class="btn" id="btn-left"> < Pr. dan</button>
		</div>
		<div class="col-xs-6" style="text-align: center;">
			<h3><?php echo $today;?></h3>
		</div>
		<div class="col-xs-3" style="text-align: center;">
			<button class="btn" id="btn-right"> Sl. dan ></button>
		</div>
	</div>

	<!-- trenutna temperaturu -->
		<div class="temp">
			<i class="wi wi-day-cloudy"></i><br>
			<p><?php echo number_format($temp);?>°C</p>
		</div>
		<div class="description">
			<?php echo $cityname; ?>, <?php echo $description; ?>
		</div>

		<hr class="hr-down">
		
	</div>

	<!-- temperatura za naredna tri dana -->
	<div class="container down">
		<div class="row row-down">
			<div class="col-xs-4 temp-down">
				<i class="wi wi-cloud" style="font-size: 50px;"></i><br><br>
				7°c<br>
				Petak
			</div>
			<div class="col-xs-4 temp-down">
				<i class="wi wi-rain" style="font-size: 50px;"></i><br><br>
				6°c<br>
				Subota
			</div>
			<div class="col-xs-4 temp-down">
				<i class="wi wi-night-clear" style="font-size: 50px;"></i><br><br>
				3°c<br>
				Nedelja
			</div>
		</div>

		<!-- search field -->
		<div class="search">
			<input class="input" type="text" name="search" placeholder="Pretraga lokacije">
			<button type="button" class="btn-danger"><i class="fa fa-search" aria-hidden="true"></i></span></button>
		</div>

	</div>

	<!--komentar-->

</body>
</html>