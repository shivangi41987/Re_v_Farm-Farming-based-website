<?php
session_start();
include '../database_driver/db.php';
$lid=$_SESSION['lid'];
$_SESSION['lid']=$lid;
$_SESSION['logout']=11;
$res=mysqli_query($con,"select * from lredg where lid='$lid'");
$far=mysqli_fetch_assoc($res);
$district=$far['district'];
$lr=mysqli_query($con,"select * from fredg where district='$district'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Land Lord</title>
    <link rel="icon" href="../assets/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#farmerContent").hide();
  $("#hide").click(function(){
    $("#farmerContent").hide();
  });
  $("#show").click(function(){
    $("#farmerContent").show();
  });
});
</script>
    <script src="../assets/js/landlord.js"></script>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" href="#"><i class="fas fa-tractor"></i> Re_v_farm</a>
        <div class="my-2 my-lg-0" id="myProfileBtn">
            <button type="button" class="btn btn-outline-light btn-sm">
                <span class="fa fa-user"></span></button>
        </div>
        <div class="my-2 my-lg-0" id="myNotificationBtn">
            <button type="button" class="btn btn-outline-light btn-sm">
                <span class="fa fa-bell"></span></button>
        </div>
        <div class="my-2 my-lg-0" id="mySignoutBtn">
            <a  href="../SignoutHandler/lsignout.php"><button type="button" class="btn btn-danger btn-sm">
                <span class="fa fa-power-off"></span> Sign Out
            </button></a>
        </div>
    </nav>

    <!-- Body starts -->
    <div class="row">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr96qM5pnf-Sjyevi5CsgBEPPsVK07VBLQqA&usqp=CAU"  style="width: -webkit-fill-available;height: 200px;" alt="banner">
  </div>
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="text-center"><button type="button" class="btn btn-info btn-md" id="show">
                        <span class="fa fa-plus"></span>Add</button> 
                                             
                       <!--  <button id="hide">Hide</button>
                        <button >Show</button> -->
                </div>
                <br>
                        <img src="https://image.isu.pub/110110103442-bb8b1c429ea8430e88e285d0060a0385/jpg/page_1_thumb_large.jpg" style="height: 200px;width: inherit;"> 
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header text-center" style="background-color: #5cb85c;">Booking Requests</div>
                    <div class="card-body text-center" id="farmerContent">
                        <form method="POST" action="addland.php" enctype="multipart/form-data">
                            <h2 class="text-center">Add Land</h2><button type="button" class="close" data-dismiss="modal">×</button>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="card">
                                        <div class="upload-image">
                                                    <h3>Upload Image</h3>
                                                    <div class="upload-image-preview"></div>
                                                    <input class="" type="file" name="fileToUpload" id="fileToUpload">  
                                        </div>  
                                        <div class="card-body text-center" id="cost"></div>
                                    </div>
                                    <br>
                                    <div class="text-right">
                                <button type="button" class="btn btn-info" onclick="calculate()">Check</button>
                                <input type="submit" class="btn btn-success" name="submit" value="Submit" placeholder="Submit" id="hide">
                            </div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="area">Area:</label>
                                                <input type="number" class="form-control" name="area" id="area">
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price per acer:</label>
                                                <input type="number" class="form-control" name="price" id="price">
                                            </div>
                                            <div class="form-group">
                                                <label for="month">Select month:</label>
                                                <select class="form-control" name="month" id="month">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                                <label for="crop">Crop Type:</label>
                                                <select class="form-control" name="crop" id="crop">
                                                    <option>Rice</option>
                                                    <option>Wheat</option>
                                                    <option>Maze</option>
                                                    <option>Jowhar</option>
                                                    <option>Bajra</option>
                                                </select>
                                                <label for="year">Select year:</label>
                                                <select class="form-control" name="year" id="year">
                                                    <option>2019</option>
                                                    <option>2020</option>
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                    <option>2023</option>
                                                    <option>2024</option>
                                                    <option>2025</option>
                                                    <option>2026</option>
                                                    <option>2027</option>
                                                    <option>2028</option>
                                                    <option>2029</option>
                                                </select>
                                            </div>
                                           <!--  <div class="form-group">
                                                <label for="des">Description:</label>
                                                <textarea class="form-control" rows="5" name="des" id="des"></textarea>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header text-center" style="background-color: #5cb85c;"><b>Farmers Nearby<b></div>
                    <div class="card-body text-center" style="background-color: #dee2e6;">
                        <?php
                                 if($arr1=mysqli_fetch_assoc($lr))
                            {
                                ?>
                                <table class="table table-success" style="background-color: #5cb85c;color: white;">
                                    <thead style="font-size: 12px;">
                                    <tr>
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>District</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td><img src="<?php echo $arr1['pic']; ?>"style="width: 40px;"></td>
                                        <td><?php echo $arr1['name']; ?> </td>
                                        <td><?php echo $arr1['city']; ?> </td>
                                        <td><?php echo $arr1['district']; ?> </td>
                                    </tr>
                                </table>
                                <?php
                            // echo $arr1['name'];      
                            // echo "string"; 
                            }   
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="continer-fluid">
    <br>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body text-center" id="">
                        <h2>Current Farmer Statistics</h2>
                        <p>Farmer's report on your land</p>            
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Land Area</th>
                                <th>Time</th>
                                <th>Cost</th>
                                <th>Method of payment</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Krushna</td>
                                <td>15 acers</td>
                                <td>9 months</td>
                                <td>15,000</td>
                                <td>Capital</td>
                            </tr>
                            <tr>
                                <td>Sai Kiran</td>
                                <td>13 acers</td>
                                <td>12 months</td>
                                <td>18,458</td>
                                <td>40% of revenue</td>
                            </tr>
                            <tr>
                                <td>Kshitij</td>
                                <td>9 acers</td>
                                <td>10 months</td>
                                <td>16,229</td>
                                <td>10%revenue + capital</td>
                                <!-- <td>5 months</td>
                                <td>10000</td>
                                <td>Debit card</td> -->
                            </tr>
                            <tr>
                                <td>Sai Kiran</td>
                                <td>12 acers</td>
                                <td>8 months</td>
                                <td>11000</td>
                                <td>Cash</td>
                            </tr>
                            <tr>
                                <td>Suraj</td>
                                <td>8 acers</td>
                                <td>6 months</td>
                                <td>12500</td>
                                <td>Debit card</td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Body ended -->

    <!-- Footer -->
  <footer class="page-footer font-small blue pt-4 container-fluid" style="
   left: 0;
   bottom: 0;
   background-color: #5cb85c;
   color: white;
   background-image: url('http://upagripardarshi.gov.in/images/bg-footer.jpg');
   text-align: center;" id="about">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <!-- <p>Here we can use rows and columns here to organize your footer content.</p> -->

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Phone no: </h5>

          <ul class="list-unstyled">
            <li>
              <p>+917809597456</p>
            </li>
            <li>
              <p>+917075497456</p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Mail us</h5>

          <ul class="list-unstyled">
            <li>
              <a href="yashineha2000@gmail.com" style="color: white;">yashineha2000@gmail.com</a>
            </li>
            <li>
              <a href="shivanhitrpathi7381.g@gmail.com" style="color: white;">shivangitripathi7381@gmail.com</a>
            </li>
            <li>
              <a href="arshitatyagi159@gmail.com" style="color: white;">arshitatyagi159@gmail.com</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">&copy; Re_v_farm:Revolution we bring to farming.
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>

</html>