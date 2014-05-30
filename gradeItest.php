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
             if(isset($_REQUEST['id'])) 
             {
                $testID = $_REQUEST['id'];
                $year = substr($testID, 0, 4);
                $month = substr($testID, 4, 5);
                $student = mysqli_query($conn, "SELECT * FROM `studSATI` WHERE `ID`='$user' AND `month`='$month' AND `year`='$year'");               
                $teacher = mysqli_query($conn, "SELECT * FROM `teachSATI` WHERE `month`='$month' AND `year`='$year' LIMIT 1");                                          
                while($studRow = mysqli_fetch_array($student)) 
                {         
                    $stud2 = explode(",", $studRow['section2']);
                    $stud3 = explode(",", $studRow['section3']);
                    $stud4 = explode(",", $studRow['section4']);
                    $stud5 = explode(",", $studRow['section5']);
                    $stud6 = explode(",", $studRow['section6']);
                    $stud7 = explode(",", $studRow['section7']);
                    $stud8 = explode(",", $studRow['section8']);
                    $stud9 = explode(",", $studRow['section9']);
                    $stud10 = explode(",", $studRow['section10']);
                }
                while ($teachRow = mysqli_fetch_array($teacher))
                {                  
                  $limitArr = explode(",", $teachRow['limitAns']);
                  $teach2 = explode(",", $teachRow['section2']);                  
                  $teach3 = explode(",", $teachRow['section3']);
                  $teach4 = explode(",", $teachRow['section4']);
                  $teach5 = explode(",", $teachRow['section5']);
                  $teach6 = explode(",", $teachRow['section6']);
                  $teach7 = explode(",", $teachRow['section7']);
                  $teach8 = explode(",", $teachRow['section8']);
                  $teach9 = explode(",", $teachRow['section9']);
                  $teach10 = explode(",", $teachRow['section10']);
                }
                  
                $wrong = array();
                for($i = 2; $i <= 10; $i++)
                {
                  if($limitArr[$i] == " ") {continue;}
                  for($y = 1; $y <= $limitArr[$i]; $y++)
                  {
                    $studAnswers = strtoupper(${"stud".$i}[$y]);
                    $teachAnswers = strtoupper(${"teach".$i}[y]);
                    if($studAnswers == $teachAnswers)
                    {
                      array_push($wrong, "Y");
                    }
                    else {
                      array_push($wrong, "N");
                    }
                  }
                }
                var_dump($wrong);
                
             }
            ?>
        

        
        </div>      
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js" />
    <script src="js/app.js"></script>
  </body>
</html>
