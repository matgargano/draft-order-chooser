<?php
$drafters = array(
	array(
		'name'  => 'Mat Gargano',
		'place' => 3
	),
	array(
		'name'  => 'Matt Ross',
		'place' => 1
	),
	array(
		'name'  => 'Chris Afflito',
		'place' => 2
	),
	array(
		'name'  => 'Tom Greene',
		'place' => 5
	),
	array(
		'name'  => 'Dave',
		'place' => 4
	),
	array(
		'name'  => 'Schmieder',
		'place' => 6
	),
	array(
		'name'  => 'Chris Gargano',
		'place' => 7
	),
	array(
		'name'  => 'Neil',
		'place' => 9
	),
	array(
		'name'  => 'Justin',
		'place' => 10
	),
	array(
		'name'  => 'Brian',
		'place' => 10
	),


);



output_draft_picks( $drafters );

/**
 * Output fantasy draft order using a lottery format using (last place finish)^2 as the number of lottery tickets
 *
 *
 * @author  Mat Gargano <mgargano@gmail.com>
 *
 * @since   1.0
 *
 * @param array $array an associative array who's key is the teams last place finish and value is the team name
 */


function output_draft_picks( $array ) {
	foreach ( $array as $index => $person ) {
		$place_squared = pow( $person['place'], 2 );

		for ( $inc = 1; $inc <= $place_squared; $inc ++ ) {
			$draft_picks[] = $person['name'];
		}

	}

	for ( $x = 1; $x <= count( $array ); $x ++ ) {
		$choice = $draft_picks[ array_rand( $draft_picks ) ];
		echo $x . ' ' . $choice . '<br>';
		$draft_picks = array_diff( $draft_picks, array( $choice ) );
	}
}
