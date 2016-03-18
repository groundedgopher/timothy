<?php
/**
 * Created by PhpStorm.
 * User: tsmith
 * Date: 3/3/2016
 * Time: 4:29 PM
 *
 * sql call that pulls the data for the given game
 * game number is passed in
 */

require_once('DB.php');
$gameNumber = $_REQUEST['gameNumber'] ? $_REQUEST['gameNumber'] : 1;

$db = new DB();

$sql = "SELECT gameNumber, visitor, abbr, date, homeScore, visitorScore
		FROM games
		WHERE gameNumber = :gameNumber";
$sr = $db->query($sql, array(':gameNumber' => $gameNumber));

header('Content-Type: application/json');
echo json_encode($sr[0]);