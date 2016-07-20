<?php
if(isset($GLOBALS["HTTP_RAW_POST_DATA"])){
	$imageData = $GLOBALS['HTTP_RAW_POST_DATA'];
	$filteredData = substr($imageData, strpos($imageData, ",")+1);
	$decodedData = base64_decode($filteredData);
	$fp = fopen('canvas.jpeg','wb');
	if(fwrite($fp,$decodedDat)){
		fclose($fp);
		echo 'ok';
	}
}
?>