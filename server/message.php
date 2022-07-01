<?php



$db_host="localhost";
$db_user="root";
$db_password="kim5192!";
$db_name="Person";
$con=mysqli_connect($db_host, $db_user, $db_password, $db_name);

$sql_value="SELECT number FROM person_num";
$value_2=mysqli_query($con,$sql_value);
$row = mysqli_fetch_row($value_2); 

$post = json_decode(file_get_contents('php://input'), true);
#$Person_Number = $post->action->detailParams->Person_Number->value;
$Person_Number=$post;
$b="현재 이용자 수는 : $row[0]명 입니다.";
$req = [
	"version" => "2.0", 
	"template" => [
		"outputs" => [
			[
				"simpleText" => [
					"text" => $b
				]
			]
		]
	]
];

echo json_encode($req, JSON_UNESCAPED_UNICODE);
?>
