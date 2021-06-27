<?php
session_start();
include "connection.php";
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
    window.location="login.php";

    </script>
    <?php
}
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s", strtotime($date."+ $_SESSION[exam_time] minutes"));

?>
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
                <div class="col-md-4 col-sm-04 col-xs-04 col-12">
                <div class="btn-group">
                    <button class="btn border dropdown-toggle my-mid-4 my-2 text-white"
                     data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    Log Out</button>
                    <div class="dropdown-menu">
                        <a href="logout.php" class="dropdown-item">Log Out</a>
                    </div>
                </div>
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
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>

</header>




 <main>
        
        <div class="col-md-12 col-sm-12 col-12" style="min-height: 550px;background-color: linen;">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-12" style="text-align:center; font-style: oblique;font-family:"Times New Roman", Times, serif">
            <h1>Here is your exam overview!</h1>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12 col-sm-12 col-12" style="text-align:center;font-family:Arial; font-weight:bold;">
   <?php
    $correct=0;
    $wrong=0;
    $attempt=0;
    $notattempt=0;
    if(isset($_SESSION["answer"]))
    {
        for($i=1;$i<=sizeof($_SESSION["answer"]);$i++)
        {
            $answer="";
            $res=mysqli_query($link,"select * from questions where category='$_SESSION[exam_category]' && question_no=$i");

            while($row=mysqli_fetch_array($res))
            {
                $answer=$row["answer"];

            }
            if(isset($_SESSION["answer"][$i]))
            {
                if($answer==$_SESSION["answer"][$i])
                {
                    $correct=$correct+1;
                }
                else{
                    $wrong=$wrong+1;
                }
            }
            else{
                $wrong=$wrong+1;
            }
        }
    }
    $attempt=sizeof($_SESSION["answer"]);
$count=0;
$res=mysqli_query($link,"select * from questions where category='$_SESSION[exam_category]'");
$count=mysqli_num_rows($res);
$wrong=$attempt-$correct;
$notattempt=$count-$attempt;
echo "<br>";echo "<br>";
echo "<center>";
echo "Total Questions = ".$count;
echo "<br>";
echo "Correct Answer = ".$correct;
echo "<br>";
echo "Wrong Answer = ".$wrong;
echo "<br>";
echo "Attempted = ".$attempt;
echo "<br>";
echo "Not Attempted = ".$notattempt;
echo "</center>";
?>

            </div>
            </div>
            <div class="row">
            <div class="col-md-12 col-sm-12 col-12" >
            <div class="container" style="text-align:center;font-family:Arial; font-weight:bold;">
            <i class="fa fa-hand-o-down" aria-hidden="true"></i><br>
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>   
            <button9 class="btn btn-primary" style="background-color:white;text-color:white;font-weight:bold;"><a class="nav-link" href="logout.php"style="padding:5px;margin:5px;">Finish Exam!</a></button9>
            <i class="fa fa-hand-o-left" aria-hidden="true"></i> <br>
            <i class="fa fa-hand-o-up" aria-hidden="true"></i>   
        </div>
            </div></div>

        </div>
    </main>
    
    <!--/Main Section-->
<?php
if(isset($_SESSION["exam_start"]))
{
    $date=date("Y-m-d");
    mysqli_query($link,"insert into exam_result(id,username,exam_type,total_question,correct_answer,wrong_answer,ques_attempt,not_attempt,exam_time)values(NULL,'$_SESSION[username]','$_SESSION[exam_category]','$count','$correct','$wrong','$attempt','$notattempt','$date')");


}
if(isset($_SESSION["exam_start"]))
{
    unset($_SESSION["exam_start"]);
    ?>
<script type="text/javascript">


window.location.href=window.location.href;

</script>
    <?php
}
?>
<script type="text/javascript">

history.pushState(null,null,location.href);
window.onpopstate= function(){
    history.go(1);
    };
</script>
    <?php
include "footer.php";
?>