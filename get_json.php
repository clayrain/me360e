<?php
header('Access-Control-Allow-Origin: *');  
 $notebook = $_GET["notebook"];
$context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
echo file_get_contents("http://mediaproof360.com/fieldnotes/".$notebook.".json",false,$context);
?>