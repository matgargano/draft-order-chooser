<?php
$drafters[1] = "Afflito";
$drafters[2] = "Matt Ross";
$drafters[3] = "Chris G.";
$drafters[4] = "Mat G.";
$drafters[5] = "Tommy";
$drafters[6] = "Dave";
$drafters[7] = "Darren";
$drafters[8] = "Chris S.";
$drafters[9] = "Neil";

output_draft_picks($drafters);

/**
  * Output fantasy draft order using a lottery format using (last place finish)^2 as the number of lottery tickets
  *
  *
  * @author  Mat Gargano <mgargano@gmail.com>
  *
  * @since 1.0
  *
  * @param array    $array  an associative array who's key is the teams last place finish and value is the team name
  */


function output_draft_picks($array){
	foreach($array as $place=>$person){
		$place_squared = pow($place, 2);
		
		for ($inc=1; $inc<=$place_squared; $inc++) {
		  $draft_picks[] = $person;
		} 

	}

	for($x=1;$x<=count($array);$x++){
		$choice = $draft_picks[array_rand($draft_picks)];
		echo $x . ' ' . $choice . '<br>';
		$draft_picks = array_diff($draft_picks, array($choice));
	}
}