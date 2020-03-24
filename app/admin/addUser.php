<?php
require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;
R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
include "header.php";
?>
    <!-- ########## START: MAIN PANEL ########## -->

          <h1 align="center">Users Registration  Form</h1>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
         

          <div class="form-layout form-layout-1">
                 <form action="adduser_proc.php" method="post" enctype="multipart/form-data">
            <div class="row mg-b-25">
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
             <!-- col-4 -->

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
	            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="password" value="00000000" name="password" readonly placeholder="Enter Password">
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
		            <div class="form-group ">
			            <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
			            <select class="form-control select1" data-placeholder="Choose country" name="category" >
				            <option label="Choose Category">Choose Category</option>
				            <option value="Reg">Registrar</option>
				            <option value="Admin">Admin</option>
				            <option value="vip">VIP</option>
				            <option value="src">SRC</option>
			            </select>
		            </div>
              </div><!-- col-4 -->
	            <div class="col-lg-4">
		            <div class="form-group mg-b-10-force">
			            <label class="form-control-label">Select AccessZone: <span class="tx-danger">*</span></label>
			            <select class="form-control " data-placeholder="Choose title" name="province">
				            <option label="Choose country">Choose Zone</option>
				            <?php


				             $players = R::findAll('zones');


              foreach ($players as $player) {
                  $id = $player->id;
                  $title = $player->title;
                  ?>
	              <option value="<?php echo $id ?>" label="Choose country"><?php echo $title ?></option>
                  <?php
              }
 ?>
			            </select>
		            </div>
	            </div><!-- col-4 -->
	            <div class="col-lg-4">
		            <div class="form-group mg-b-10-force">
			            <label class="form-control-label">Province: <span class="tx-danger">*</span></label>
			            <select class="form-control select2" data-placeholder="Choose title" name="province">
				            <option label="Choose country"></option>
				            <option value="Masheast">Masheast</option>
				            <option value="Harare">Harare</option>
				            <option value="MashWest">MashWest</option>
				            <option value="MashCentral">MashCentral</option>
				            <option value="Manica">Manica Land</option>
				            <option value="MidLands">MidLands</option>
				            <option value="MatSouth">MatSouth</option>
				            <option value="MatNorth">MatNorth</option>
				            <option value="Bulawayo">Bulawayo</option>
				            <option value="Masvingo">Masvingo</option>
			            </select>
		            </div>
	            </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-12-force">
                  <label class="form-control-label"> Address: <span class="tx-danger">*</span></label>
	                <textarea class="form-control" type="text" name="address" placeholder="Enter address"></textarea>
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
include '../masheast/footer.php';
?>