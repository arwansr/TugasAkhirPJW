<?php
define('HOST','mysql.idhostinger.com');
define('USER','u260115757_user');
define('PASS','123456');
define('DB','u260115757_db');
 
$con = mysqli_connect(HOST,USER,PASS,DB);
 
$sql = "select * from person";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
	array_push($result,
	array('id'=>$row[0],
	'name'=>$row[1],
	'address'=>$row[2]
	));
}
 
echo json_encode(array("result"=>$result));
 
mysql_close($con);
 
?>
