<html>
	<head>
		<title>M07014053</title>
	</head>
	<body>
		<?php
			//VARIABLES
			$text="Variable Test";
			echo "<h1>$text</h1>";

			//DISPLAYING TEXT
			echo"<h1>Echo Test</h1>";
			echo"<blockquote>The echo statement can be used with or without parentheses: 
				echo or echo().
			</blockquote>"; 

			echo"<p>This is "."concatenation example."."</p>";

			$var="variable value";
			echo"<p>With quotation marks, the $var will be shown.";
			echo'With apostrophes, the $var will be shown.</p>';
			$arr = array();
			$arr[3]="c";
			echo"Size of array: ".sizeof($arr).". Value:$arr[3]";
			echo"<br>";

			//ARRAYS
			$team=array();
			$team[0]="Harry";
			$team[1]="Ron";
			$team[2]="Granger";
			//echo "Size of array: ".sizeof($team).". Value:$team[0],$team[1],$team[2]";
			echo"<br>";

			$team2=array(
				"Harry2",
				"Ron2",
				"Granger2"
			);
			//echo "Size of array: ".sizeof($team2).". Value:$team2[0],$team2[1],$team2[2]";
			echo"<br>";

			//FUNCTION
			function showTeamMembers(){
				echo"<h3>Function Test</h3>";
				global $team;
				echo "Size of array: ".sizeof($team).". Value: $team[0] ,$team[1] ,$team[2]";
			}
			//exec func
			showTeamMembers();

			function showTeamMembers2(){
				echo"<h3>Function Test</h3>";
				global $team2;
				echo "Size of array: ".sizeof($team2).". Value: $team2[0] ,$team2[1] ,$team2[2]";
				echo "<br>";
			}
			//exec func
			showTeamMembers2();
			
			//LOOPS
			for($i=0;$i<=3;$i++){
				echo"<a href='$i.html'>Link to page $i</a><br>";
			}

			//BRANCHINGS
			function evOdd($rows){
				echo"<h3>Branching Test</h3>";
				for($i=1;$i<$rows+1;$i++){
					if($i%2==0){
						echo"<li>$i is even</li>";
					}
					else{
						echo"<li>$i is odd</li>";
						
					}
				}
				echo"<br>";
			}
			evOdd(5);
		?>
	</body>	
</html>