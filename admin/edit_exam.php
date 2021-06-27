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
$res=mysqli_query($link,"select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $exam_category=$row["category"];
    $exam_time=$row["exam_time_in_minutes"];
    $exam_questions=$row["exam_questions"];
    $exam_show=$row["hide_show"];

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

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Exam</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                       
                    </div>
                </div>
            </div>
        </div>
<form action="" name="form1" method="POST">
    <div class="card-body">
        <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Edit Exam Categories</strong>
                        </div>
                    <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label">New Exam Category</label>
                            <input type="text" name="examname" placeholder="Add Exam Category" class="form-control" value="<?php echo $exam_category;?>">
                        </div>
                        <div class="form-group"><label for="vat" class=" form-control-label">Exam Times In Minutes</label>
                            <input type="text" name="examtime" placeholder="Exam Time In Minutes" class="form-control" value="<?php echo $exam_time;?>" >
                        </div>
                        <div class="form-group"><label for="vat" class=" form-control-label">NO. Of Questions</label>
                            <input type="text" name="examques" placeholder="NO Of Questions" class="form-control" value="<?php echo $exam_questions;?>" >
                        </div>
                        
                        <div class="form-group"><label for="vat" class=" form-control-label">Show/Hide : 1 for show, 0 for hide</label>
                            <input type="text" name="examshow" placeholder="1 for show, 0 for hide" class="form-control" value="<?php echo $exam_show;?>" >
                        </div>
                        </div>

                                       
                        <div class="form-group">
                            <input type="submit" name="submit1" value="Update Exam" class="btn btn-success">
                        </div>         
      
                                <!-- Right Panel -->
                    </div>            

   
        </div>
    </div>
                  
                    </form> <!-- add exam time here  -->

<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"update exam_category set category='$_POST[examname]',exam_time_in_minutes='$_POST[examtime]',exam_questions='$_POST[examques]',hide_show='$_POST[examshow]' where id=$id") or die(mysqli_error($link));
    ?>
    <script type="text/javascript">
    
    window.location="exam_category.php";
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
