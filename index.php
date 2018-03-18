<?php
  $servername = "localhost";
  $username = "root";
  $password= "";
  $dbname = "tododb";

  //Checks the connection to database is established or not
  $conn = mysqli_connect($servername,$username,$password,$dbname);


  if(isset($_POST['submit'])){
    if(!empty($_POST['notes'])){
      $sql = "INSERT INTO posts(tasks) VALUES ('task')";
      echo "Data inserted succesfully";
    }else{
      echo "values is not inserted";
    }
  }
  // $sql = "INSERT INTO posts(tasks) VALUES('Hello This is my first note!!')";
  // if(mysqli_query($conn,$sql)){
  //   echo" value inserted";
  // }else{
  //   echo "value is not inserted";
  // }
?>
