<?php 
$dir = opendir(".");

while ($name = readdir($dir)) {
	if ($name == '.' || $name == '..') {
		continue;
	}	else if (is_dir($name)) {
		echo '[', $name,']<br>';
	}	else {
		echo $name, '<br>';
	}
}

closedir($dir);