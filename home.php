<?php 
// connection to db 
// connection to db 



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
					<div class="flex-w m-t-10 m-b-10">
						<a href="mailto:abc@abc.com" class="size4 flex-c-m how-social trans-04 m-r-5 m-b-3 m-t-3">
							e<i class="fa fa-email"></i>
						</a>
	
						<a href="https://twitter.com/" class="size4 flex-c-m how-social trans-04 m-r-5 m-b-3 m-t-3">
							<i class="fa fa-twitter"></i>
						</a>
	
						
					</div>
				</div>

				
			</div>

			<div class="wsize1 m-lr-auto">
				<p class="txt-center l1-txt1 p-b-60">
					Welcome To  <span class="l1-txt2">eBook Library!</span><br><br>
				
				
					<span style="font-size: medium;">Enjoy reading digital books, all for free and available anytime and anywhere..</span>
				</p>
				<form class="w-full flex-w flex-c-m validate-form" action="" >

					<p class="txt-center s1-txt1 p-t-5">
						Enter the title of book you wish to read
					</p>
						<input class="input100 placeholder0 m1-txt1" type="text" name="title" placeholder="Book Title">
						<span class="focus-input100"></span></br>
					
					
						<input type="submit" name="submit" value="Search" class="flex-c-m size3 m1-txt2 how-btn1 trans-04 m-b-20">
				</br>
				</form>
				
				<p class="txt-center s1-txt1 p-t-5"><a href="shelf.php">See All </a> </p>
			</div>
				

<?php 

// to get search result after click search
if(isset($_POST['submit'])  )
 {
	$title= $_POST['title'];

	$DB_HOST = "rm-l4v9j450xpi4rwhdv7o.mysql.me-central-1.rds.aliyuncs.com";
    $DB_PORT = "3306";
    $DB_USER = "db_protestacc";
    $DB_PASSWORD = "Amalshamrani1010$$";
    $DB_DATABASE = "db_protest";
    $table = "book";
	
try {
  $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_DATABASE", $DB_USER, $DB_PASSWORD);
 
  foreach($db->query("SELECT * FROM $table WHERE title LIKE '%$title%'") as $row) {
    echo "
	<div class='flex-w flex-c-m cd100 wsize1 m-lr-auto p-t-116'>
	<div class='flex-col-c-m size2 bor1 m-l-10 m-r-10 m-b-15'>
					<a href='".$row['file']."'> <span class='l1-txt3 p-b-9 days'>".$row['title']."</span></a>
					<span class='s1-txt2'>".$row['author']."</span>
				</div>";}





  }



} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}






 }//if







?>
			
		</div>
	</div>



	

	
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
