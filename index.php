<?php
  $servername = "localhost";
  $username = "root";
  $password= "";
  $dbname = "tododb";

  //Checks the connection to database is established or not
  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn){
    echo "Database is not connected ";
  }else{
    echo "Database is connected";
  }

    $sql = "INSERT INTO posts (tasks) VALUES ('$_POST[notes]')";
    if(mysqli_query($conn,$sql)){
      echo "value is inserted";
    }else{
      echo "value is not inserted";
    }
  // $sql = "INSERT INTO posts(tasks) VALUES('Hello This is my first note!!')";
  // if(mysqli_query($conn,$sql)){
  //   echo" value inserted";
  // }else{
  //   echo "value is not inserted";
  // }
?>
