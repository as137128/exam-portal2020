<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Exam Portal</title>


    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <!--Font Awesome CDN-->
 <script src="https://kit.fontawesome.com/9b0177f45b.js" crossorigin="anonymous"></script>

 <!--slick slider-->
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<!--Custom Stylesheet-->
<link rel="stylesheet" href="mystyle.css"/>


<style>
.banner{
    background-color: blue;
}
</style>

</head>
<body>
    <!--header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title text-white">Online Exam
                    </h2>
                </div>
                <div class="col-md-4 col-12 text-right" >
                    
                    <span class="admin-name" style="font-weight:bold; font-size:20px; font-color:white;"><?php echo $_SESSION["username"];?></span>
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
                    <a class="nav-link" href="select_exam.php"><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><button7 onclick="alert('Page under Maintenance')"></button7></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"></a>
                </li>
            </ul>
        </div>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-right">
                            <ul class="breadcome-menu">
                                <li>
                                    <div class="row">
                                    <div>
                                      <p >Time Left: </p> 
                                    </div>
                                    <div id="countdowntimer" style="display:block;">
                                    </div>
                                    
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
        <script type="text/javascript">
setInterval(function() {
      timer();
  },1000);

///** timer function */
 function timer()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                if(xmlhttp.responseText=="00:00:01")
                {
                    window.location="result.php";
                }
                document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","forajax/load_timer.php",true);
        xmlhttp.send(null);
            }

</script>
</header>