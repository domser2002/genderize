<?php 
 
$request='https://api.genderize.io?name='.$_POST["name"].'&country_id='.$_POST["country"];   
$response = file_get_contents($request);
$response=json_decode($response);
if($response->gender=='male') echo "Probably you are male";
if($response->gender=='female') echo "Probably you are female";
else echo "We could not guess your gender";
?>