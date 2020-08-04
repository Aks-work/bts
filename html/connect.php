<?php
$name=$_POST['name'];
$fanname=$_POST['fanname'];
$password=$_POST['password'];
$email=$_POST['email'];
$number=$_POST['number'];
$gender=$_POST['gender'];
$country=$_POST['country'];

	$conn= new mysql_i("127.0.0.1","user",'',"regi");
	if($conn->connect_error)
	{
		die('connection failed :'.$conn->connect_error);
	}
	else{
	  		$stmt=$conn->prepare("insert into registar(name,fanname,password,email,number,gender,country) values(?,?,?,?,?,?,?)");
	  		$stmt->bind_param("ssssiss",$name,$fanname,$password,$email,$number,$gender,$country);
	  		$stmt->execute();
	  		echo "registration successfull";
	  		$stmt->close();
            $conn->close();
	  	}
?>
