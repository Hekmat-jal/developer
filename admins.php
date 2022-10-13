<?php 

   require_once("includes/DB.php");

?>
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
     <!-- <link rel="stylesheet" href="bootstrap/css/AdminStyle.css">  -->
</head>
<body>
    


  
<div class="alert alert-primary mt-3 text-center" role="alert">   
              <h3>Admins  page 
              <div class="spinner-grow" role="status">
             <span class="visually-hidden-focusableally-hidden"></span>


            <div> 
</div>
</div>
</div>




<div class="contaienr-fluid">
<div class="row">
 

<div class="col-sm-4 offset-3">
        

<form action="addAdminCode.php" method="post" enctype="multipart/form-data">
             <fieldset>
                <div class="form-group">
                    <label for="" class="">AdminName</label>
                    <input type="text" name="admin_name" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" name="admin_password" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Added Date</label>
                    <input type="file" name="images" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Added Date</label>
                    <input type="date" name="dates" class="form-control">
                </div>

                <br>
             </fieldset>
             <input type="submit" name="submit" class="btn btn-success form-control btn-block" value="Add User">
        </form>
        <br>
        <br>

     </div>  
     <div class="col-sm-2 offset-1 mt-4" id="">
      <?php
        $uqery="SELECT * FROM admins order by id asc";
        $result = mysqli_query($Connection,$uqery);
        while($data= mysqli_fetch_assoc($result)){
            $image = $data['images'];
        }
      ?>
      
      <div class="thumbnail img-fluid" id="photos">
        <a download href=""><img src="upload/<?php echo $image ?>"  width="300px" height="200px" alt=""> </a>   
        <a href=""><span class="badge bg-primary">Change photo</span></a>
         <a href="">  <span align="right" class="badge bg-warning">delete photo</span></a>

    </div>
        
   </div>   

    
</div></div>

</div>

   <div class="container-fluid">
     <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover table-stripped table-responsive  table-bordered">
            <thead class="text-center text-bg-primary">
                <tr>
                       <th>ایډي</th>
                        <th>اډمین</th>
                        <th>پاسورډ</th>
                        <th>عکس</th>
                        <th>رجستر تاریخ</th>
                        <th>ایدیت</th>
                        <th>حذف </th>
          
                </tr>
            </thead>
              <tbody class="text-center text-bold">
                <tr>
                    <?php 
                       $uqery="SELECT * FROM admins order by id desc";
                       $result = mysqli_query($Connection,$uqery);
                       while($data=mysqli_fetch_assoc($result)){
                          $id=$data['id'];
                          $admin_name=$data['admin_name'];
                          $admin_password=$data['admin_password'];
                          $image=$data['images'];
                          $date=$data['addedData'];

                    ?>
                 
                    <td><?php  echo $id; ?></td>
                    <td><?php  echo $admin_name; ?></td>
                    <td><?php  echo $admin_password; ?></td>
                    <td><a href=""><img src="upload/<?php  echo $image; ?>" width="100px" height="60px" ></a></td>
                    <td><?php echo $date; ?></td>
                    <td><a href="updateadmins.php?id=<?php echo  $id; ?>"><span class="badge bg-success">update</span></a></td>
                    <td><a href="deleteadmin.php?delete_id=<?php echo $id; ?>"><span class="badge bg-danger">delete</span></a></td>


                </tr>
                <?php 
                       } ?>
              </tbody>
            </table>
        </div>
     </div>
   </div>



</div>
</div>
</div>
<div class="col-sm-12">         
 <footer class="bd-footer py-4 py-md-5 mt-5 bg-dark">
         <div class="container py-4 py-md-5 px-4 px-md-3">
           <div class="row">
             <div class="col-lg-3 mb-3">
               <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"/></svg>
                 <span class="fs-5">Hekmat Blog website</span>
               </a>
               <ul class="list-unstyled small text-muted">
                 <li class="mb-2">Designed and developing websites <a href="/docs/5.2/about/team/">Android team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</li>
                 <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
                 <li class="mb-2">Currently v5.2.1.</li>
               </ul>
             </div>
             <div class="col-6 col-lg-2 offset-lg-1 mb-3">
               <h5>Links</h5>
               <ul class="list-unstyled">
                 <li class="mb-2"><a href="/">Home</a></li>
                 <li class="mb-2"><a href="https://hekmat-jalili.github.io/cvs">cvs</a></li>
                 <li class="mb-2"><a href="http://hekmat-jalili.github.io/web">blog</a></li>
                 <li class="mb-2"><a href="http://hekmat-jalili.github.io/dev">Number Projects</a></li>
               </ul>
             </div>
             <div class="col-6 col-lg-2 mb-3">
               <h5>Guides</h5>
               <ul class="list-unstyled">
                 <li class="mb-2"><a href="https://hekmat-jalili.github.io/cvs">Getting started</a></li>
                 <li class="mb-2"><a href="https://hekmat-jalili.github.io/web">Starter template</a></li>
                 <li class="mb-2"><a href="https://android.dev">Mobile application</a></li>
               </ul>
             </div>
             <div class="col-6 col-lg-2 mb-3">
               <h5>Projects</h5>
               <ul class="list-unstyled">
                 <li class="mb-2"><a href="https://github.com/twbs/bootstrap">SQL Server with .NET</a></li>
                 <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">PHP cms Blogs</a></li>
                 <li class="mb-2"><a href="https://github.com/twbs/icons">webistes</a></li>
                 <li class="mb-2"><a href="https://github.com/twbs/rfs">Flutter Applications</a></li>
                 <li class="mb-2"><a href="https://github.com/twbs/bootstrap-npm-starter">Todo's</a></li>
               </ul>
             </div>
             <div class="col-6 col-lg-2 mb-3">
               <h5>Community</h5>
               <ul class="list-unstyled">
                 <li class="mb-2"><a href="https://github.com/">GitHub</a></li>
                 <li class="mb-2"><a href="https://stackoverflow.com">Stackoverflow</a></li>
                 <li class="mb-2"><a href="https://guru.com">guru</a></li>
                 <li class="mb-2"><a href="https://w3school.com">w3school</a></li>
                 <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/bootstrap-5">Stack Overflow</a></li>
               </ul>
             </div>
           </div>
         </div>
       </footer>

</div>


<!-- footer  -->
  <script src="bootstrap/js/javascript.js"></script>
</body>
</html>