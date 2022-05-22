<?php
session_start();
    $rid=$_SESSION['rid']; 
    $_SESSION['logout']=33;
    include '../database_driver/db.php';
    // $res=mysqli_query($con,"select * from retail where rid='$rid'");
    // $far=mysqli_fetch_assoc($res);
    // $district=$far['district'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retailer Home</title>
    <link rel="icon" href="../assets/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
            <a  href="../SignoutHandler/lsignout.php"><button type="button" class="btn btn-danger btn-lg">
                <span class="fa fa-power-off"></span> Sign Out
            </button></a>
        </div>
    </nav>

    <div class="container-fluid">
        <br>
        <div class="row">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr96qM5pnf-Sjyevi5CsgBEPPsVK07VBLQqA&usqp=CAU"  style="width: -webkit-fill-available;height:200px;
" alt="banner">
            <div class="col-md-2 col-sm-12">
                <div class="card">
                    <div class="text-center"><button type="button" class="btn btn-info btn-md" id="show">
                        <span class="fa fa-plus"></span> Add Elements</button></div><br>                
                <div class="text-center"><button type="button" class="btn btn-info btn-md" id="show">
                        <span class="fa fa-eye"></span> View List</button></div><br>                      
                <div class="text-center"><button type="button" class="btn btn-info btn-md" id="show">
                        <span class="fa fa-sync" aria-hidden="true"></span> Update List</button></div><br>
                <div class="text-center"><button type="button" class="btn btn-info btn-md" id="show">
                        <span class="fa fa-user" aria-hidden="true"></span> Add Farmer</button></div>
                </div>                     
                       <!--  <button id="hide">Hide</button>
                        <button >Show</button> -->
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">Booking Requests</div>
                    <div class="card-body text-center" id="farmerContent">
                        <form method="POST" action="">
                            <h2 class="text-center">Add Store details</h2><button type="button" class="close" data-dismiss="modal">×</button>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="crop">Item</label>
                                                <select class="form-control" name="crop" id="crop">
                                                    <option>Tractor</option>
                                                    <option>Pesticide</option>
                                                    <option>Fertilizer</option>
                                                    <option>Sickel</option>
                                                    <option>others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="area">Quantity:</label>
                                                <input type="number" class="form-control" name="quantity" id="quantity">
                                            </div>
                                            <button type="submit" class="btn btn-success" id="hide">Request</button>
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
                    <div class="card-header text-center">Farmers Nearby</div>
                    <div class="card-body text-center">
                        <table class="table table-success" style="background-color: #5cb85c;color: white;">
                                    <thead style="font-size: 12px;">
                                    <tr>
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>District</th>
                                    </tr>
                                    </thead>
                        <?php
                             $r=mysqli_query($con,"select * from fredg");
                             while($arr1 = $r->fetch_assoc()){
                                ?>
                                <td><img src="<?php echo $arr1['pic']; ?>"style="width: 40px;"></td>
                                <td><?php echo $arr1['name']; ?> </td>
                                <td><?php echo $arr1['city']; ?> </td>
                                <td><?php echo $arr1['district']; ?> </td>
                                <   
                                <?php
                             }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
              <p>+918887563233</p>
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
              <a href="arshitatyagi159.@gmail.com" style="color: white;">arshitatyagi159@gmail.com</a>
            </li>
            <li>
              <a href="shivangitripathi7381@gmail.com" style="color: white;">shivangitripathi7381@gmail.com</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">&copy; Re_v_farm:Revolution we bring to Farming
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>