<?php
	$Idno = $_POST['Idno'];
    $Address = $_POST['Address'];
	$Mobile = $_POST['Mobile'];
	$Email = $_POST['Email'];
    $Password = $_POST['Password'];
	

	// Database connection
	$conn = new mysqli('localhost:3306','root','','UpulKumaraFuelStation');
	if($conn->connect_error){
		
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into User(Idno, Address, Mobile, Email,Password) values(?, ?, ?, ?,?)");
		$stmt->bind_param("issss", $Idno, $Address, $Mobile, $Email, $Password);

		 $stmt->execute();
		
		echo '<script type="text/javascript">

		 	window.onload = function () { alert("Data Insert Successfully");window.location.href = "Home.html";  }

	 	</script>';

		$stmt->close();
		$conn->close();
	}
?>