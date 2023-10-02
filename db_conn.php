<?php
  //Connect db_server
  $conn = mysqli_connect("localhost", "root", "", "users");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    return;
  }
  echo "Connected successfully";

  if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)){
      header("Location: login.php?error=user name is requried");
      exit();
    }esle if(empty($username)){
      header("Location: login.php?=error=Paword is required ");
      exit();
    }else{
      echo "Valid imput";
    }
  }else{
    header("Location: login.php");
    exit();
  }


?>
