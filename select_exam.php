<?php
session_start();
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
    window.location="login.php";

    </script>
    <?php
}
?>
<?php
include "connection.php";

?>
     <!--header-->
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
p{
    padding-left:15px;
}
.checkbox{
    padding-left:15px;
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
        <h3>Instructions</h3>
        </div>

</header>
     <!--header-->

     <!--/header-->

   

     <!--Main Section-->
    <main>
        <div class="row">
        <div class="col-md-12 col-sm-12  col-xs-4 col-12" style="min-height: 800px;background-color: linen;">
        <h4 style=" text-align:center;">Please read the instructions carefully 
        </h5>
        <h5 style=" text-decoration: underline;padding-left:15px;">General Instructions:
        </h4>
        <br>
        <p>1. After reading instructions click on the below check box then click on button.
        </p>
        <br>
        <p>2. When you enter in question panel timer will be start automatically. The count down timer
         in the top right corner of screen will display the remaining time available for you to complete
          the examination. when the timer reaches zero, the examination will end by itself. you will not
           be required to end or submit your examination.
            </p>
            <br>
           <p>
        3.When you complete the exam before given time then use submit button in bottom-right corner for submit.
        </p>
        <br>
        <p>
        4.After submitting watch your result then click on finish exam.
        </p>
       <br>
        <p>
        5. The question palette displayed on the right side of screen will show the status of each question using one of the following symbols. <br>
           a. you have not visited the question yet. <br>
            b. you have not answered the question. <br>
            c. you have answered the question. <br>
            d. youhave not answered the question,but have marked the question for review.
        </p>
        <br>
        
       <p>
       
      6. Navigating to a question: <br>
        To answer a question, do the following: <br>
         a. click on the question number in the question palette at the right of your screen to go to that numbered question directly. <br>
         b. click on  NEXT and go to the next question. <br>
         c. click on  PREVIOUS and go to the next question.
         </p>
         <br>
         <p>
         7. Answering a question : <br>
         Procedure for answering a multiple choice type question: <br>
            a. To select your answer, click on the button of one of the options. <br>
            b. If you choose the answer it auto save your answer.    <br>
            c. To change your chosen answer, click on the button of another option.
         </p>
         <br>
         <p>
         8. After clicking the Next button on  the last question for a section, you will be automatically
          be taken to to the submit section a dialog box is open if you confirm it submit your result.
         </p>
         <br>
         <p>
         9. You can shuffle between questios anytime during the examination as per your convenience only during the time stipulated.
         </p>
         <br>
         <p style="text-align:center;">Thank you and All the best.
         </p>

         <div class="checkbox">
      <label style="padding-left:15px;"><input type="checkbox" name="checkbox" onchange="showHide(this.checked)" value=""> I have agreed and understood the instructions. I declare that i am responsible for any consequences or inconvenience during the exam. i agreed that in case of not adhering to the instructions, i shall be liable to be debarred from this test and/or to disciplinary action, which may include ban from future tests/eaxminations.
      </label>

    </div>
         
 
    <div class="row" id="hiddenButton" style="display:none;">   

<div class="col-md-12 col-sm-12 col-xs-4 col-12" style="background-color: linen;padding-bottom:10px;">
    <?php
        $res=mysqli_query($link,"select * from exam_category where hide_show");
        while($row=mysqli_fetch_array($res))
        {
            ?>
            <input type="button" class="btn btn-success form-control" id="begin" value="<?php echo $row["category"];?>" style= "margin-top: 10px; margin-left:42%; max-width:150px;min-height:50px; background-color: blue; color:white" onclick="set_exam_type_session(this.value);">
            <?php
        }
    ?>
</div>
</div>
</div>
</div>
    </main>
    </body>
    </html>
    <!--/Main Section-->
    <?php
include "footer.php";
?>
<script type="text/javascript">

function preventBack(){
    window.history.forward();

}
setTimeout("preventBack()",0);
window.onunload = function (){ NULL };

function showHide(checked)
{
    if(checked==true)
    {
        $("#hiddenButton").fadeIn();
    }
    else{
        $("#hiddenButton").fadeOut();
    }
}

    function set_exam_type_session(exam_category)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status== 200){
                window.location = "dashboard.php";
            }
        };
        xmlhttp.open("GET","forajax/set_exam_type_session.php?exam_category=" + exam_category,true);
        xmlhttp.send(null);
            }
            </script>
            