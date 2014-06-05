<?php 
require_once("included.php");  
  require_once("login.php");

  if(isset($_REQUEST['year']))
  {      
      $year = $_REQUEST['year'];
      $month = $_REQUEST['month'];
      $testID = $year . $month;
      $frq = $_REQUEST['frq'];
      //$essay = $_REQUEST['essay'];
      $limitAns = "";
      for($outerCounter = 2; $outerCounter <= 10; $outerCounter++) {
        $sectionNum = 'section' . $outerCounter;
        $limitAns .= $_REQUEST[$outerCounter];
        $limitAns .= ",";
        $answers = " ";      
          for($counter = 1; $counter <= 48; $counter++)  {
              $boxNumber = $sectionNum .'box' . $counter;
              $answer = $_REQUEST[$boxNumber];
              $answers .= $answer; 
              $answers .= ", ";            
          }        
        switch($outerCounter) 
        {          
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
      mysqli_query($conn, "INSERT INTO `teachSATI` (`month`, `year`, `limitAns`,`section2`, `section3`, `section4`, `section5`, `section6`, `section7`, `section8`, `section9`, `section10`) VALUES ( '$month', '$year', '$limitAns', '$case2', '$case3', '$case4', '$case5', '$case6', '$case7', '$case8', '$case9', '$case10') ");
      header("Location: index_home.php");
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
            <h3>Instructions</h3>
            <ol>
              <li>Select the month and the year of the test.</li>
              <li>Underneath each section title is a long box that says "Enter the number of questions in this section." Do that. </li>
              <li>Enter each answer for each section using either capitals or lowercase. Either is fine.</li>
              <li>Enter ALL fractions as decimal answers to 2 decimal points. DO NOT ROUND.</li>
              <li>Any unused boxes, just skip them.</li>
              </ol>
            <?php             
              echo "<form id='scoreI' method='post' action='addTestI.php'>\n";

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
              for($outerCounter = 2; $outerCounter <= 10; $outerCounter++) {
                
                echo "<h3>Section $outerCounter</h3>";
                echo "<div class='row'>";        
                echo "<div class='large-6 small-6 columns'>";
                echo "<select id='sub' name='sub'>";
                echo "<option value='m' selected='selected'>Math</option>";
                echo "<option value='w'>Writing</option>";
                echo "<option value=''"
                echo "</select>"
                echo "</div>";        
                echo "<div class='large-6 small-6 columns'>";
                echo "<label for='$outerCounter'><input type='text' name='$outerCounter' id='$outerCounter' placeholder='Enter the number of questions in this section....'/></label></div></div>";
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
