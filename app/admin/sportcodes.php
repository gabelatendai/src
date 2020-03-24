<?php

require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);



include "header.php";

?>
    <!-- ########## START: MAIN PANEL ########## -->

          <h4 align="center">Manage Sportcodes</h4>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap"  width="auto">
              <thead>
                <tr>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Delete</th>

                </tr>
              </thead>
              <tbody>
              <?php
              $players = R::findAll('sportcode');


              foreach ($players as $player) {
                  $id = $player->id;

                  ?>
	              <tr>
		              <td><?php echo $player->title ?></td>

		              <td>
			              <a class="pull-right btn btn-danger" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
				              <i class="glyphicon glyphicon-trash"></i>  <b> <p>Delete</p></b></a>
		              </td><!-- delete modal user -->
		              <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			              <div class="modal-dialog">
				              <div class="modal-content">
					              <div class="modal-header">
						              <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Sportcode</h4>
					              </div>
					              <div class="modal-body">
						              <div class="alert alert-danger">
							              Are you sure you want to delete?
						              </div>
						              <div class="modal-footer">
							              <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
							              <a href="deletesport.php<?php echo '?id='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
						              </div>
					              </div>
				              </div>
			              </div>
		              </div>

	              </tr>
                  <?php
              }
              ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->


        <?php
        include '../masheast/footer.php';
        ?>
