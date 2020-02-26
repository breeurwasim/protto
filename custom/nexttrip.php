<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get posted data
$data = json_decode(file_get_contents("php://input"));
				
		$temparray = array();

			mysql_connect("localhost","zgxfliwb_hp","hp-123") or die(mysql_errno());
			mysql_select_db("zgxfliwb_hp") or die(mysql_errno());
			$myquery = "SELECT * FROM dbhpneft WHERE date = '" . $data->date . "'";
			$result = mysql_query($myquery) ;

			while($row = mysql_fetch_assoc($result)){
				   $temparray[] = array('empno' => $row['empno'],'batchno' => $row['batchno'],'claimno' => $row['claimno'],'payable' => $row['payable'],'ifsc' => $row['ifsc'],'accno' => $row['accno'],'name' => $row['name'],'date' => $row['date']);
			}

       print_r(json_encode($temparray));

?>