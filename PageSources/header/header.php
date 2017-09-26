<head>
    <?php
session_start();

$con=mysqli_connect("localhost","root","","coursefinderdb");
  
     if(isset($_POST['login'])){
        $username = $_POST['username'];
         $password = $_POST['password'];
         $sql = mysqli_query($con,"SELECT * FROM tbl_user where username='$username' AND password='$password'");

          if(mysqli_num_rows($sql)>0) {
                 while($row=mysqli_fetch_array($sql)){
                       $_SESSION['school_id']=$row['school_id'];
                       $_SESSION['school_name'] = $row['school_name'];
                 }
              $_SESSION['logged']=1;
               header("Location: admin-index.php");
                }else{
                 $_SESSION['logged']=0;   
                  echo "<script> alert('Invalid School Account') </script>";
                } 
    }

         if(isset($_POST['schoollogin'])){
        $username = $_POST['username'];
         $password = $_POST['password'];
         $sql = mysqli_query($con,"SELECT * FROM tbl_schools where username='$username' AND password='$password'");

          if(mysqli_num_rows($sql)>0) {
                 while($row=mysqli_fetch_array($sql)){
                       $_SESSION['school_id']=$row['school_id'];
                       $_SESSION['school_name'] = $row['school_name'];
                 }
              $_SESSION['logged']=2;
               header("Location: school-index.php");
                }else{
                 $_SESSION['logged']=0;   
                  echo "<script> alert('Invalid School Account') </script>";
                } 
    }
     ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Zambales Course Finder</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../../css/creative.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


      <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
     <script src="../../js/dropdownSelect.js"></script>
    <script src="../../js/creative.min.js"></script>
<style>
a{
    color:#00DD00;
}    
</style>

</head>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="../admin/admin-login.php">Zambales Course Finder</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="../../index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../../index.php#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../school-component/school.php">Schools</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../courses-component/courses.php">Courses</a>
                    </li>
					<li>
                        <a class="page-scroll" href="../assessment-component/assessment.php">Assessment</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../../index.php#contact">Contact Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../school-component/school-sign-in.php">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

    </nav>
