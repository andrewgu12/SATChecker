<?php 
  require_once("included.php");  
  require_once("login.php");
  if(isset($_REQUEST['studID']))
  {
    $id = $_REQUEST['studID'];
    $fName = $_REQUEST['fName'];
    $lName = $_REQUEST['lName'];
    $unsalted = $fName . $lName;
    $pass = sha1($unsalted);

    mysqli_query($conn, "INSERT INTO `Students` (`ID`, `FirstName`, `LastName`, `Password`) VALUES ('$id', '$fName', '$lName', '$pass')");
  }
?>
<!doctype html>
<html>
  <head>
    <title>Springlight Education</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/app.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
    <div id="container">
      
        <div id="header">
          <div id="logo">
          <!--<img src="images/logo.jpg" />-->
            <h1>Springlight Education</h1>
          </div>
          <div id="menu-container">
            <?php require_once("menu.php"); ?>
          </div>
        </div> 
      
        <div id="content">
          
          <form action="addStud.php" method="post">
            <div class="row">
            <div class="large-12 small-12 columns">
            <label for="studID">Student ID:
              <input type="text" id="studID" name="studID" />
            </label>
            </div>
            <div class="row">
            <div class="large-12 small-12 columns">
            <label for="fName">First Name:
              <input type="text" id="fName" name="fName" />
            </label>
            </div>
            <div class="row">
            <div class="large-12 small-12 columns">
            <label for="lName">Last Name:
              <input type="text" id="lName" name="lName" />
            </label>
            </div>
            <input type="submit" class="button right" id="addStudent">
          </form>

        
        </div>      
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js" />
    <script src="js/app.js"></script>
  </body>
</html>