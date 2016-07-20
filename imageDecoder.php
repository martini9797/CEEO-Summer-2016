<?php

if($_POST['data'])
{
	$img = $_POST['data'];
	$img = str_replace('data:image/jpeg;base64','', $img);
	$img = str_replace(' ','+', $img);
	$decodedData = base64_decode($img);

	$fileName = "canvas.jpg";
	file_put_contents($filename, $decodedData);
}

/*if(isset($GLOBALS["HTTP_RAW_POST_DATA"])){
	$imageData = $GLOBALS['HTTP_RAW_POST_DATA'];
	$filteredData = substr($imageData, strpos($imageData, ",")+1);
	$decodedData = base64_decode($filteredData);
	$fp = fopen('canvas.jpeg','wb');
	if(fwrite($fp,$decodedDat)){
		fclose($fp);
		echo 'ok';
	}
}*/
?>