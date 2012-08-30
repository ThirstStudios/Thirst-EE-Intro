<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	include(PATH_THIRD.'thirst_ee_intro/config.php');
	$files = array();
	$i = 0;
	$dir = PATH_THIRD.'thirst_ee_intro/areas/';
	$path = dir($dir);
		while($entry = $path->read()) {
			if ($entry!= "." && $entry!= "..") {
				//ignores files prefixed with . or _
				if($entry[0] != "_" && $entry[0] != "."){
					$files[$i] = str_replace("{{IMAGE_PATH}}",$config['images_path'], file_get_contents(PATH_THIRD.'thirst_ee_intro/areas/'.$entry));
					$i++;
				}
		}
	}
	$path->close(); 
	return $files;