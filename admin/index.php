<?php 
  require_once("included.php"); 
  if(isset($_REQUEST['teachID']))
  {
      $user = $_REQUEST['teachID'];      
      $pass = sha1($_REQUEST['pass']);
      $results = mysqli_query($conn, "SELECT * FROM `Admin` WHERE `ID`='$user' LIMIT 1");
      $teacher = mysqli_fetch_array($results);
      if($pass == $teacher['Password'])
      {
        $_SESSION['admin'] = $user;
        header("Location: index_home.php");
      }
  }
  if(isset($_SESSION['admin'])) 
  {
      header("Location: index_home.php");
      die;
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
            <?php //require_once("menu.php"); ?>
          </div>
        </div> 
      
        <div id="content">

          <form id="login" method="post" action="index.php">  
            <div class="row">
              <div class="large-3 columns">
                <label>Username</label>
              </div>
              <div class="large-9 columns">
                <input type="text" id="teachID" name="teachID" />
              </div>
            </div>
           <div class="row">
              <div class="large-3 columns">
                <label>Password</label>
              </div>
              <div class="large-9 columns">
                <input type="password" id="pass" name="pass"/>
              </div>
            </div>             
            <input type="submit" class="button right" id="loginButton">

          </form>
        </div>      
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js" />
  </body>
</html>