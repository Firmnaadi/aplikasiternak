<?php
require('fungsi.php');

// if ($_SERVER['REQUEST_METHOD'] == 'POST') :
//     $email = $_POST['txt_email'];
//     $pass = $_POST['txt_pass'];
//     $name = $_POST['txt_name'];
//     if ($obj->insertData($email, $pass, $name)) :
//         echo '<div class="alert alert-success">Data berhasil disimpan</div>';
//     else :
//         echo '<div class="alert alert-danger">Data gagal disimpan</div>';
//     endif;
// endif;

$register = new register();

if(isset($_POST['sub'])){
    if($register->execute($_POST) > 0){
        header("Location: login.php");
    }
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

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-3" style="padding-left: 250px; padding-right: 50px;">
            <div class="card-body p-0">
                <div class="col-xl-9 col-md-19">
                    <div class="p-5">
                        <div>
                            <h1 class="h4 text-gray-900 mb-4">Register</h1>
                            <form action="" method="POST">
                                <input type="hidden" value="1" name="id">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example13">Full name</label>
                                    <input type="text" id="Nama" class="form-control form-control-lg" name="txt_nama" require />
                                </div>
                                <!--Nomor HP-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example13">Email/Phone nummber</label>
                                    <input type="text" id="femaill" class="form-control form-control-lg" name="email" require />
                                </div>
                                <!--pasword--->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example13">Password</label>
                                    <input type="password" id="pass" class="form-control form-control-lg" name="txt_pass" require />
                                </div>
                                <!---Login-->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                    <label class="form-check-label" for="form1Example3"> I accept the terms and privacy policy </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Sign Up</button>
                            </form>

                        </div>
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