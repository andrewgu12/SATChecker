<?php require_once("included.php"); ?>
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

          <form id="login">  
            <div class="row">
              <div class="large-3 columns">
                <label>Username</label>
              </div>
              <div class="large-9 columns">
                <input type="text" />
              </div>
            </div>
           <div class="row">
              <div class="large-3 columns">
                <label>Password</label>
              </div>
              <div class="large-9 columns">
                <input type="password" />
              </div>
            </div>             
            <a href="#" class="button right" id="loginButton">Login</a>

          </form>
        </div>      
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js" />
  </body>
</html>