<?php
session_start();
include "../connection.php";
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
    window.location="index.php";
</script>
    <?php
    }

$id=$_GET["id"];
$exam_category='';
$res=mysqli_query($link,"select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $exam_category=$row["category"];
  
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" ><h3>ADMIN PANEL</h3></a>
               
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="main.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="exam_category.php"> <i class="menu-icon fa fa-dashboard"></i>Add & Edit Exams </a>
                    </li>
                    <li>
                        <a href="add_edit_exam_ques.php"> <i class="menu-icon fa fa-dashboard"></i>Add & Edit Questions </a>
                    </li>
                    <li>
                        <a href="logout.php"> <i class="menu-icon fa fa-dashboard"></i>Log Out </a>
                    </li>
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                   
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                           
                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Questions Inside <?php echo "<font color='red'>".$exam_category."</font>";?></h1>
                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <form action="" name="form1" method="POST" enctype="multipart/form-data">
                            <div class="card">
                                    <div class="card-header"><strong>Add New Questions </strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Questions</label>
                                        <input type="text" name="question" placeholder="Add Question" class="form-control">
                                    </div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Option 1</label>
                                        <input type="text" name="opt1" placeholder="Add Option 1" class="form-control">
                                    </div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Option 2</label>
                                        <input type="text" name="opt2" placeholder="Add Option 2" class="form-control">
                                    </div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Option 3</label>
                                        <input type="text" name="opt3" placeholder="Add Option 3" class="form-control">
                                    </div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Option 4</label>
                                        <input type="text" name="opt4" placeholder="Add Option 4" class="form-control">
                                    </div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Answer</label>
                                        <input type="text" name="answer" placeholder="Add Answer" class="form-control" >
                                    </div>
                                       
                                    <div class="form-group">
                                        <input type="submit" name="submit1" value="Add Question" class="btn btn-success">
                                    </div>         
                                </div>      
                            </div>
                    </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card">
                                        <div class="card-header"><strong>Add New Questions With Images</strong></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">Questions</label>
                                            <input type="text" name="fquestion" placeholder="Add Question" class="form-control">
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Option 1</label>
                                            <input type="file" name="fopt1"  class="form-control" style="padding-bottom:35px;" >
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Option 2</label>
                                            <input type="file" name="fopt2"  class="form-control" style="padding-bottom:35px;" >
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Option 3</label>
                                            <input type="file" name="fopt3"  class="form-control" style="padding-bottom:35px;" >
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Option 4</label>
                                            <input type="file" name="fopt4"  class="form-control" style="padding-bottom:35px;" >
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label" >Answer</label>
                                            <input type="file" name="fanswer"  class="form-control"style="padding-bottom:35px;" >
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="submit" name="submit2" value="Add Question" class="btn btn-success">
                                        </div>         
                                    </div>      
                                </div>
                            </div>
                    </form>
                </div>         
            </div>      
        </div>
    </div>
<!---view & edit questions-->                    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
               
                <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Questions</th>
                        <th>Option1</th>
                        <th>Option2</th>
                        <th>Option3</th>
                        <th>Option4</th>
                        <th>Answers</th>
                        <th>Edit</th>
                        <th>Delete</th> 
                    </tr>
                
                <?php
                    $res=mysqli_query($link,"select * from questions where category='$exam_category' order by question_no asc") or die(mysqli_error($link));
                    while($row=mysqli_fetch_array($res))
                     {
                         echo "<tr>";
                         echo "<td>"; echo $row["question_no"]; echo "</td>";
                         echo "<td>"; echo $row["question"]; echo "</td>";
                         echo "<td>"; 
                         if(strpos($row["opt1"],'opt_images/')!==false)
                         {
                            ?>
                            <img src="<?php echo $row["opt1"]; ?>" height="50" width="50">
                            <?php
                         } 
                         else
                         {
                            echo $row["opt1"];
                         }
                echo "</td>";
                echo "<td>"; 
                          if(strpos($row["opt2"],'../opt_images/')!==false)
                          {
                             ?>
                             <img src="<?php echo $row["opt2"]; ?>" height="50" width="50">
                             <?php
                          } 
                          else
                          {
                             echo $row["opt2"];
                          }
                echo "</td>";
                echo "<td>"; 
                           if(strpos($row["opt3"],'../opt_images/')!==false)
                           {
                              ?>
                              <img src="<?php echo $row["opt3"]; ?>" height="50" width="50">
                              <?php
                           } 
                           else
                           {
                              echo $row["opt3"];
                           }
                echo "</td>";
                echo "<td>"; 
                            if(strpos($row["opt4"],'../opt_images/')!==false)
                            {
                               ?>
                               <img src="<?php echo $row["opt4"]; ?>" height="50" width="50">
                               <?php
                            } 
                            else
                            {
                               echo $row["opt4"];
                            }
                echo "</td>";
                echo "<td>"; 
                             if(strpos($row["answer"],'../opt_images/')!==false)
                             {
                                ?>
                                <img src="<?php echo $row["answer"]; ?>" height="50" width="50">
                                <?php
                             } 
                             else
                             {
                                echo $row["answer"];
                             }
                echo "</td>";
                echo "<td>";
                            if(strpos($row["answer"],'../opt_images/')!==false)
                            {
                            ?>
                            <a href="edit_option_images.php?id=<?php echo $row["id"];?>&id1=<?php echo $id;?>">Edit</a>
                         <?php
                            } 
                            else
                            {
                                ?>
                            <a href="edit_option.php?id=<?php echo $row["id"];?>&id1=<?php echo $id;?>">Edit</a>
                           
                            <?php
                            }
                echo"</td>";
                echo "<td>";
                             ?>
                             <a href="delete_option.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id;?>">Delete</a>
                             <?php
                echo"</td>";
                echo "</tr>";
    }
                    ?>
                    </table>
                </div>         
            </div>      
        </div>
    </div>   

<!---submit 1-->

<?php
if(isset($_POST["submit1"]))
{
$loop=0;
$count=0;


   $res=mysqli_query($link,"select * from questions where category='$exam_category' order by id asc") or die(mysqli_error($link));
    $count=mysqli_num_rows($res);
    if($count==0)
    {

    }
    else{
        while($row=mysqli_fetch_array($res))
         {
             $loop=$loop+1;
             mysqli_query($link,"update questions set question_no='$loop' where id=$row[id]");
         }
    }
    $loop=$loop+1;
    mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category')") or die(mysqli_error($link));
    ?>
    <script type="text/javascript">
    alert("Question Added Successfully");
    window.location.href=window.location.href;
</script>
    <?php

}
?>
<!---submit 2-->
<?php
if(isset($_POST["submit2"]))
{
$loop=0;
$count=0;


   $res=mysqli_query($link,"select * from questions where category='$exam_category' order by id asc") or die(mysqli_error($link));
    $count=mysqli_num_rows($res);
    if($count==0)
    {

    }
    else{
        while($row=mysqli_fetch_array($res))
         {
             $loop=$loop+1;
             mysqli_query($link,"update questions set question_no='$loop' where id=$row[id]");
         }
    }
    $loop=$loop+1;
$tm=md5(time());

$fnml=$_FILES["fopt1"]["name"];
$dst1="../opt_images/".$tm.$fnml;
$dst_db1="../opt_images/".$tm.$fnml;
move_uploaded_file($_FILES["fopt1"]["tmp_name"],$dst1);

$fnm2=$_FILES["fopt2"]["name"];
$dst2="../opt_images/".$tm.$fnm2;
$dst_db2="../opt_images/".$tm.$fnm2;
move_uploaded_file($_FILES["fopt2"]["tmp_name"],$dst2);

$fnm3=$_FILES["fopt3"]["name"];
$dst3="../opt_images/".$tm.$fnm3;
$dst_db3="../opt_images/".$tm.$fnm3;
move_uploaded_file($_FILES["fopt3"]["tmp_name"],$dst3);

$fnm4=$_FILES["fopt4"]["name"];
$dst4="../opt_images/".$tm.$fnm4;
$dst_db4="../opt_images/".$tm.$fnm4;
move_uploaded_file($_FILES["fopt4"]["tmp_name"],$dst4);

$fnm5=$_FILES["fanswer"]["name"];
$dst5="../opt_images/".$tm.$fnm5;
$dst_db5="../opt_images/".$tm.$fnm5;
move_uploaded_file($_FILES["fanswer"]["tmp_name"],$dst5);

    mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[fquestion]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_category')") or die(mysqli_error($link));
    ?>
    <script type="text/javascript">
    alert("Question Added Successfully");
    window.location.href=window.location.href;
</script>
    <?php

}
?>
      


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
