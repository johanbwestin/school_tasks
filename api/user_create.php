<?php 
  header('Access-Control-Allow-Origin: *');
  header("Content-Type: application/json; charset=UTF-8");
  
  require("../includes/functions.php");
  $connection = dbConnect();

if(isset($_POST['userName'])){
  $name = $_POST['userName'];
}else{
    echo "Ingen tillåten post (userName)";
    exit;
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}else{
    echo "Ingen tillåten post (password)";
    exit;
}
if(isset($_POST['firstName'])){
    $firstName = $_POST['firstName'];
}else{
    echo "Ingen tillåten post (firstName)";
    exit;
}

if(isset($_POST['lastName'])){
    $lastName = $_POST['lastName'];
}else{
    echo "Ingen tillåten post (lastName)";
    exit;
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
}else{
    echo "Ingen tillåten post (email)";
    exit;
}

$createUser = register($connection);

if(isset($createUser) && $createUser > 0 ) {
    $userData = getUserData($connection, $createUser);

    $output = $userData;

    echo json_encode($output);
}



  dbDisconnect($connection);

?>