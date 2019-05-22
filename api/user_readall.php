<?php 
  header('Access-Control-Allow-Origin: *');
  header("Content-Type: application/json; charset=UTF-8");
  
  require("../includes/functions.php");
  $connection = dbConnect();
  $allUsers = getUsers($connection);

  $output = $allUsers;

  echo json_encode($output);

  dbDisconnect($connection);

?>

