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
        <div class="header-content" style="top:250px;">
            <div class="header-content-inner">
                <h1 id="homeHeading">Assessment</h1>
                <hr>
                <p>Please answer the following: </p>
    

            <?php
$con=mysqli_connect("localhost","root","","coursefinderdb");

  ?>



	
      <div> <?php echo $_GET['answer']; ?>  <br>

   
  
     </div>     




<?php    
       
mysqli_close($con);
?>
        </div>
        </div>


    </header>




</body>

</html>
