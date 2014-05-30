<?php 
  require_once("included.php");  
  require_once("login.php");
?>
<!doctype html>
<html>
  <head>
    <title>Score SAT I Test | Springlight Education</title>
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
          
            <?php
            
            //upload tests
              echo "<form id='scoreII' method='post' action='scoreTestII.php'>\n";
              echo "<div class='row'>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Subject";
              echo "<select>";
              echo "<option value='math'>Math</option>";
              echo "<option value='physics'>Physics</option>";
              echo "<option value='lit'>Literature</option>";
              echo "<option value='ushist'>US History</option>";
              echo "</select></label></div>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Month";
              echo "<select>";
              echo "<option value=''></option></select></label></div>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Day";
              echo "<select>";
              echo "<option value=''></option></select></label></div>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Year";
              echo "<select>";
              echo "<option value=''></option></select></label></div>";
              //for($outerCounter = 1; $outerCounter <= 10; $outerCounter++) {
                //echo "<h3>Section $outerCounter</h3>";
                echo "<div class='row'>\n";
                for($counter = 1; $counter <= 60; $counter++) 
                {
                  $boxNumber = 'box' . $counter;
                  echo "<div class='large-1 small-1 columns testBox'>\n";
                  echo "<label>$counter.";
                  echo "<input type='text' name='$boxNumber' id='$boxNumber' /> </label>\n";
                  echo "</div>\n";
                  if($counter%12==0) 
                  {                  
                    echo "</div>\n";
                    echo "<div class='row'>\n";
                  }
                  //if($counter == 40) {continue;}
                }
                echo "</div><br />\n";
              //}
              echo "<input type='submit' class='button right' id='loginButton' value='Calculate!'>";
              echo "</form>\n";
            ?>
        

        
        </div>      
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js" />
    <script src="js/app.js"></script>
  </body>
</html>3