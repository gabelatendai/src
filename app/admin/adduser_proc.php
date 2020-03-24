<?php
/**
 * Created by PhpStorm.
 * User: gabela
 * Date: 2/10/2019
 * Time: 12:05
 */
require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

if(isset($_POST['reg'])) {


    $filetmp= $_FILES['image']['tmp_name'];
    $filename = $_FILES['image']['name'];
    $filetype = $_FILES['image']['tmp_name'];
    $filepath= "uploads/images/".$filename;
///$vol= unique();
    move_uploaded_file( $filetmp,$filepath);
    $email = $_POST['email'];
    $init = R::findOne('login', 'email = ? ', [$email]);
    if($init>0){

        echo '<div class="alert alert-warning" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="d-flex align-items-center justify-content-start">
        <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
        <span><strong> </strong>Email already registered by another user!!!</span>
    </div><!-- d-flex -->
</div>';
        echo '
                <h2 align="center">
                    <meta content="2;addUser.php" http-equiv="refresh"/>
                </h2> ';
        // print ("<script>window.alert('Email already registered by another user!!!')</script>");
        // print ("<script>window.location.assign('addUser.php')</script>");
    }
    else{

        $admin = R::dispense('login');
        $admin->province = $_POST['province'];
        $admin->fname = $_POST['firstname'];
        $admin->sname = $_POST['lastname'];
        $admin->email = $email;
        $admin->password = md5($_POST['password']);
        $admin->role = $_POST['category'];
        $admin->image = $filepath;
        $admin->idno = $_POST['idno'];
        $admin->address = $_POST['address'];
        $admin->mobile = $_POST['mobile'];
        $admin->userid =uniqid();
        R::store($admin);


        echo '<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="d-flex align-items-center justify-content-start">
        <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
        <span><strong> </strong> Successfull!!!</span>
    </div><!-- d-flex -->
</div>';
        echo '
                <h2 align="center">
                    <meta content="2;addUser.php" http-equiv="refresh"/>
                </h2> ';
    }
}


?>