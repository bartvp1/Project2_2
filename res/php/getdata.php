<?php
    print("<pre>");
	$base_dir = "/home/localadmin/sambashare/";
	$stations = scandir($base_dir, SCANDIR_SORT_DESCENDING);
    $measurements = array();
    //$latest_station_files = array();
    //print_r($stations);
	foreach($stations as $station){
	    $station_path = $base_dir.$station;
        if(is_dir($station_path) && strpos($station, '726')>==0){
            foreach(scandir($station_path, SCANDIR_SORT_DESCENDING) as $file){
                $measurements[$station][] = $station_path."/".$file;
            }
        }

	}
	print_r($measurements);

	function get_current(){
	    $base_dir = "/home/localadmin/sambashare/";
    	$stations = scandir($base_dir, SCANDIR_SORT_DESCENDING);
        $measurements = array();
    	foreach($stations as $station){
    	    $station_path = $base_dir.$station;
            if(is_dir($station_path)){
                foreach(scandir($station_path, SCANDIR_SORT_DESCENDING) as $file){
                    $measurements[$station][] = $station_path."/".$file;
                }
            }

    	}
	}
    //print_r($latest_station_files);

	//$latest_data = scandir("/home/localadmin/sambashare/".$station, SCANDIR_SORT_DESCENDING);
	//$f = $stations[5];
	//$dir = "/home/localadmin/sambashare/" . $station . "/". $f;


	//$xml = simplexml_load_file($dir);


	//$dir = "/home/localadmin/sambashare/" . $station . "/";


	//$xml = simplexml_load_file($dir.$f);



/*
	$get = file_get_contents("/home/localadmin/sambashare/" . $station . "/". $f);
	echo $get."<br>";

	$arr = simplexml_load_string($get);

	print_r($arr);
	
	echo $arr->MEASUREMENT[0]->DATE . "\n";
	echo $arr->MEASUREMENT[0]->TIME . "\n";
	echo $arr->MEASUREMENT[0]->TEMP ."\n";
	echo $arr->MEASUREMENT[0]->WDSP . "\n";
	echo $arr->MEASUREMENT[0]->PRCP;
*/

print("</pre>");

?>
