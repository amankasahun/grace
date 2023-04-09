<?php 
if (isset($_POST['namee']) && isset($_POST['cont']) && isset($_POST['contet']) ) {
	$namee = $_POST['namee'];
	$cont = $_POST['cont'];
	$contet = $_POST['contet'];

	
	$conx=mysqli_connect("localhost","gracelandcoffeec","B4rW7oE2wN9zK5i","gracelandcoffeec_email1");
	if ($conx) {
		echo "connected";
		# code...
	}
else
{
	echo "not connnected";
}


	$sql="INSERT INTO contact(name, email, comment) VALUES ('$namee', '$cont', '$contet');";
	$result = mysqli_query($conx,$sql);
	mail("aman.kasahun99@gmail.com","Comment on Grace Coffee",$namee);




	if($result == true){
		echo "";
		echo "<h3> insertex</h3>";
	}
	else {
		echo "nottt";
		# code...
	}
}

 ?>