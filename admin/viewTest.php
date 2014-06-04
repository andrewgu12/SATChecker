<?php 
  require_once("included.php");  
  require_once("login.php");
?>
<!doctype html>
<html>
  <head>
    <title>View Student Tests | Springlight Education</title>
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
              echo "<div id='scoreII'>\n";
	          	echo "<table id='listTest'>";
				echo "<thead>";
				echo "<tr>";				
                            echo "<th>Student</th>";
				echo "<th>Month</th>";				
				echo "<th>Year</th>";
				echo "<th>Score</th>";
				echo "<th>Action</th>";
				echo "</tr>";
				echo "</thead><tbody>";                
                $query = "SELECT * FROM `studSATI` ORDER BY `year` ASC";                    
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){                    
                  $stud = $row['ID'];
                  $month = $row['month'];
                  //$fullName = $name . ' ' . $lastName;
                  $date = $row['date'];
                  $year = $row['year']; 
                  $score = $row['score']; 
                  $testID = $year . $month;       
                  echo "<tr>";              
                  echo "<td>$stud</td>";
                  echo "<td>$month</td>";                  
                  echo "<td>$year</td>";
                  echo "<td>$score</td>";
                  echo "<td><a href='gradeItest.php?id=$testID&stud=$stud'>View Test</a></td>";
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