<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Called Api from My SERVER</title>
</head>
<body>
<?php
$url="http://api.rupeshtechnologies.com/api/index.php?key=abcdefcrupeshtoken";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
//$result=json_decode($result); // object me data show hoga pass true parametter for arry
$result=json_decode($result,true);
if(isset($result['status'])){
   if($result['status']==true){
    if(isset($result['result'])){
        if($result['result']==true){
         ?>
         <table border="2">
            <tr>
            <td>NAME</td>
            <td>Email</td>
            <td>Subject</td> 
        </tr>
            <?php 
         foreach($result['data'] as $value){
      echo "<tr>
         <td>".$value['name']." </td>
         <td>".$value['email']." </td>
         <td>".$value['subject']." </td>
      </tr>";
         }
        ?> 
         </table>
        <?php 
        } else{
          echo $result['data'];
        }
        
    }else{
        echo $result['data'];   
    }

    } else{
        
        echo $result['data'];   
   }
}else{
    echo 'api not working';

}
?>
</body>
</html>