


<?php
 require_once("includes/DB.php");

   if(isset($_POST['submit'])){


        $username = mysqli_real_escape_string($Connection,$_POST['username']);
        $password = mysqli_real_escape_string($Connection,$_POST['password']);
        $date = mysqli_real_escape_string($Connection,$_POST['dates']);


        $query = "INSERT INTO users(username,password,addedDate) values('$username','$password','$date')";

        $result = mysqli_query($Connection,$query);

        if($result){
            header("Location: Dashboard.php?The User Added ");
        }
        else{
            header("Location: AddUsers.php");
        }







   }










?>