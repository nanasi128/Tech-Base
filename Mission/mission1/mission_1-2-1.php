<?php
	$filename = "mission_1-2-1.txt";
	$content = "Hello, World!";
	
	$fp = fopen($filename, "w");
	fwrite($fp, $content);
	fclose($fp);
?>