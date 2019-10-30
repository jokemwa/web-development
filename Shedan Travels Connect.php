<?php
$FirstName=filter_input(INPUT_POST,'FirstName');
$LastName=filter_input(INPUT_POST,'LastName');
$email=filter_input(INPUT_POST,'email');
$number=filter_input(INPUT_POST,'number');
$Dep=filter_input(INPUT_POST,'Dep');
$Arr=filter_input(INPUT_POST,'Arr');
$Airline=filter_input(INPUT_POST,'Airline');
$Seating=filter_input(INPUT_POST,'Seating');
$date=filter_input(INPUT_POST,'date');
$time=filter_input(INPUT_POST,'time');
$Age=filter_input(INPUT_POST,'Age');
$Note=filter_input(INPUT_POST,'Note');


/*if (!empty($FirstName)){
if (!empty($LastName)){
	if (!empty($email)){
	if (!empty($number)){
		*/
	$servername="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="shedan travels";
	
	//creating a connection
	
	$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);
	
	if(mysqli_connect_error()){
		die('Connect error('.mysqli_connect_errno().')'
		.mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO tickets(FirstName,LastName,email,number,Dep,Arr,Airline,Seating,date,time,Age,Note)
		values('$FirstName','$LastName','$email','$number','$Dep','$Arr','$Airline','$Seating','$date','$time','$Age','$Note')";
		if($conn->query($sql)){
			echo "New record inserted successfully";
		}
		else{
			echo "Error: ".$sql."<br>".$conn->error;
		}
		$conn->close();
	}	
		

/*}
}
}*/
/*else {
	echo "FirstName should not be empty";
	die();
}*/
/*else {
	echo "LastName should not be empty";
	die();
}
else {
	echo "email should not be empty";
	die();
}

else{
	echo "number should not be empty";
	die();
}*/


?>


