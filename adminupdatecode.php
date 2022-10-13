<?php 
  require_once("includes/DB.php");

  $id = $_GET['id'];
  

    $admin_name = mysqli_real_escape_string($Connection,$_POST['admin_name']);
    $admin_password = mysqli_real_escape_string($Connection,$_POST['admin_password']);
    $images= mysqli_real_escape_string($Connection,$_POST['images']);
    $date = mysqli_real_escape_string($Connection,$_POST['dates']);
    $images = $_FILES['images']['name'];
    $target ='upload/'.basename($_FILES['images']['name']);
$query = "UPDATE admins set admin_name='$admin_name', admin_password='$admin_password',images='$images', addedData = '$date' where id='$id' ";
move_uploaded_file($_FILES['images']['tmp_name'],$target);
$result = mysqli_query($Connection,$query);
if($result){


      header("Location: admins.php");

}





  



?>