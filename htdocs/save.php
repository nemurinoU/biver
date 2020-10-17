<?php
	session_start();
	try {
		$doc = new DOMDocument();
		// we want a nice output
		$doc->formatOutput = true;
		$doc->loadHTMLFile($_GET["url"]);
		$path = __DIR__.'\\'.basename($_SESSION['url_include']);
		$var = $_GET["id"];
		$doc->GetElementById($var)->nodeValue = $_GET["content"];
		$doc->saveHTMLFile($path);
		echo "Save Complete" . $path;
	}
	catch (Exception $e){
		echo $e->getMessage();
	}
?>