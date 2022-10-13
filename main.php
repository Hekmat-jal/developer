<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/AdminStyle.css">
    <style>
        .styles{
           font-weight:bold;
           font-size:10px;
           text-align:center;
        }
        .col-sm-1{
            background-color: lightgray;
            margin-left:4px;
            color:white;   
            
            align-items:center; 
        }
    </style>
</head>
<body>
    
<div class="container-fluid">
         <div class="row">
          <div class="col-sm-2 mt-4">
          
           <ul id="Side_Menu" class="nav navbar-nav">
               <li class="active"><a href="Dashboard.php" class="stylelinks"> <img  src="images/dashboard.png"  height="35px"> &nbsp; Dashboard</a></li>
               <li><a href="AddUsers.php" class="stylelinks"><img src="images/post.png"  height="35px" alt=""> &nbsp;Users</a></li>
               <li><a href="Categories.php" class="stylelinks"><img src="images/category.png"  height="35px" alt="">&nbsp; Pages</a></li>
               <li><a href="ManageAdmin.php" class="stylelinks"><img src="images/manageadmin.png"  height="35px" alt="">&nbsp; Manage Admins</a></li>
               <li><a href="Blog.php" class="stylelinks"><img src="images/blogs.png"  height="35px" alt="">&nbsp; Database</a></li>
               <li><a href="Comments.php" class="stylelinks"><img src="images/comments.png"  height="35px" alt="">&nbsp; Certificates</a></li>
               <li><a href="Logout.php" class="stylelinks"><img src="images/logout.png"  height="35px" alt=""> &nbsp;Logout</a></li>
           </ul>
          </div>
           <!-- start of side area -->
       
           <div class="col-sm-10">
            

          <div class="alert alert-primary mt-3 text-center" role="alert">   
              <h3>Dashboard Of Database 
              <div class="spinner-grow" role="status">
             <span class="visually-hidden-focusableally-hidden"></span>


            <div>

        
</div>
    
</div>

 
</div>
  
  <div class="container">
    <div class="row">
        <div class="col-sm-1">
          <a href="admins"> <span><img src="images/admin.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> Admins</p>
        </div>
        <div class="col-sm-1 ml-2">
          <a href="admins"> <span><img src="images/certificate.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> certificates</p>
        </div>
        
        <div class="col-sm-1 ml-2">
          <a href="admins"> <span><img src="images/salary.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> salary</p>
        </div>

        
        <div class="col-sm-1 ml-2">
          <a href="admins"> <span><img src="images/book.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> Books</p>
        </div>

        <div class="col-sm-1 ml-2">
          <a href="admins"> <span><img src="images/teachers.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> Teachers</p>
        </div>
    </div>
  </div>
  
  <div class="container  mt-2 mb-5">
    <div class="row">
        <div class="col-sm-1">
          <a href="admins"> <span><img src="images/student.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> Students</p>
        </div>
        <div class="col-sm-1 ml-2">
          <a href="admins"> <span><img src="images/helpers.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> Helpers</p>
        </div>
        
        <div class="col-sm-1 ml-2">
          <a href="admins"> <span><img src="images/expense.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> Expense</p>
        </div>
  
        
        <div class="col-sm-1 ml-2">
          <a href="admins"> <span><img src="images/question.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> Chandah</p>
        </div>

        <div class="col-sm-1 ml-2 ">
          <a href="admins"> <span><img src="images/users_settings.png" width="80px" height="80px" alt=""><span></a>
          <p class="styles"> Users Setting</p>
        </div>
    </div>
</div>
</div>

</body>
</html>