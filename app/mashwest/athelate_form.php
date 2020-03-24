<?php
require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

$province =$_SESSION['province'];
include "header.php";
//include 'rb.php';



?>
    <!-- ########## START: MAIN PANEL ########## -->


      <div class="br-pagebody">
        <div class="br-section-wrapper">

	        <div>
		        <h4>Athlete Accreditation Form</h4>
		        <p class="mg-b-0">Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
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
                  <input class="form-control" type="text" name="firstname"  placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Date of birth: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="dob"  placeholder="Select date of birth">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Mobile Number<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="mobile"  placeholder="Enter mobile number">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">ID Number: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="idno" placeholder="Enter Your National ID Number">
                </div>
              </div><!-- col-4 --
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" placeholder="Enter email address">
                </div>
              </div>

	            <!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
<label></label>
	                <br>
	                <br>

	                <input type="file" name="image" id="file-1" class="inputfile"
	                       data-multiple-caption="{count} files selected" multiple>
	                <label for="file-1" class="tx-white bg-info">
		                <i class="icon ion-ios-upload-outline tx-24"></i>
		                <span>Choose a image/picture...</span>
	                </label>
                </div>
              </div><!-- col-4 -->
	            <div class="col-lg-4">
		            <div class="form-group mg-b-10-force">
			            <label class="form-control-label">Sport Code: <span class="tx-danger">*</span></label>
			            <select class="form-control select2" data-placeholder="Choose country" name="sportcode" >
				           <?php  $subs= R::findAll('sportcode');

                                    foreach ($subs as $row) {

                                        ?>

										<option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
                                    <?php } ?>
			            </select>
		            </div>
	            </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-12-force">
                  <label class="form-control-label"> Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
               

            </div><!-- row -->
            <div class="form-layout-footer">
              <input type="submit" class="btn btn-info"  value="Submit Form" name="reg">
              <button class="btn btn-secondarsy">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->

	        </form>


        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
<?php
if(isset($_POST['reg'])) {


    $filetmp = $_FILES['image']['tmp_name'];
    $filename = $_FILES['image']['name'];
    $filetype = $_FILES['image']['tmp_name'];
    $filepath = "../image/uploads/images/" . $filename;
///$vol= unique();
    move_uploaded_file($filetmp, $filepath);

    $idno = $_POST['idno'];
    $init = R::findOne('players', 'id = ? ', [$idno]);
    if ($init > 0) {
        echo '<div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong class="d-block d-sm-inline-block-force">ID number already registered with another user!!!</strong>
</div>';
        echo '
                <h2 align="center">
                    <meta content="5;athelate_form.php" http-equiv="refresh"/>
                </h2> ';

    } else {

        $admin = R::dispense('players');
        // $admin->title = $_POST['title'];
        $admin->fname = $_POST['firstname'];
        $admin->sname = $_POST['lastname'];
        // $admin->email = $_POST['email'];
        $admin->sportcode = $_POST['sportcode'];
        $admin->image = $filepath;
        $admin->idno = $idno;
        $admin->province = $province;
        $admin->address = $_POST['address'];
        $admin->mobile = $_POST['mobile'];
        $admin->dob = $_POST['dob'];
        $admin->player = uniqid();
        R::store($admin);
        echo '<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong class="d-block d-sm-inline-block-force">Registration was Successfull!!!</strong>
</div>';
        echo '
                <h2 align="center">
                    <meta content="5;athelate_form.php" http-equiv="refresh"/>
                </h2> ';

    }
}
?>

    <?php
include 'footer.php';
?>