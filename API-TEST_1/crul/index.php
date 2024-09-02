<?php 
//hit page see google
// $ch= curl_init();
// curl_setopt($ch,CURLOPT_URL,"https://www.google.com");
// curl_exec($ch);
// curl_close($ch);




//setp 2 url HIT and download image
$url="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?cs=srgb&dl=pexels-anjana-c-169994-674010.jpg&fm=jpg";
$image="IMAGE.JPG";
$fimage= fopen($image,'w+');
$ch= curl_init($url);
curl_setopt($ch,CURLOPT_FILE,$fimage);
// curl_setopt($ch,CURLOPT_TIMEOUT,1000);
curl_exec($ch);
curl_close($ch);
?>