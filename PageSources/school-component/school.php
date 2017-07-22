<!DOCTYPE html>
<html lang="en">

    <?php include('../header/header.php'); ?>

<body id="page-top">

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Schools</h1>
                <hr>
                <p>We deliver the best choices for you!</p>
    
<!––  Search START  --!>
<label for="basic-url">Search Schools</label>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">Schools:</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
<!––  Search END  --!>


            </div>
        </div>
    </header>



    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Schools Available: </h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
    <table class="table">
            <thead>
              <tr>
                <th>School</th>
                <th>Address</th>
                <th>Tel. No</th>
              </tr>
            </thead>
            <tbody>
            <?php
$con=mysqli_connect("localhost","root","","coursefinderdb");

// Perform queries 
$fetchSchools = mysqli_query($con,"SELECT * FROM tbl_schools");
while($row = mysqli_fetch_array($fetchSchools)) {

       echo "<tr>
                <td> " . $row['name'] . "</td>
                <td> " . $row['address'] . "</td>
                <td> " . $row['phone'] . "</td>             
              </tr>";
       
    }
mysqli_close($con);
?>

             
            </tbody>
  </table>
        </div>
    </section>


    <!-- <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 -->

</body>

</html>
