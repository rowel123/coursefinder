<!DOCTYPE html>
<html lang="en">

    <?php include('../header/header.php'); ?>

<body id="page-top">

    <header>
     <style type="text/css">
        .schoolBox{

            height: 100px;
            margin: 15px;
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            -webkit-box-shadow: 1px 1px 10px 10px #9C9C9C;
            box-shadow: 1px 1px 5px 5px #9C9C9C;
            padding-top:15px;
        }
        .searchText{
            margin-bottom:100px;
        }
        .awesomeButton{
  -webkit-border-radius: 2;
  -moz-border-radius: 2;
  border-radius: 2px;
  font-family: Georgia;
  color: #ffffff;
  font-size: 20px;
background-color:rgba(0, 0, 0, .03);
  padding: 1px 5px 1px 5px;
  text-decoration: none;
        }
        .awesomeButton:hover{
background-color:rgba(0, 0, 0, 0.2);
  text-decoration: none;
        }
     </style>
        <div class="header-content">
            <div class="header-content-inner">
  
    

            <?php
$con=mysqli_connect("localhost","root","","coursefinderdb");
  $max = max($_SESSION['SCIENCE'][0], $_SESSION['ENTREPRENUERSHIP'][0], $_SESSION['CLERICAL'][0], 
    $_SESSION['Verbal'][0], $_SESSION['Math'][0]);

$c1 =$_SESSION['SCIENCE'][0];
$c2= $_SESSION['ENTREPRENUERSHIP'][0];
$c3 =  $_SESSION['CLERICAL'][0];
$c4 = $_SESSION['Verbal'][0];
$c5 = $_SESSION['MATH'][0];
  ?>



	
      <div> <?php  
      $some = array(intval($c1),intval($c2),intval($c3),intval($c4),intval($c5));
      $maxs = array_search(max($some),$some);    


            if($maxs==0){
              $cat ="SCIENCE";
            }else if($maxs==1){
            $cat ="ENTREPRENUERSHIP";
            }else if($maxs==2){
            $cat= "CLERICAL";  
            }else if($maxs==3){
            $cat = "VERBAL";  
            }else if($maxs==4){
              $cat = "MATH";
            }  
         
          $fetchArray= mysqli_query($con,"SELECT * FROM tbl_category
             where category_name='$cat'");

  echo '              <h3 id="homeHeading">You are great in </h3><h1>' . $cat .'</h1>
                <hr>
                <p>BEST COURSES FOR YOU: </p>';

    while($row = mysqli_fetch_array($fetchArray)) {
          echo "<h3>" . $row['subjects'] . "</h3>";
 
      }
          ?>  <br>

   
  
     </div>     




<?php    
       
mysqli_close($con);
?>
        </div>
        </div>


    </header>




</body>

</html>
