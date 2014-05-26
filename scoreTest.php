<?php 
  require_once("included.php");  
  require_once("login.php");

  if(isset($_REQUEST['year']))
  {      
      $year = $_REQUEST['year'];
      $month = $_REQUEST['month'];
      $testID = $year . $month;
      $frq = $_REQUEST['frq'];
      

      for($outerCounter = 1; $outerCounter <= 10; $outerCounter++) {
        $sectionNum = 'section' . $outerCounter;
        if($frq == $outerCounter)
        {
          for($counter = 1; $counter <= 8; $counter++)  {
              $boxNumber = $sectionNum .'box' . $counter;
              $answer = $_REQUEST[$boxNumber];
              $answers .= $answer; 
              $answers .= ", ";            
          }
          for($counter = 9; $counter <= 18; $counter++)
          {
              $frqNumber = 'frq' . $counterNumber;
              $answer = $_REQUEST[$frqNumber];
              $answers .= $answer;
              $answers .= ", ";
          }
        }
        else {
          for($counter = 1; $counter <= 48; $counter++)  {
              $boxNumber = $sectionNum .'box' . $counter;
              $answer = $_REQUEST[$boxNumber];
              $answers .= $answer; 
              $answers .= ", ";            
          }
        }
        switch($outerCounter) 
        {
          case 1: $case1 = $answers; break;
          case 2: $case2 = $answers; break;
          case 3: $case3 = $answers; break;
          case 4: $case4 = $answers; break;
          case 5: $case5 = $answers; break;
          case 6: $case6 = $answers; break;
          case 7: $case7 = $answers; break;
          case 8: $case8 = $answers; break;
          case 9: $case9 = $answers; break;
          case 10: $case10 = $answers; break;
        }
      }
  }
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
              /*TODO: 
             - add in instructions To enter TEST MONTH AND YEAR
             -upon clicking calc, form will hit top of the scoreTestI.php 
             -retrieve test month, year, student answers and upload them to the database
             -page will redirect to scoreTestI.php with ID -> score test based upon student answers and correct answers
             */        
              echo "<form id='scoreI' method='post' action='scoreTest.php'>\n";

              echo "<div class='row'>";
              echo "<div class='large-6 small-6 columns'>";
              echo "<label>Month";
              echo "<select id='month' name='month'>";
              echo "<option value='1' selected='selected'>January</option>";
              echo "<option value='2'>February</option>";
              echo "<option value='3'>March</option>";
              echo "<option value='4'>April</option>";
              echo "<option value='5'>May</option>";
              echo "<option value='6'>June</option>";
              echo "<option value='7'>July</option>";
              echo "<option value='8'>August</option>";
              echo "<option value='9'>September</option>";
              echo "<option value='10'>October</option>";
              echo "<option value='11'>November</option>";
              echo "<option value='12'>December</option>";
              echo "</select></label></div>";
              
              echo "<div class='large-6 small-6 columns'>";
              echo "<label>Year";             
              echo "<input type='text' id='year' name='year' placeholder='2014' /></label></div>";
              for($outerCounter = 1; $outerCounter <= 10; $outerCounter++) {
                echo "<h3>Section $outerCounter</h3>";
                echo "<div class='row'>\n";
                $sectionNum = 'section' . $outerCounter;
                for($counter = 1; $counter <= 48; $counter++) 
                {
                  $boxNumber = $sectionNum .'box' . $counter;
                  echo "<div class='large-1 small-1 columns testBox'>\n";
                  echo "<label>$counter.";
                  echo "<input type='text' name='$boxNumber' id='$boxNumber'  /> </label>\n";
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
              echo "<select name='frq'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option></select>";
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
              echo "<input type='text' id='essay' name='essay' placeholder='Enter Score here'>";
              echo "</div></div>";
              echo "<input type='submit' class='button right' id='scoreI' value='Calculate!'>";
              echo "</form>\n";
            ?>
        

        
        </div>      
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js" />
    <script src="js/app.js"></script>
  </body>
</html>
