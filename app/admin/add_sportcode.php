<?php


require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);


include "header.php";


?>

          <h1 align="center">Admin Settings Panel</h1>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
         
<div class= "row mg-b-25">
          <div class="form-layout form-layout-1 col-lg-5">
	          <h4 align="center">Add Sportcode </h4>
<hr>
                 <form action="" method="post" enctype="multipart/form-data"> 
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Sport Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title"  placeholder="Enter Sport Title">
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <input type="submit" class="btn btn-info"  value="Submit Form" name="reg">
              <button class="btn btn-secondarsy">Cancel</button>
            </div><!-- form-layout-footer -->
            </form>
          </div><!-- form-layout -->
            <div class="form-layout col-lg-2">
            </div>
	           <div class="form-layout form-layout-1 col-lg-5">
		           <h4 align="center">Add Zones </h4>
		           <hr>
             <form action="" method="post" enctype="multipart/form-data">    
	        <div class="row mg-b-25">
		        <div class="col-lg-6">
			        <div class="form-group">
				        <label class="form-control-label">Zone Title: <span class="tx-danger">*</span></label>
				        <input class="form-control" type="text" name="zon" placeholder="Enter Zone Title e.g Zone 8">
			        </div>
		        </div><!-- col-4 -->
		        <div class="col-lg-6">
			        <div class="form-group">
				        <label class="form-control-label">Zone Description: <span class="tx-danger">*</span></label>
				        <input class="form-control" type="text" name="description"  placeholder="Enter Zone Description">
			        </div>
		        </div><!-- col-4 -->

	        </div><!-- row -->
	        <div class="form-layout-footer">
		        <input type="submit" class="btn btn-info"  value="Submit Form" name="zone">
		        <button class="btn btn-secondarsy">Cancel</button>
	        </div><!-- form-layout-footer -->
                 </form>

          </div>
</div>
        </div><!-- br-section-wrapper -->
      </div>
	    <!-- br-pagebody -->

<?php
if(isset($_POST['reg'])) {

    $admin = R::dispense('sportcode');
    $admin->title = $_POST['title'];
    R::store($admin);

    echo '<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="d-flex align-items-center justify-content-start">
        <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
        <span><strong>  Sportcode  Successfully Added  </strong>.</span>
    </div><!-- d-flex -->
</div>';

    echo '
                <h2 align="center">
                    <meta content="2;add_sportcode.php" http-equiv="refresh"/>
                </h2> ';
}



if(isset($_POST['zone'])){

    $zones=R::dispense('zones');
    $zones->title=$_POST['zon'];
    $zones->description=$_POST['description'];
    R::store($zones);

    echo '<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong class="d-block d-sm-inline-block-force">Well done!</strong> You successfully added a Zone.
</div>';
    echo '
                <h2 align="center">
                    <meta content="2;add_sportcode.php" http-equiv="refresh"/>
                </h2> ';
}
?>
    <?php
include '../masheast/footer.php';
?>