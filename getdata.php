<?php 
$phn = preg_replace('/\(/is','',$_POST['phone_number']);
$phn = preg_replace('/\)/is','',$phn);
$phn = preg_replace('/-/is','',$phn);
$phn = preg_replace('/\s+/is','',$phn);
$ph =  '+'.$_POST['phoneCode'].''.$phn;

$data ='{"phone_number":"'.$ph.'"}';
 

$ch = curl_init('http://tourup-backend.us-west-1.elasticbeanstalk.com//beta_confirmation/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
echo "Great! you're on the waitlist";
?>
