<?php
require_once("included.php");
require_once("login.php");
		if(isset($_REQUEST['Test'])) {
			$subject = $_REQUEST['Test'];				
		}
		if(isset($_REQUEST['month'])) {
			$month = $_REQUEST['month'];
		}		
		if(isset($_REQUEST['date'])) {
			$date = $_REQUEST['date'];			
		}
		if(isset($_REQUEST['year'])) {
			$year = $_REQUEST['year'];
		}

		
		$query = "SELECT * FROM `studSATII` ";

		if($subject || $month || $date || $year) {
			$query .= "WHERE ";
			if($subject) {
				$query .= "`Test` = '$subject'";
				if($month || $date || $year) {
					$query .= " AND ";
				}
			}
			if($month) {
				$query .= "`month` = '$month'";
				if($date || $year) {
					$query .= " AND";
				}
			}
			if($date) {
				$query .= "`date` = '$date'";
				if($year) {
					$query .= " AND";
				}
			}
			if($year) {
				$query .= "`year`='$year'";
			}
		}
		$query .= "  WHERE `studID` = '$user'";
		$result = mysqli_query($conn, $query);
		//$indivCounter = 0;

		while($row = mysqli_fetch_array($result)){			
			$test = $row['Test'];			
			switch($test) {
				case "ma": $testName = 'Math'; break;
				case "ph": $testName = 'Physics'; break;
			}
			$month = $row['month'];
			//$fullName = $name . ' ' . $lastName;
			$date = $row['date'];
			$year = $row['year'];	
			$score = $row['score'];	
			$testID = $month . $date . $year;				
			echo "<tr>";
			echo "<td>$testName</td>";
			echo "<td>$month</td>";
			echo "<td>$date</td>";
			echo "<td>$year</td>";
			echo "<td>$score</td>";
			echo "<td><a href='viewTest.php?id=$testID'>View Test</a></td>";
			echo "</tr>";
		}


?>