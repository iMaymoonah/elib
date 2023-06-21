<?php 
// connection to db 
//include 'con.php'; 

?>







<!DOCTYPE html>
<html lang="en">
<head>
	<title>eLibrary</title>
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
					Welcome  eBook Library <span class="l1-txt2">Admin !</span><br><br>
				
				
					
				</p>
				<form class="w-full flex-w flex-c-m validate-form" action="admin.html">
					<p class="txt-center s1-txt1 p-t-5">
						Enter the <strong>Title</strong> of the Book
					</p>
					<input class="input100 placeholder0 m1-txt1" type="text" name="title" placeholder="Book Title" required pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only.')">
					<span class="focus-input100"></span>


					<p class="txt-center s1-txt1 p-t-5">
						Enter the <strong>Auther</strong> of the Book
					</p>
					<input class="input100 placeholder0 m1-txt1" type="text" name="auther" placeholder="Book Auther" required pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only.')">
					<span class="focus-input100"></span>


					<p class="txt-center s1-txt1 p-t-5">
						Select the <strong>PDF File</strong> of the Book
					</p>
				
						<input class="input100 placeholder0 m1-txt1" type="file" name="file" placeholder="Book File" required accept="application/pdf">
						<span class="focus-input100"></span>
					


						
						<p class="txt-center s1-txt1 p-t-5">
						</br>
						</p>
						
                        <input type="submit" name="submit" value="Upload" class="flex-c-m size3 m1-txt2 how-btn1 trans-04 m-b-20">
					
				</form>
				
				
			</div>
			
			</div>
	
		</div>
	</div>


<?php
if(isset($_POST['submit'])  )
{

$title = $_POST['title']; 
$auther = $_POST['auther'];
$file = $_POST['file'];


$DB_HOST = "rm-l4v9j450xpi4rwhdv7o.mysql.me-central-1.rds.aliyuncs.com";
$DB_PORT = "3306";
$DB_USER = "db_protestacc";
$DB_PASSWORD = "Amalshamrani1010$$";
$DB_DATABASE = "db_protest";
$table = "book";

try {
$db = new PDO("mysql:host=$DB_HOST;dbname=$DB_DATABASE", $DB_USER, $DB_PASSWORD);

$sql = "INSERT INTO book (title, author, file)
VALUES ('$title', '$auther', '$file')";
// use exec() because no results are returned
$conn->exec($sql);
echo "New record created successfully";



} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}





}// end if
?>

	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>