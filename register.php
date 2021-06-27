<?php

include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Exam Log In</title>
<!---firebase CDN-->
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-auth.js"></script>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <!--Font Awesome CDN-->
 <script src="https://kit.fontawesome.com/9b0177f45b.js" crossorigin="anonymous"></script>

 <!--slick slider-->
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<!--Custom Stylesheet-->
<link rel="stylesheet" href="mystyle.css"/>
<style>

</style>

</head>
<body>
<!--header-->
<header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-mid-4 my-2 text-white"
                         data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Log In</button>
                        <div class="dropdown-menu">
                            <a href="logout.php" class="dropdown-item">Log In</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title text-white">Online Exam Register
                    </h2>
                </div>
                <div class="col-md-4 col-12 text-right" >
                    
                    <span class="admin-name" style="font-weight:bold; font-size:20px; font-color:white;"></span>
                    <img src="profile.png" alt="avatar" height="80px" width="80px"/>
                </div>
            </div>
        </div>
            
                            
 <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                 aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><button7 onclick="alert('Page under Maintenance')">About</button7></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                </li>
            </ul>
        </div>
</header>
<!--/header-->

<!--login-->
  <div class="container">
    <div class="modal-content animate">
      <div class="imgcontainer">
        <img src="profile.png" alt="Profile" class="avatar">
      </div>
      <div class="container">
        <div class="register">
          <h1>Register</h1>
          <p style="text-align: center;">Please fill all details.</p>
          <hr>
        </div>
        
        <form action="" name="form1" method="POST">
            <div class="form-group">
                <label >Full Name</label>
                <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name">
            </div>
            <div class="form-group">
                <label >Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Username">
                <small id="emailHelp" class="form-text text-muted">Use your exam Roll no. in username.</small>
            </div>
            <div class="form-group">
                  <label >Email address</label>
                 <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                <small id="emailHelp" class="form-text text-muted">Use your D.O.B ex: 26061998</small>
            </div>
            <div class="form-group">
                <label >Conatct</label>
                <input type="number" class="form-control" name="contact" placeholder="Enter contact number.">
            </div>

                <button type="submit" name="submit1" class="btn btn-success" >Register</button>
            <div class="alert alert-Success" id="success" style="margin-top:10px; display:none;" >
                <strong>Success!  </strong>  Account Created Successfully.
            </div>

            <div class="alert alert-danger" id="failure" style="margin-top:10px; display:none;" >
                <strong>Already Exists!  </strong>  Please use another details.
            </div>
                   
            
        </form>
      </div>
      </div>
    </div>


<?php
if(isset($_POST["submit1"]))
{
    $count=0;
    $res=mysqli_query($link,"select * from registration where username='$_POST[username]' ");
    $count=mysqli_num_rows($res);

    if($count>0)
    {
        ?>
        <script type="text/javascript">
        document.getElementById("success").style.display="none";
        document.getElementById("failure").style.display="block";
    </script>
        <?php
    }
    else
    {
      mysqli_query($link," insert into registration values(NULL,'$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[contact]')") or die (mysqli_error($link));
       
        ?>
         <script type="text/javascript">
         document.getElementById("failure").style.display="none";
        document.getElementById("success").style.display="block";
    </script>
        <?php
    }
}
?>
<!--/login-->

<!--/Main Section-->
<div class="row" style="background-color: var(--primary-color);font-family: var(--roboto);">
            <div class="col-md-12 col-sm-12 col-12" style="text-align:center;">
                <p>Developed by: Aman Kumar Singh  © 2020 Copyright</p>
                    </div>
                </div>         



  <!---Scripts-->
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.all.min.js"></script>
    
   

</body>
</html>