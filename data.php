<?php
  $servername = "localhost";
  $username = "root";
  $password= "";
  $dbname = "tododb";

  //Checks the connection to database is established or not
  $conn = mysqli_connect($servername,$username,$password,$dbname);
//Values inserted to database
    if(isset($_POST['submit'])){
      $insertData = "INSERT INTO notes (tasks) VALUES ('$_POST[notes]')";
      if(mysqli_query($conn,$insertData)){
          header('Location: todo.php');
      }else{
        echo " data is not inserted";
      }
    }
// //Reading values from database
//       $readData = "SELECT id,tasks FROM posts";
//       $resultData = mysqli_query($conn,$readData);
//       if(mysqli_num_rows($resultData) > 0){
//         while($row = mysqli_fetch_assoc($resultData)){
//         }
//       }else{
//         echo " 0 result";
//       }
  // $sql = "INSERT INTO posts(tasks) VALUES('Hello This is my first note!!')";
  // if(mysqli_query($conn,$sql)){
  //   echo" value inserted";
  // }else{
  //   echo "value is not inserted";
  // }
?>
