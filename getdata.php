<?php
ini_set('display_errors', 1);
ini_set('allow_url_fopen', '1');

$username = "admin"; 								//Loxone Username
$password = "admin"; 								//Loxone Password
$url1 = 'YOURIP:PORT/dev/sps/io/ATemp/state';		// Link to your State without http://

$xml1= simplexml_load_file('http://'. $username .':'. $password .'@'. $url1 );
$wert1 = preg_replace('/[^(\x20-\x7F\)]*/','', $xml1['value']);

echo "{   \"frames\": [    {   \"text\": \"";
echo str_replace(' ', '',$wert1);
echo "°\",   \"icon\": \"a8756\"   }  ]  } ";

?>


