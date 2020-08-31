<?php 
if($_POST && isset($_POST['submit'])){
  $number = $_POST['number'];
  $verb = $_POST['verb'];
  $pluralNoun = $_POST['pluralNoun'];
  $singleNoun = $_POST['singleNoun'];
  $city = $_POST['city'];
  $error = array();

  if(!is_numeric($number)){
    $error['number'] = "Please enter numbers only for the 'Number greater than one' field.";
  }
  else if(!$number || $number <= 1){
    $error['number'] = "Please enter a number greater than one.";
  }
  if(!$verb) {
    $error['verb'] = "Please enter a verb ending in '-ing'";
  }
  else if(substr($verb, -3) !== 'ing'){
    $error['verb'] = "Please make sure the verb ends in '-ing'";
  }
  if(!$pluralNoun) {
    $error['pluralNoun'] = "Please enter a plural noun";
  }
  if(!$singleNoun) {
    $error['singleNoun'] = "Please enter a single noun";
  }
  if(!$city) {
    $error['city'] = "Please enter a city";
  }
  else {
    echo "The magic of $city is evident on summer nights when $number $pluralNoun can be seen $verb around the $singleNoun!";
  }
  echo $error;
}


?>