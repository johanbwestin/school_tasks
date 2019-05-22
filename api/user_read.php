<?php 
  header('Access-Control-Allow-Origin: *');
  header("Content-Type: application/json; charset=UTF-8");
  
  require("../includes/functions.php");
  $connection = dbConnect();

if(isset($_GET['userId'])){
  $userData = getUserData($connection,$_GET['userId']);

}else{
    echo "Ingen tillåten post (userId)";
    exit;
}

  $output = $userData;

  echo json_encode($output);
  


  dbDisconnect($connection);

?>