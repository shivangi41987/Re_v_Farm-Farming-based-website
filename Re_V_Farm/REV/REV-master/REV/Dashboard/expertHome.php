<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expert Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
            <button type="button" class="btn btn-danger btn-lg">
                <span class="fa fa-power-off"></span> Sign Out
            </button>
        </div>
    </nav>

    <!-- home start -->
    <div class="container-fluid">

        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-4 panel panel-body panel-default">
                <br>
                <div class="upload-image">
                    <h3>Upload Land Image</h3>
                    <div class="upload-image-preview"></div>
                    <input class="" type="file" name="fileToUpload" id="fileToUpload">  
                    </div>
            </div>
            <!-- <div class="col-md-2" id=""></div> -->
            <div class="col-md-6" id="formbox">

            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="uid" name="uid" placeholder="Aadhar/Ration card/Green Card" required="required">
              </div>
               <div class="form-group">
                <input type="text" class="form-control" id="city" name="city" placeholder="City" required="required">
              </div>
               <div class="form-group">
                <input type="text" class="form-control" id="district" name="district" placeholder="District" required="required">
              </div>              
              <div class="form-group">
                <input type="checkbox" name="terms" class="control-label"> I agree to the <a href="terms.html"><u>Terms and Conditions.</u></a>
            </div>
            <input class="btn btn-primary" type="submit" name="register" value="Submit" placeholder="Submit">
            </div>
        </form>

    </div>
</body>
</html>