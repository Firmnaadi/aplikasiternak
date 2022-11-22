<?php
session_start();
if (isset($_COOKIE["masuk"])){
    if($_COOKIE["masuk"]=="true"){
        $_SESSION["masuk"]=true;
    }
}
if (isset($_SESSION["masuk"])) {
    header("Location: home.php");
    exit();
}
require "fungsi.php";
$data = show_user();
if (isset($_POST["sub"])) {
    foreach ($data as $temp) {
        if ($temp["user_email"] == $_POST["email"] && $temp["user_password"] == $_POST["password"]) {
            setcookie("masuk", "true", time() + 180);
            setcookie("level", $temp["level"],time()+180);
            //$_SESSION["masuk"] = true;
            header("Location: home.php");
            exit();
        }
    }
    echo "login gagal";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login
  </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    
    <div class="card o-hidden border-0 shadow-lg my-3" style="padding-left: 250px; padding-right: 50px;">
      <div class="card-body p-0">
          <div class="col-xl-9 col-lg-12 col-md-19">
                  <div class="p-5">

   
            <!-- Nested Row within Card Body -->
          </div>
          <h1> Login </h1>
          <div><button type="submit" class="btn btn-primary btn-lg btn-block"><img src="google.png">continue with
              google</button>
            <a href="register.php"></a>
          </div>
          <form action="" method="POST">
            <!-- email -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13">Email</label>
              <input type="text" id="femaill" class="form-control form-control-lg" name="email" />
            </div>
            <!--password-->
            <div class="form-outline mb-4">
              <label class="form-label" for="pass">Password</label>
              <input type="password" id="pas" class="form-control form-control-lg" name="password" />
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>

            </div>
            <button type="submit" class="btn btn-primary mb-4 btn-lg btn-block" name="sub">Sign in</button>
        </div>
      </div>

    </div>

  </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>