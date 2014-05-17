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
    <div i onchange='javascript:searchTests()'d="container">
      
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
              echo "<form id='pickIITest'>";
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
              echo "<option value=''></option></select></label></div>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Day";
              echo "<select id='day' onchange='javascript:searchTests()'>";
              echo "<option value=''></option></select></label></div>";
              echo "<div class='large-3 small-3 columns'>";
              echo "<label>Year";
              echo "<select id='year' onchange='javascript:searchTests()'>";
              echo "<option value=''></option></select></label></div></form>";          
              echo "<div id='scoreII'>\n";
	          	echo "<table id='listTest'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>Test</th>";
				echo "<th>Month</th>";
				echo "<th>Date</th>";
				echo "<th>Year</th>";
				echo "<th>Score</th>";
				echo "<th>Action</th>";
				echo "</tr>";
				echo "</thead><tbody>";  
              include('listTests.php');                      
              echo "</tbody></table>";
              echo "</div>\n";
            ?>
        

        
        </div>      
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js" />
    <script src="js/app.js"></script>
  </body>
</html>3