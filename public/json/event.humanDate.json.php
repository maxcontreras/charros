<?php
header('Content-type: text/json');

$resultado = mysql_query('SELECT * FROM season_schedule');
echo $resultado;

echo '[';
$separator = "";
$days = 16;

$i = 1;
    echo $separator;
    //$initTime = date("Y")."-".date("m")."-".date("d")." ".date("H").":00:00";
    //$initTime = date("Y-m-d H:i:00");

		echo '  { "date": "2015-10-09 19:30:00", "type": "regular", "title": "Tomateros @ Charros", "description": "Inicio de temporada 2015", "url": "" },';
	    echo '  { "date": "2015-10-09 18:00:00", "type": "meeting", "title": "Yaquis @ Frailes", "description": "Lorem Ipsum dolor set", "url": "" },';
	    echo '  { "date": "2015-10-09 19:30:00", "type": "regular", "title": "Tomateros @ Charros", "description": "Inicio de temporada 2015", "url": "" },';
	    echo '  { "date": "2015-10-16 16:00:00", "type": "test", "title": "Charros @ Naranjeros", "description": "Sed ut", "url": "http://www.event11.com/" }';  
	   		
    $separator = ",";

echo ']';
?>