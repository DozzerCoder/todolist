<?php
  $servername = "localhost";
  $username = "root";
  $password= "";
  $dbname = "tododb";

  //Checks the connection to database is established or not
  $conn = mysqli_connect($servername,$username,$password,$dbname);

  if(!$conn){
    echo "Connection not established"
  }else{
    echo "Connection established"
  }
?>
