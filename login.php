<?php
 require_once("includes/DB.php");


        $username = mysqli_real_escape_string($Connection,$_POST['username']);
        $password= mysqli_real_escape_string($Connection,$_POST['password']);
     
        $query1="SELECT * FROM users";
        $result1 = mysqli_query($Connection,$query1);
        while($data = mysqli_fetch_assoc($result1)){
            $username1 = $data['username'];
            $password1 = $data['password'];
         
          if($username==$username1 && $password==$password1){   

        $query = "SELECT * FROM users where username='$username' and password ='$password' ";
        $result = mysqli_query($Connection,$query);
        if($result){
            header("Location: Dashboard.php");
        }
        else{
          header("index.php?incorrect password or username");
        }
      }
      else{
        header("index.php?incorrect password");
      }
      }
    
  








    









?>