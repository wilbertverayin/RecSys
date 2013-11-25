<?php
require "vendor/autoload.php";
use BCC\Myrrix\MyrrixService as MyrrixService;

// Create connection
$con = mysqli_connect("localhost","root","root","bgn");
// Check connection
if (mysqli_connect_errno($con)) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
//	echo "Connected to db.";
}



// Instantiate the Myrrix service
$myrrix = new MyrrixService('localhost', 8888);
//sample usages
$userId = 3;
$result = $myrrix->setPreference(3,12,12);
$result = $myrrix->getRecommendation($userId);


echo "<pre>";
echo "Recommendations for User $userId (".getName($con,$userId).")<br/>";
for($i=0;$i<10;$i++){
	echo $result[$i][0].",".$result[$i][1]." - ".getName($con,$result[$i][0])."<br/>";
}
echo "</pre>";

mysqli_close($con);


function getName($connection, $userId) {
	$query_string = "SELECT name FROM bgn_users WHERE uid = $userId";
	$result = mysqli_query($connection, $query_string);
	$arrayResult = mysqli_fetch_assoc($result);
	return $arrayResult['name'];
}
?>


