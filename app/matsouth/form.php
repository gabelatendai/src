<?php
require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);



include "header.php";
//include 'rb.php';


if(isset($_POST['reg'])) {


        $filetmp= $_FILES['image']['tmp_name'];
        $filename = $_FILES['image']['name'];
        $filetype = $_FILES['image']['tmp_name'];
        $filepath= "uploads/images/".$filename;
///$vol= unique();
        move_uploaded_file( $filetmp,$filepath);

        $admin = R::dispense('volunteer');
        $admin->title = $_POST['title'];
        $admin->fname = $_POST['firstname'];
        $admin->sname = $_POST['lastname'];
        $admin->email = $_POST['email'];
        $admin->category = $_POST['category'];
        $admin->image = $filepath;
        $admin->idno = $_POST['idno'];
        $admin->address = $_POST['address'];
        $admin->mobile = $_POST['mobile'];
        $admin->dob = $_POST['dob'];
        $admin->volunteer =uniqid();
        R::store($admin);

}

?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Forms</a>
          <span class="breadcrumb-item active">Form Layouts</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon ion-ios-gear-outline"></i>
        <div>
          <h4>Volunteer Accreditation Form</h4>
          <p class="mg-b-0">Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
         

          <div class="form-layout form-layout-1">
                 <form action="" method="post" enctype="multipart/form-data">
            <div class="row mg-b-25">
             <div class="col-lg-4">
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
                  <label class="form-control-label">Mobile number<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="mobile"  placeholder="Enter mobile number">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">ID Number: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="idno" placeholder="Enter Your National ID Number">
                </div>
              </div><!-- col-4 -->
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
			            <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
			            <select class="form-control select2" data-placeholder="Choose country" name="category" >
				            <option label="Choose Category"></option>
				            <option value="coach">Coach</option>
				            <option value="athlete">Athlete</option>
				            <option value="vip">VIP</option>
				            <option value="src">SRC</option>
			            </select>
		            </div>
	            </div><!-- col-4 -->
              <div class="col-lg-12">
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
include 'footer.php';
?>