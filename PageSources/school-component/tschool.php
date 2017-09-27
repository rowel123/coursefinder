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
@media (min-width: 991px){
header .header-content {
    position: absolute;
    top: 40%
}
}
  th{
    text-align: center;
  }
     </style>
<?php
$con=mysqli_connect("localhost","root","","coursefinderdb");
   $school_id = $_GET['id'];
      $school_name = $_GET['name']
  ?> 
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php echo $school_name;?></h1>
                <hr>
                <p>We deliver the best choices for you!</p>
    
<!––  Search START  --!>


 <div  class="row" style="width:100%;">

<!––  Search END  --!>






            <table width="100%" class="table">
            <tr>
             <th> Course </th>
             <th> Alias</th>
             <th> Priority </th>
            </tr>
                 <?php $fetchCourses = mysqli_query($con,"SELECT * FROM tbl_courses where school_id='$school_id'"); 
                        while($row2 = mysqli_fetch_array($fetchCourses)) {
                     ?>
                     <tr> 
                      <td><a href="school-assesment.php">  <?php echo $row2['name']; ?> </a> </td>
                      <td>  <?php echo $row2['name_alias']; ?>  </td>
                          <td>  <?php echo $row2['priority']; ?>  </td>
                      </tr> 
                    
                
     
                    <?php  } ?>
          
            </table>

        </div>
        </div>
</div>

    </header>




</body>

</html>
