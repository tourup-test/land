<?php 
$phn = preg_replace('/\(/is','',$_POST['phone_number']);
$phn = preg_replace('/\)/is','',$phn);
$phn = preg_replace('/-/is','',$phn);
$phn = preg_replace('/\s+/is','',$phn);
$ph =  '+'.$_POST['phoneCode'].''.$phn;

$data ='{"phone_number":"'.$ph.'"}';
 
echo $data;
?>
