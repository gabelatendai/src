
<?php

include "rb.php";

//$conn = mysqli_connect("localhost", "root", "", "src_db");

R::setup('mysql:host=localhost;dbname=src_db', 'root', ''); //for both mysql or mariaDB


if (isset($_POST['login'])) {
    $_SESSION['last_login_timestamp'] = time();

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $activity = "Log in";
    $Time = time();
    /*
    ----------------------------    gabela ---------------------------------------------*/

    $init = R::findOne('login', 'email = ? AND password = ?', [$email, $password]);

    if ($init == null) {
        //   $message = "invalid details";
        print ("<script>window.alert('invalid details')</script>");
print ("<script>window.location.assign('index.php')</script>");


} else {
session_start();
$_SESSION['role'] = $init->role;
$_SESSION['id'] = $init->email;
$_SESSION['province'] = $init->province;
$_SESSION['user_id'] = $init->id;



echo '
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="d-flex align-items-center justify-content-start">
        <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
        <span><strong> </strong>login successfull !!!</span>
    </div><!-- d-flex -->
</div>';

        if (@$_SESSION['role'] == 'Admin') {
echo '
<h2 align="center">
  <meta content="2;app/admin/index.php" http-equiv="refresh"/>
</h2> ';

}
elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'Masheast'){
    echo '
<h2 align="center">
  <meta content="2;app/masheast/index.php" http-equiv="refresh"/>
</h2> ';


        }
elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'MashWest'){
    echo '
<h2 align="center">
  <meta content="2;app/mashwest/index.php" http-equiv="refresh"/>
</h2> ';

        }
        elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'Harare'){
            echo '
<h2 align="center">
  <meta content="2;app/harare/index.php" http-equiv="refresh"/>
</h2> ';

        }
        elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'MashCentral'){
            echo '
<h2 align="center">
  <meta content="2;app/mashcentral/index.php" http-equiv="refresh"/>
</h2> ';
        }
        elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'Manica'){
            echo '
<h2 align="center">
  <meta content="2;app/manica/index.php" http-equiv="refresh"/>
</h2> ';
        }
        elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'MidLands'){
            echo '
<h2 align="center">
  <meta content="2;app/midlands/index.php" http-equiv="refresh"/>
</h2> ';
        }
        elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'Bulawayo'){
            echo '
<h2 align="center">
  <meta content="2;app/bulawayo/index.php" http-equiv="refresh"/>
</h2> ';
        }
        elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'Masvingo'){
            echo '
<h2 align="center">
  <meta content="2;app/masvingo/index.php" http-equiv="refresh"/>
</h2> ';
        }
        elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'MatNorth'){
            echo '
<h2 align="center">
  <meta content="2;app/matnorth/index.php" http-equiv="refresh"/>
</h2> ';
        }
        elseif(@$_SESSION['role'] == 'Reg' && $_SESSION['province'] == 'MatSouth'){
            echo '
<h2 align="center">
  <meta content="2;app/matsouth/index.php" http-equiv="refresh"/>
</h2> ';
        }
    }
}?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bracket Plus">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
  
  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/bracketplus">
  <meta property="og:title" content="Bracket Plus">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
  
  <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">
  
  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">
  
  <title>SRC</title>
  
  <!-- vendor css -->
  <link href="app/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="app/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  
  <!-- Bracket CSS -->
  <link rel="stylesheet" href="app/css/bracket.css">
</head>

<body>

<div class="d-flex align-items-center justify-content-center ht-100v">
  <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
    <source src="app/videos/video1.mp4" type="video/mp4">
    <source src="app/videos/video1.ogv" type="video/ogg">
    <source src="app/videos/video1.webm" type="video/webm">
  </video><!-- /video -->
  <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
      <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> S <span class="tx-info">RC</span> <span class="tx-normal">]</span></div>
      <div class="tx-white-5 tx-center mg-b-60"> Sports and Recreation Commission</div>
      <form action="" enctype="multipart/form-data" method="post">
      <div class="form-group">
        <input type="email" name="email" class="form-control fc-outline-dark" placeholder="Enter your Email" required>
      </div><!-- form-group -->
      <div class="form-group">
        <input type="password" name="password" class="form-control fc-outline-dark" placeholder="Enter your password" required>
        <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
      </div><!-- form-group -->
      <button type="submit" name="login" style="background-color: green" class="btn btn-info btn-block">Sign In</button>
      
      <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
      </form>
    </div><!-- login-wrapper -->
  </div><!-- overlay-body -->
</div><!-- d-flex -->

<script src="app/lib/jquery/jquery.min.js"></script>
<script src="app/lib/jquery-ui/ui/widgets/datepicker.js"></script>
<script src="app/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
	$(function(){
		'use strict';

		// Check if video can play, and play it
		var video = document.getElementById('headVideo');
		video.addEventListener('canplay', function() {
			video.play();
		});

	});
</script>

</body>
</html>
