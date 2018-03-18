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
//Values inserted to database
    $insertData = "INSERT INTO posts (tasks) VALUES ('$_POST[notes]')";
    if(mysqli_query($conn,$insertData)){
      echo "value is inserted";
    }else{
      echo "value is not inserted";
    }
//Reading values from database
      $readData = "SELECT id,tasks FROM posts";
      $resultData = mysqli_query($conn,$readData);
      if(mysqli_num_rows($resultData) > 0){
        while($row = mysqli_fetch_assoc($resultData)){
          echo "id: ".$row['id']. "Note: ".$row['tasks']."<br>";
        }
      }else{
        echo " 0 results are inserted ";
      }
  // $sql = "INSERT INTO posts(tasks) VALUES('Hello This is my first note!!')";
  // if(mysqli_query($conn,$sql)){
  //   echo" value inserted";
  // }else{
  //   echo "value is not inserted";
  // }
?>
