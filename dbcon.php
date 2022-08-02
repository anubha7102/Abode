<?php

$server = "remotemysql.com";
$user = "3VXbvNbOK5";
$password = "bHDHe4pOUa";
$db = "3VXbvNbOK5";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	?>
       <script>
       	alert("Connection Successful");
       </script>

	<?php
}else{

	?>
       <script>
       	alert("No Connection");
       </script>

	<?php
}


?>