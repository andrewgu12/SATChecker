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
              //$counter = 0;              
              echo "<form id='scoreI'>\n";
              echo "<div class='row'>";
              echo "<div class='large-4 small-4 columns'>";
              echo "<label>Month";
              echo "<select>";
              echo "<option value=''></option></select></label></div>";
              echo "<div class='large-4 small-4 columns'>";
              echo "<label>Day";
              echo "<select>";
              echo "<option value=''></option></select></label></div>";
              echo "<div class='large-4 small-4 columns'>";
              echo "<label>Year";
              echo "<select>";
              echo "<option value=''></option></select></label></div>";
              /*echo "<div class='row'><div class='large-3 small-3 columns'>";
              echo "<label for='essay' class='left'>Essay Score: </label>";
              echo "</div>";
              echo "<div class='small-9 large-9 columns'>";
              echo "<input type='text' id='essay' placeholder='Enter Score here'>";
              echo "</div></div>";*/
              for($outerCounter = 1; $outerCounter <= 10; $outerCounter++) {
                echo "<h3>Section $outerCounter</h3>";
                echo "<div class='row'>\n";
                for($counter = 1; $counter <= 48; $counter++) 
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
                echo "</div>\n";
              }
              echo "<h3>Student Produced Response: </h3>";
              echo "<label>Part of section: ";
              echo "<select><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option></select>";
              echo "<div class='row'>";
              for($counter = 1; $counter <= 12; $counter++)
              {
                echo "<div class='large-2 small-2 columns testBox'>";
                $counterNumber = $counter + 8;
                $frqNumber = 'frq' . $counterNumber;
                echo "<label>$counterNumber. ";
                echo "<input type='text' name='$frqNumber' id='$frqNumber' /></label></div>";
                if($counter % 6 == 0) 
                {
                  echo "</div>";
                  echo "<div class='row'>";
                }
              }
              echo "</div>";
              echo "<div class='row'>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label for='essay' class='left'>Essay Score: </label></div>";
              echo "<div class='large-9 small-9 columns'>";            
              echo "<input type='text' id='essay' placeholder='Enter Score here'>";
              echo "</div></div>";
              echo "<input type='submit' class='button right' id='loginButton' value='Calculate!'>";
              echo "</form>\n";
            ?>
        

        
        </div>      
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js" />
    <script src="js/app.js"></script>
  </body>
</html>
