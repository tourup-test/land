<?php
 
 $data ='{"phone_number":"+19496565833"}';
 
 
$ch = curl_init('http://tourup-backend.us-west-1.elasticbeanstalk.com//beta_confirmation/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
echo $response;
?>