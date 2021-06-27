
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

     <!--/header-->

   
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
</header>
<!--Main Section-->
<!---Question panel--->
    <main>
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-4 col-12" style="min-height: 600px; background-color: linen;">
                    <br>
                    <div class="row"style="background-color:linen;">
                        <br>
                            <div class="col-md-12 col-sm-12 col-12" style="padding-right:40px; font-weight:bold;" >
                                <div id="total_que" style="float:right;">0</div>
                                <div style="float:right">/</div>
                                <div id="current_que" style="float:right;">0</div>
                            </div>  
                            <div class="row" style="max-width:100%;">
                                <div class="col-md-12 col-sm-12  col-12" style="min-height:600px;width:1050px;margin-left:50px;  background-color: white;" id="load_questions">
                                </div>
                            </div>
                            <div class="row" style="padding-left:40%;padding-top:10px; padding-bottom:10px;">
                                <div class="col-md-12 col-sm-12 col-12" >
                                    <input type="button" class="btn btn-warning" value="Previous" onclick="load_previous();">&nbsp;
                        
                                    <input type="button" class="btn btn-success" value="Next" onclick="load_next();">
                                </div>
                            </div>
                    </div>
            </div>
<!---Right side Question panel--->
            <div class="col-md-3 col-sm-3 col-12" style="background-color:#45ccb8;max-width:372px;">
            <div class="row">
                          
                                <p Style="margin-top:20px;font-weight:bold;margin-left:20px">Question No.</p>
                                
                           

                         </div>
                <div class="row" style="margin-top:50px;">
               
                <input type="button" onclick="load_1();" value="01" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_2();" value="02" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_3();" value="03" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_4();" value="04" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_5();" value="05" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_6();" value="05" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_7();" value="07" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_8();" value="08" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_9();" value="09" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_10();" value="10" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_11();" value="11" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_12();" value="12" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_13();" value="13" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_14();" value="14" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_15();" value="15" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_16();" value="16" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_17();" value="17" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_18();" value="18" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_19();" value="19" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_20();" value="20" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_21();" value="21" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_22();" value="22" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_23();" value="23" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_24();" value="24" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_25();" value="25" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_26();" value="26" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_27();" value="27" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_28();" value="28" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_29();" value="29" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
                                <input type="button" onclick="load_30();" value="30" class="btn btn-primary" style="font-size:22px;background-color:white;color:black; margin:10px;">
               
                </div>
                <div class="row" style="margin-left:40%;margin-top:150px;">
                    <input type="button" class="btn btn-primary" value="Submit" onclick="load_submit();">
                </div>
            </div>
        </div>
    </main>
    <!---end editing--->
    <!--/Main Section-->
    <script type="text/javascript">


history.pushState(null,null,location.href);
window.onpopstate= function(){
    history.go(1);
    };

        function load_total_que()
        {
            var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status== 200){
                document.getElementById("total_que").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","forajax/load_total_que.php",true);
        xmlhttp.send(null);
        }

        var questionno="1";
        load_questions(questionno);
        

///** questions load function */        

        function load_questions(questionno)
        {
            document.getElementById("current_que").innerHTML=questionno;
            var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status== 200){
                if(xmlhttp.responseText=="over")
                {
                   if(confirm("Submit Your Result!")){
                       window.location="result.php";
                   }
                 
                }
                else{
                    document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                    load_total_que();
                }
            }
        };
        xmlhttp.open("GET","forajax/load_questions.php?questionno="+ questionno,true);
        xmlhttp.send(null);
        }

///** radio button ans save in session function */
function radioclick(radiovalue,questionno)
        {
            var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status== 200){
                
            }
        };
        xmlhttp.open("GET","forajax/save_answer_in_session.php?questionno="+ questionno +"&value1="+radiovalue,true);
        xmlhttp.send(null);
        }


///** previous button function */
        function load_previous()
        {
            if(questionno=="1")
            {
                load_questions(questionno);
            }
            else{
                questionno=eval(questionno)-1;
                load_questions(questionno);
            }
        }

///** next button function */
        function load_next()
        {
            
                questionno=eval(questionno)+1;
                load_questions(questionno);
            
        }
        function load_submit()
        {
            
            window.location="result.php";
        }
        function load_1()
        {
            
            questionno="1";
            load_questions(questionno);
        }
        function load_2()
        {
            
            questionno="2";
            load_questions(questionno);
        }
        function load_3()
        {
            
            questionno="3";
            load_questions(questionno);
        }
        function load_4()
        {
            
            questionno="4";
            load_questions(questionno);
        }
        function load_5()
        {
            
            questionno="5";
            load_questions(questionno);
        }
        function load_6()
        {
            
            questionno="6";
            load_questions(questionno);
        }
        function load_7()
        {
            
            questionno="7";
            load_questions(questionno);
        }
        function load_8()
        {
            
            questionno="8";
            load_questions(questionno);
        }
        function load_9()
        {
            
            questionno="9";
            load_questions(questionno);
        }
        function load_10()
        {
            
            questionno="10";
            load_questions(questionno);
        }
        function load_11()
        {
            
            questionno="11";
            load_questions(questionno);
        }
        function load_12()
        {
            
            questionno="12";
            load_questions(questionno);
        }
        function load_13()
        {
            
            questionno="13";
            load_questions(questionno);
        }
        function load_14()
        {
            
            questionno="14";
            load_questions(questionno);
        }
        function load_15()
        {
            
            questionno="15";
            load_questions(questionno);
        }
        function load_16()
        {
            
            questionno="16";
            load_questions(questionno);
        }
        function load_17()
        {
            
            questionno="17";
            load_questions(questionno);
        }
        function load_18()
        {
            
            questionno="18";
            load_questions(questionno);
        }
        function load_19()
        {
            
            questionno="19";
            load_questions(questionno);
        }
        function load_20()
        {
            
            questionno="20";
            load_questions(questionno);
        }
        function load_21()
        {
            
            questionno="21";
            load_questions(questionno);
        }
        function load_22()
        {
            
            questionno="22";
            load_questions(questionno);
        }
        function load_23()
        {
            
            questionno="23";
            load_questions(questionno);
        }
        function load_24()
        {
            
            questionno="24";
            load_questions(questionno);
        }
        function load_25()
        {
            
            questionno="25";
            load_questions(questionno);
        }
        function load_26()
        {
            
            questionno="26";
            load_questions(questionno);
        }
        function load_27()
        {
            
            questionno="27";
            load_questions(questionno);
        }
        function load_28()
        {
            
            questionno="28";
            load_questions(questionno);
        }
        function load_29()
        {
            
            questionno="29";
            load_questions(questionno);
        }
        function load_30()
        {
            
            questionno="30";
            load_questions(questionno);
        }
     
        
        
        
        
        
        


///** timer function */
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
    <script type="text/javascript">
function preventBack(){
    window.history.forward();

}
setTimeout("preventBack()",0);
window.onunload = function (){ NULL };
</script>
<?php
    include "footer.php";
?>