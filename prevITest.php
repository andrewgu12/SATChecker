<?php 
  require_once("included.php");  
  require_once("login.php");
?>
<!doctype html>
<html>
  <head>
    <title>Past SAT II Tests | Springlight Education</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/app.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>    
      
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
              /*echo "<form id='pickIITest'>";
              echo "<div class='row'>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Subject";
              echo "<select id='sub' onchange='javascript:searchTests()'>";
              echo "<option value='ma'>Math</option>";
              echo "<option value='ph'>Physics</option>";
              echo "<option value='lit'>Literature</option>";
              echo "<option value='ushist'>US History</option>";
              echo "</select></label></div>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Month";
              echo "<select id='month' onchange='javascript:searchTests()'>";
              echo "<option value='1'>January</option>";
              echo "<option value='2'>Feburary</option>";
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
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Day";
              echo "<select id='day' onchange='javascript:searchTests()'>";              
              for($i = 1; $i <= 31; $i++) {
                echo "<option value=$i>$i</option>";
              }
              echo "</select></label></div>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Year";
              echo "<input type='text' id='year' name='year' placeholder='2014'  onkeyup='javascript:searchTests()' />";
              echo "</label></div></form>";          */
              echo "<div id='scoreII'>\n";
	          	echo "<table id='listTest'>";
				echo "<thead>";
				echo "<tr>";				
				echo "<th>Month</th>";
				echo "<th>Date</th>";
				echo "<th>Year</th>";
				echo "<th>Score</th>";
				echo "<th>Action</th>";
				echo "</tr>";
				echo "</thead><tbody>";                
                $query = "SELECT * FROM `studSATI` WHERE `ID` = '$user' ORDER BY `year` ASC";                    
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){                    
                  $month = $row['month'];
                  //$fullName = $name . ' ' . $lastName;
                  $date = $row['date'];
                  $year = $row['year']; 
                  $score = $row['score']; 
                  $testID = $month .  $year;       
                  echo "<tr>";                  
                  echo "<td>$month</td>";
                  echo "<td>$date</td>";
                  echo "<td>$year</td>";
                  echo "<td>$score</td>";
                  echo "<td><a href='viewTest.php?id=$testID'>View Test</a></td>";
                  echo "</tr>";
                }
              echo "</tbody></table>";
              echo "</div>\n";
            ?>
        

        
        </div>      
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>3