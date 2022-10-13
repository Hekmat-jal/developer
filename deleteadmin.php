<?php 
 require_once("includes/DB.php");

   $id = $_GET['delete_id'];
   $query = "DELETE FROM admins where id='$id'";
   $result = mysqli_query($Connection,$query);
   if($result){
    header("Location: admins.php");
   }
   else{
    header("Location: index.php");
   }





?>