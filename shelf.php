
<?php 
// connection to db 
//include 'con.php'; 

?>







<!DOCTYPE html>
<html lang="en">
<head>
	<title>List</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="bg-img1 size1 overlay1" style="background-image: url('images/bg01.jpg');">
		<div class="size1 p-l-15 p-r-15 p-t-30 p-b-50">
			<div class="flex-w flex-sb-m p-l-75 p-r-60 p-b-165 respon1">
				<div class="wrappic1 m-r-30 m-t-10 m-b-10">
					
				</div>

				
			</div>

			<div class="wsize1 m-lr-auto">
				<p class="txt-center l1-txt1 p-b-60">
					.. <span class="l1-txt2">..</span>
				</p>

				
				
				
			</div>
				

			<?php


$DB_HOST = "rm-l4v9j450xpi4rwhdv7o.mysql.me-central-1.rds.aliyuncs.com";
$DB_PORT = "3306";
$DB_USER = "db_protestacc";
$DB_PASSWORD = "Amalshamrani1010$$";
$DB_DATABASE = "db_protest";
$table = "book";

try {
$db = new PDO("mysql:host=$DB_HOST; port=$DB_PORT;dbname=$DB_DATABASE", $DB_USER, $DB_PASSWORD);

foreach($db->query("SELECT * FROM $table ") as $row) {
echo "
<div class='flex-w flex-c-m cd100 wsize1 m-lr-auto p-t-116'>
<div class='flex-col-c-m size2 bor1 m-l-10 m-r-10 m-b-15'>
				<a href='".$row['file']."'> <span class='s1-txt2'>".$row['title']."</span></a>
				<span class='s1-txt2'>".$row['author']."</span>
			</div>";}


}



 catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}



















?>


			</div>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>