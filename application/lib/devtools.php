<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	function devPrint($var){
		if(is_array($var)){
			echo '<pre>';
			print_r($var);
			echo '</pre>';
		}
		else{
			echo '<pre>'. $var .'</pre>';
		}
	}

	function obInclude($path){
		ob_start();
		include $path;
		return ob_get_clean();
	}