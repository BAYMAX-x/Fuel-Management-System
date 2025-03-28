<?php

    $host ="localhost:3306";
    $username ="root";
    $password ="";
    $dbname ="UpulKumaraFuelStation";

    $conn=mysqli_connect($host,$username,$password,"$dbname");
    
    if($conn)
        {        
          echo '<script type="text/javascript">

            window.onload = function () { alert("Database connection is ok");}

          </script>';  
        }

    else
        {
          echo '<script type="text/javascript">

            window.onload = function () { alert("Database connection is failed");}

          </script>';  
        }
?>