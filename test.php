<?php
    
$host="localhost:3306";
$username="dbotkin09";
$password="BreakingBad13";
$database="Dan_B_Election_2016";
$table="Election Result";

$conn=mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "connected";
mysql_select_db("$database") or die(mysql_error());
echo "connected";
    	
    
    
   	$Score=0;
	$file=file('pollster-ratings.csv');
	foreach($file as $line){
		list($ID, $Pollster, $Polls, $Live_Calle_With_Cellphones, $Internet, $NCPP_AAPOR_Roper, $Polls, $Simple_Average_Error, $Races_Called_Correctly, $Advanced_Plus_Minus, $Predictive_Plus_Minus)=explode(",", $line);
		$Score = $Score+$Simple_Average_Error;	
		if ($Pollster=='Monmouth University'){

			
			echo "<h1>$Pollster, $Simple_Average_Error,  $Predictive_Plus_Minus</h1>";
			
	
			}

	}
			
	echo "<h2>$Score</h2>";

	$states=['arkansas', 'colorado', 'connecticut', 'delaware', 'georgia', 'idaho', 'illinois', 'iowa', 'maine', 'maryland', 'michigan', 'minnesota', 'missouri', 'nevada', 'new-hampshire', 'new-jersey', 'new-mexico', 'new-york', 'north-carolina',  'ohio', 'oklahoma', 'oregon', 'pennsylvania', 'tennessee', 'utah', 'virginia', 'vermont','wisconsin'];         	
	
    $states2=['alabama','alaska', 'arizona', 'hawaii', 'indiana', 'kansas', 'kentucky', 'massachusetts', 'mississippi', 'montana', 'nebraska','north-dakota', 'rhode-island', 'south-carolina', 'south-dakota', 'texas', 'washington', 'west-virginia', 'wyoming'];

    $states3=['louisiana'];
    $states4=['california','florida'];
	
	foreach($states as $state){
		echo "<h1>$state</h1>";
		$newfile=file('http://elections.huffingtonpost.com/pollster/api/charts/2016-'.$state.'-president-trump-vs-clinton.csv');
		$num = 0;
 		$den = 0;
 		foreach($newfile as $newline){
        	      	  list($trump,$clinton, $other, $undecided, $poll_id, $pollster, $start_date, $end_date, $sample_sub, $sample_size, $mode, $partisanship, $partisan_affiliation)=explode(",", $newline);
        	      	  
        	      	$num = $num+(int)$clinton-(int)$trump;
			$den=$den+1;
		
               
               	 }
               	 echo "<h3>".(string)$num/$den."</h3>"; 
        }

    foreach($states2 as $state2){
		  echo "<h1>$state2</h1>";	
		  $newfile=file('http://elections.huffingtonpost.com/pollster/api/charts/2016-'.$state2.'-president-trump-vs-clinton.csv');
		  $num = 0;
 		  $den = 0;
 		 foreach($newfile as $newline){
        	      	  list($trump,$clinton, $undecided, $poll_id, $pollster, $start_date, $end_date, $sample_sub, $sample_size, $mode, $partisanship, $partisan_affiliation)=explode(",", $newline);
        	      	$num = $num+(int)$clinton-(int)$trump;
			$den=$den+1;
		        
		
               	 }
               	
               $result=(string)$num/$den;
               mysql_query("UPDATE `" . $table . "` SET `" . $state2. "` = " . $result . " WHERE id = 1 ;") or die(mysql_error());
               echo "<h3>".$result."</h3>";
               	 
        }

    foreach($states3 as $state3){
		 echo "<h1>$state3</h1>";
		$newfile=file('http://elections.huffingtonpost.com/pollster/api/charts/2016-'.$state3.'-president-trump-vs-clinton.csv');
 		$num = 0;
 		$den = 0;
 		foreach($newfile as $newline){
        	      	  list($trump,$clinton, $poll_id, $pollster, $start_date, $end_date, $sample_sub, $sample_size, $mode, $partisanship, $partisan_affiliation)=explode(",", $newline);
			$num = $num+(int)$clinton-(int)$trump;
			$den=$den+1;

               
               	 }
               	 echo "<h3>".(string)$num/$den."</h3>";
        }
        
        foreach($states4 as $state4){
		echo "<h1>$state4</h1>";
		$newfile=file('http://elections.huffingtonpost.com/pollster/api/charts/2016-'.$state4.'-presidential-general-election-trump-vs-clinton.csv');
		$num = 0;
 		$den = 0;
 		foreach($newfile as $newline){
        	      	  list($trump,$clinton, $other, $undecided, $poll_id, $pollster, $start_date, $end_date, $sample_sub, $sample_size, $mode, $partisanship, $partisan_affiliation)=explode(",", $newline);
        	      	$num = $num+(int)$clinton-(int)$trump;
			$den=$den+1;
		
               
               	 }
               	  echo "<h3>".(string)$num/$den."</h3>";
        }

?>
