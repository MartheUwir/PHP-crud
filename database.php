<?php
if(isset($_POST['Submit'])){
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Email=$_POST['Email'];
$Telephone=$_POST['Telephone'];
$Gender=$_POST['Gender'];
$Nationality=$_POST['Nationality'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
include('./constant.php');
    $img_name =$_FILES['picture']['name'];
    $img_size = $_FILES['picture']['size'];
    $tmp_name = $_FILES['picture']['tmp_name'];
    $error = $_FILES['picture']['error'];
   
    // print_r($_FILES['profile']);
    if($error=== 0) {
        if($img_size>12500000){
                echo " Too large, the maximum is 1Mb.";
            }
        else{
           $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
           $img_ex_lc = strtolower($img_ex);
           $allowed_exs = array("jpg", "jpeg", "png");
           if(in_array($img_ex_lc, $allowed_exs)){
               $new_img_name = uniqid("IMG-", true).'.'. $img_ex_lc;
               $img_upload_path='uploads/'. $new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);
            //    $sql= "INSERT INTO crud(images) VALUES('$new_img_name')";
            //    mysqli_query($connection, $sql);
            //    header("Location:display.php");
           

    $sql = "INSERT INTO crud(Picture,Firstname,Lastname, Email,Telephone,Gender,Nationality,Username,Password) 
    VALUES ('$new_img_name','$Firstname','$Lastname','$Email','$Telephone','$Gender','$Nationality','$Username','$Password')";
   $insert=mysqli_query($conn,$sql) or die("error occured".mysqli_error($conn));
   if($insert==TRUE){
       echo "Data Added successfully";
   }
   else {
       echo "doesn't find the user".mysqli_error($conn);
   }
}
}
}
}

?>
<a href="./display.php" tittle="display data">display</a>









