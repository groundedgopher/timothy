<?php
/**
 * Created by PhpStorm.
 * User: tsmith
 * Date: 3/2/2016
 * Time: 5:25 PM
 *
 * sql calls to increase the ring count and get the ring count
 */

require_once('DB.php');
$type = $_REQUEST['type'];

$db = new DB();

if ($type == 'ring') {
	$sql = "UPDATE bellRing set ringCount = ringCount + 1";
	$db->query($sql);
}

$sql = "SELECT ringCount FROM bellRing";

$count = $db->query($sql);

echo ($count[0]['ringCount']);
