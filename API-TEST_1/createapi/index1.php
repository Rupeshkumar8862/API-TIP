<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Called Api from My SERVER In Table</title>
</head>
<body>
    


<?php

$url="http://api.rupeshtechnologies.com/";
$ch=curl_init()
;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
//$result=json_decode($result); // object me data show hoga pass true parametter for arry
$result=json_decode($result,true);
// echo $result.'<br>';
echo '<pre>';
print_r($result);
echo '</pre>';
?>
</body>
</html>