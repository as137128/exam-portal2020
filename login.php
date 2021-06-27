<?php
session_start();
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
          <div class="col-md-12 col-12 text-center">
            <h2 class="my-md-3 site-title text-white">Online Exam Log In</h2>
          </div>
      </div>
    </div>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="login.php"> <button7 >Dashboard </button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><button7 onclick="alert('Please Login First')">About</button7></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php"><button7>Create an account</button7></a>
            </li> 
          </ul>
        </div>
      </nav>
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
          <h1>Log In</h1>
          <p style="text-align: center;">Please fill all details.</p>
          <hr>
        </div>
          <form action="" name="form1" method="POST">
          <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Username">
                <small id="email_field" class="form-text text-muted">Use your exam Roll no. in username.</small>
            </div>
            <div class="form-group">
                <label for="password" >Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                <small id="password_field" class="form-text text-muted">Use your D.O.B ex: 26061998</small>
            </div>
            <div>
              <button type="submit" name="login" >Log In</button>
            </div>
           
            <div class="alert alert-danger" id="failure" style="margin-top:10px;display:none;" >
                <strong>Invalid Username or Password!  </strong>  Please fill correct details</div>
                
            </div>
          </form>
      </div>
    
    </div>
  </div>


<?php
if(isset($_POST["login"]))
{
    $count=0;
    $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]' ");
    $count=mysqli_num_rows($res);

    if($count==0)
    {
        ?>
        <script type="text/javascript">
        document.getElementById("failure").style.display="block";
    </script>
        <?php
    }
    else
    {
      $_SESSION["username"]=$_POST["username"];
       
        ?>
         <script type="text/javascript">
        window.location="select_exam.php";
    </script>
        <?php
    }
}
?>
<!--/login-->
<script type="text/javascript">
function preventBack(){
    window.history.forward();

}
setTimeout("preventBack()",0);
window.onunload = function (){ NULL };
</script>

<main>
<!--Main Section-->
<!---logo Sections-->
<div class="container-fluid">
  <div class="site-slider-logos px-md-4">
      <div class="row slider-logos text-center">
          
      </div>
  </div> 
</div>  
<!---/logo Sections-->
  </main>
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