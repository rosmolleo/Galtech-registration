<?php
include "Mysql_connect.php";
if (isset($_POST['up'])) {
    $id = $_GET['id'];    // var_dump($_FILES); 
    $filename = $_FILES['fileUpload']['name'];
    $temp_location = $_FILES['fileUpload']['tmp_name'];
    $temp_location=move_uploaded_file($temp_location, "Uploads/".$filename);
    move_uploaded_file($temp_location, $filename);
    // echo $filename;
    $up = "UPDATE `registrationdetails` SET `File Uploads`='$filename' WHERE `ID`='$id';";
    // echo $up;
    $conn->query($up);
    // echo $id;
    $file_display="SELECT `File Uploads` FROM `registrationdetails` WHERE `ID`='$id'";
          $display=$conn->query($file_display);
          $row=$display->fetch_assoc();
          $upload_img=$row['File Uploads'];
        //   echo $upload_img;
        // if($display->num_rows>0){
          $_SESSION['upload_img']=$upload_img;
        // }
    // echo "<img src='Uploads/".$upload_img."' style='position:absolute;top:140px;left:37px;width:35%;height:30%;
    // transform: rotate(-25.5deg);'>";
    include "contact.php";
}
?>
<!-- echo "<img src='Uploads/".$filename."' style='position:absolute;top:140px;left:37px;width:35%;height:30%;
transform: rotate(-25.5deg);'>"; -->
<!-- <img src="image.jpg" style="width: 100px; height: 100px; border: 1px solid black;"> -->
<!-- UPDATE  register set upload_img = '".$name."' where registerid='$upid' -->