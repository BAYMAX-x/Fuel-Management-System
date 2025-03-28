<?php
$Idno = $_POST['Idno'];
$FuelType = $_POST['FuelType'];
$VehicleType = $_POST['VehicleType'];
$Quantity = $_POST['Quantity'];
$BookingDate = $_POST['BookingDate'];

// Calculate the total amount based on the fuel type and quantity
switch ($FuelType) {
    case "PetrolOctane 92":
        $unitPrice = 2.5;
        break;
    case "Octane 95":
        $unitPrice = 2.0;
        break;
   
    default:
        $unitPrice = 0;
}

$totalAmount = $unitPrice * $Quantity;

// Database connection
$conn = new mysqli('localhost:3306', 'root', '', 'UpulKumaraFuelStation');
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into summ(Idno, FuelType, VehicleType, Quantity, BookingDate, TotalAmount) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssi", $Idno, $FuelType, $VehicleType, $Quantity, $BookingDate, $totalAmount);

    $stmt->execute();

    echo
 
'<script type="text/javascript">
        window.onload = function () { alert("Data Insert Successfully");window.location.href = "Petrol.html"; }
        </script>';

    $stmt->close();
    $conn->close();
}
?>