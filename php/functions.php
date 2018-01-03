<?php

	//Zrenjanin

	$url = "http://api.openweathermap.org/data/2.5/weather?q=Zrenjanin&lang=en&units=metric&APPID=0bc74ebda72a98539aca7f08865045c5";


	$contents = file_get_contents($url);
	$clima=json_decode($contents);

	$temp=$clima->main->temp;
	$temp_max=$clima->main->temp_max;
	$temp_min=$clima->main->temp_min;
	$description = $clima->weather[0]->description;
	// $icon=$clima->weather[0]->icon.".png";

	//datum i ime grada
	$today = date("d. F Y., H:i")
	$cityname = $clima->name;

	if ($description == "broken clouds") {
		
		$description = "Mestimično Oblačno";
	}
	elseif ($description == "clear sky") {

		$description = "Vedro";
	}
	elseif ($description == "few clouds") {

		$description = "Pomalo Oblačno";
	}
	elseif ($description == "scattered clouds") {

		$description = "Raštrkani Oblaci";
	}
	elseif ($description == "shower rain") {

		$description = "Slaba Kiša";
	}
	elseif ($description == "rain") {

		$description = "Kiša";
	}
	elseif ($description == "thunderstorm") {

		$description = "Oluja Sa Grmljavinom";
	}
	elseif ($description == "snow") {

		$description = "Sneg";
	}
	elseif ($description == "mist") {

		$description = "Magla";
	}
	else {
		
	}
	
	?>