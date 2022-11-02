<!DOCTYPE html>
<html lang="en">
<head>
<style>
        table,tr,th{
            border: 2px solid;
        }
        table,tr,td{
            border: 2px solid;
            color: indigo;
        }
        table{
            border-collapse: collapse;
        }
        .image{
            height: 75px;
            width: 55px;
            border-radius: 100%;
        }
    </style>
</head>
<body>
<?php
include("./constant.php");
?>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Telephone</th>
<th>Gender</th>
<th>Nationality</th>
<th>Username</th>
<th>Picture</th>
</tr>
<?php
if (!$conn) {
    echo "Connection Error".mysqli_connect_error();
}
else{
$sql="SELECT * FROM crud";
$select=mysqli_query($conn,$sql) or die('Error occured'.mysqli_error($conn));
if($select==TRUE){
    $count= mysqli_num_rows($select);
   if($count>0){
while ($row = mysqli_fetch_assoc($select)) {
$url='uploads/'.$row["Picture"];
$Firstname=$row["Firstname"];
$Lastname=$row["Lastname"];
$Email=$row["Email"];
$Telephone=$row["Telephone"];
$Gender=$row["Gender"];
$Nationality=$row["Nationality"];
$Username=$row["Username"];
?>

<tr>
    <td><?php echo $Firstname?></td>
    <td><?php echo $Lastname?></td>
    <td><?php echo $Email?></td>
    <td><?php echo $Telephone?></td>
    <td><?php echo $Gender?></td>
    <td><?php echo $Nationality ?></td>
    <td><?php echo $Username?></td>
    <td> <img src="<?php echo $url?>" class="image" alt=""></td>
    </tr>
    <?php
}}}}
?>
</table>
</body>
</html>