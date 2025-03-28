<?php
	$Email = $_POST['Email'];
    $Password = $_POST['Password'];
	

	// Database connection
	$conn = new mysqli('localhost:3306','root','','UpulKumaraFuelStation');
	// Query the database
$sql = "SELECT * FROM User WHERE Email='$Email' AND Password='$Password'";
$result = $conn->query($sql);

// Check if login is successful
if ($result->num_rows > 0) {
    echo '<script type="text/javascript">

    window.onload = function () { alert("Login Successfully");window.location.href = "Fuel Selection.html";  }

</script>';
} 


else {
    echo '<script type="text/javascript">

    window.onload = function () { alert("Login Fail..! Please Check your Email and Password ");  
    
    }

</script>';
}

// Close connection
$conn->close();
?>