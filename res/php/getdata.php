<?php


	$stations = scandir("/home/localadmin/sambashare", 1);
	$station = $stations[15];

	$stations = scandir("/home/localadmin/sambashare".$station, 1);
	print_r($stations);
	$f = $stations[5];

	
	$get = file_get_contents("/home/localadmin/sambashare/" . $station . "/". $f);
	echo $get;
	$arr = simplexml_load_string($get);
	print_r($arr);
	echo $arr->MEASUREMENT[0]->DATE . "\n";
	echo $arr->MEASUREMENT[0]->TIME . "\n";
	echo $arr->MEASUREMENT[0]->TEMP ."\n";
	echo $arr->MEASUREMENT[0]->WDSP . "\n";
	echo $arr->MEASUREMENT[0]->PRCP;




?>
