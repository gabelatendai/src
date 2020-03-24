<?php
require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
$db = mysqli_connect("localhost", "root", "", "src_db");


include "header.php";
//include 'rb.php';
$id=$_GET['id'];
if(isset($_POST['update'])){
    $date = date('Y-m-d H:i:s');

    $fname = $_POST['firstname'];
    $surname = $_POST['lastname'];
    // $admin->email = $_POST['email'];
    $sportcode = $_POST['sportcode'];
    //$sportcode = $_POST['sportcode'];
   // $image = $filepath;
    $idno = $_POST['idno'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    //  $books->book_path=$attachment;
    mysqli_query ($db,"UPDATE `players` SET `fname`='$fname',`sname`='$surname',`sportcode`='$sportcode' ,`address`='$address',`mobile`='$mobile' ,`dob`='$dob' WHERE `id`='$id'");

    $msg='   Updated successfully';
    // print ("<script>window.location.assign('add_assignment.php')</script>");
}
if(isset($_POST['image'])){
    $filetmp = $_FILES['image']['tmp_name'];
    $filename = $_FILES['image']['name'];
    $filetype = $_FILES['image']['tmp_name'];
    $filepath = "uploads/images/" . $filename;
///$vol= unique();
    move_uploaded_file($filetmp, $filepath);

    //  $books->book_path=$attachment;
    mysqli_query ($db,"UPDATE `players` SET `image`='$filepath' WHERE `id`='$id'");

    $msg='   Updated successfully';
    // print ("<script>window.location.assign('add_assignment.php')</script>");
}
$players = R::load('players',$id);
$name=  $players->fname;
$srname=  $players->sname;
$dob=  $players->dob;
$pik=  $players->image;
$pnumber=  $players->mobile;
$idnum=  $players->idno;
$s_code=  $players->sportcode;
$address=  $players->address;
?>
    <!-- ########## START: MAIN PANEL ########## -->


      <div class="br-pagebody">
        <div class="br-section-wrapper">

	        <div>
		        <h4>Update <?php echo $name .'   '. $srname?></h4>
		           </div>
	        <br>
	        <hr>
          <div class="form-layout form-layout-1">
                 <form action="" method="post" enctype="multipart/form-data">
            <div class="row mg-b-25">
	            <!--   <div class="col-lg-4">
                  <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                      <select class="form-control select2" data-placeholder="Choose title" name="title">
                        <option label="Choose country"></option>
                        <option value="MR">MR</option>
                        <option value="MRS">MRS</option>
                        <option value="MISS">MISS</option>
                        <option value="MS">MS</option>
                        <option value="DR">DR</option>
                        <option value="ENG">ENG</option>
                        <option value="PROF">PROF</option>
                      </select>
                    </div>
                  </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="<?php echo $name ?>" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $srname ?>" name="lastname"  placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Date of birth: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" value="<?php echo $dob ?>" name="dob"  placeholder="Select date of birth">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Mobile Number<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text"value="<?php echo $pnumber ?>" name="mobile"  placeholder="Enter mobile number">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">ID Number: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $dob ?>" name="idno" placeholder="Enter Your National ID Number">
                </div>
              </div><!-- col-4 --
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" placeholder="Enter email address">
                </div>
              </div>

	            <!-- col-4 -->
            <!-- col-4 -->
	            <div class="col-lg-4">
		            <div class="form-group mg-b-10-force">
			            <label class="form-control-label">Sport Code: <span class="tx-danger">*</span></label>
			            <select class="form-control select2" data-placeholder="Choose country" name="sportcode" required>
				           <?php  $subs= R::findAll('sportcode');

                                    foreach ($subs as $row) {

                                        ?>
	                                    <option <?php if ($s_code == $row['title']) { print ' selected '; ?>class="ion-person-add" <?php } ?> value="<?php echo $row['id']; ?>" ><?php echo $row['title']; ?></option>
                                    <?php } ?>
			            </select>
		            </div>
	            </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-12-force">
                  <label class="form-control-label"> Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $address ?>" name="address" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
               

            </div><!-- row -->
            <div class="form-layout-footer">
              <input type="submit" class="btn btn-info"  value="Update" name="update">
              <button class="btn btn-secondarsy">Cancel</button>
            </div><!-- form-layout-footer -->



	        <div class="col-lg-8 img-circle">

			       <img src="<?php echo $pik ?>" style="height: 100px;width: 100px;">
	        </div>
	                 <div class="col-lg-4">
		                 <div class="form-group">
			                 <input type="file" name="image" id="file-1" class="inputfile"
			                        data-multiple-caption="{count} files selected" multiple>
			                 <label for="file-1" class="tx-white bg-info">
				                 <i class="icon ion-ios-upload-outline tx-24"></i>
				                 <span>Choose a image/picture...</span>
			                 </label>
		                 </div>
	                 </div>
	                 <div class="form-layout-footer">
		                 <input type="submit" class="btn btn-info"  value="Change Image" name="image">
	                 </div>
          </div><!-- form-layout -->
	        </form>


        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody --> <?php
include 'footer.php';
?>