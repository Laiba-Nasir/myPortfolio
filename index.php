<?php

//RESOURCES CITATION FOR INDEX.PHP
//https://www.youtube.com/watch?v=yAjj7ByyWx0
//https://www.youtube.com/watch?v=kjxdON-co3Q
//https://www.geeksforgeeks.org/how-to-make-a-redirect-in-php/ 
//I used the websites above to provide the code, as I got stuck along the way, ChatGPT was useful in guiding me to the right direcion, and prooviding the corrected code 
//https://chatgpt.com/?oai-dm=1

	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-(

