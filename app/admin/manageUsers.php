<?php

require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);



include "header.php";

?>
    <!-- ########## START: MAIN PANEL ########## -->
   <!-- d-flex -->
<h1 class="text-center">List Of Registrars</h1>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap"  width="auto">
              <thead>
                <tr>
                  <th class="wd-15p">First name</th>
                  <th class="wd-15p">Last name</th>
                  <th class="wd-15p">Image</th>
	                <th class="wd-25p">Province</th>
                  <th class="wd-10p">ID Number</th>
                  <th class="wd-25p">Mobile</th>

                  <th class="wd-25p">Action2</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $players = R::findAll('login','role=?',['Reg']);


              foreach ($players as $player) {
                  $id = $player->id;
                 /// $sportcode_id = $player->sportcode;

                //  $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                  ?>
	              <tr>
		              <td><?php echo $player->fname ?></td>
		              <td><?php echo $player->sname ?></td>
		              <td><img src="<?php echo $player->image ?>" width="20px" height="20px"></td>

		              <td><?php echo $player->province ?></td>
		              <td><?php echo $player->idno ?></td>
		              <td><?php echo $player->mobile ?></td>
		              <td>
			              <a class="pull-right btn btn-danger" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
				              <i class="glyphicon glyphicon-trash"></i>  <b> <p>Delete</p></b></a>
		              </td><!-- delete modal user -->
		              <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			              <div class="modal-dialog">
				              <div class="modal-content">
					              <div class="modal-header">
						              <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> User</h4>
					              </div>
					              <div class="modal-body">
						              <div class="alert alert-danger">
							              Are you sure you want to delete?
						              </div>
						              <div class="modal-footer">
							              <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
							              <a href="deleteuser.php<?php echo '?id='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
						              </div>
					              </div>
				              </div>
			              </div>
		              </div>

		              <!--  <td>
                           <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i>View Card 1</a>
                       </td>
                        <td>
                            <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i>View Card 2</a>
                       </td>-->
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

        include "../masheast/footer.php";
        ?>
