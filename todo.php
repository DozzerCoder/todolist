<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <title>Todo-list</title>
  </head>
  <body>
    <div class="row">
      <div class="s5">
        <div class="card-panel white" id ="card-enter">
          <h3>Todo-list</h3>
          <div class="row">
            <form class="col s12 "method= "post" action = "data.php">
              <div class="row">
                <div class="input-field">
                  <input type="text" placeholder="Stick your notes here" name="notes" id="notes" required class="validate">
                </div>
              </div>
              <div class="row">
                <input class="btn waves-effect waves-light" type="submit" name="submit" value="Post">
                </input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class = "s5">
        <div class = "card-panel teal" id="note-display">
          <?php
          $conn = mysqli_connect('localhost','root','','tododb');
          $readData = "SELECT id,tasks FROM notes";
          $resultData = mysqli_query($conn,$readData);
          if(mysqli_num_rows($resultData) > 0){
            while($row = mysqli_fetch_assoc($resultData)){
                echo "<p>".$row['tasks'];
            }
          }else{
            echo " 0 result";
          }
          ?>
        </div>
      </div>
    </div>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script> -->
  </body>
</html>
