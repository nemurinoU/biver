<?php

$old_dir = $_SERVER["DOCUMENT_ROOT"]."/STR/dir_a/sample.txt";

$new_dir = $_SERVER["DOCUMENT_ROOT"]."/STR/dir_b/sample.txt";
if($old_dir){
	$filetransfer = rename($old_dir,$new_dir);
}


if($filetransfer){
	echo "Success!";
}

?>