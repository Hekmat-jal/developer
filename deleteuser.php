
<?php 
 require_once("includes/DB.php");

   $id = $_GET['id'];
   $query = "DELETE FROM users where users_id='$id'";
   $result = mysqli_query($Connection,$query);
   if($result){
    header("Location: Dashboard.php");
   }





?>