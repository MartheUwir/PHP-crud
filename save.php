<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$Picture=$_POST['Picture'];
		$Firstname=$_POST['Firstname'];
		$Lastname=$_POST['Lastname'];
		$Email=$_POST['Email'];
		$Telephone=$_POST['Telephone'];
		$Gender=$_POST['Gender'];
		$Nationality=$_POST['Nationality'];
		$Password=$_POST['Password'];

		$sql = "INSERT INTO 'crud'( 'Picture','Firstname','Lastname', 'Email','Telephone','Gender','Nationality','Password') 
		VALUES ('$Picture','$Firstname','$Lastname','$Email','$Telephone','$Gender','$Nationality','$Password')";
		if (mysqli_query($conn, $sql)) {
			echo 'sucessfully inserted data';
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$Picture=$_POST['Picture'];
		$Firstname=$_POST['Firstname'];
		$Lastname=$_POST['Lastname'];
		$Email=$_POST['Email'];
		$Telephone=$_POST['Telephone'];
		$Gender=$_POST['Gender'];
		$Nationality=$_POST['Nationality'];
		$Password=$_POST['Password'];

		$sql = "UPDATE `crud` SET `Picture`='$Picture',Firstname`='$Firstname',`Lastname`='$Lastname,`Email`='$Email',`Telephone`='$Telephone',`Gender`='$Gender',`Nationality`='$Nationality',`Password`='$Passw WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo 'well updated';
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `crud` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM crud WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>