<?php
session_start();
require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

$province =$_SESSION['province'];
R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
//@$idc = $_GET['id'];
//@$title = $_GET['sportcode'];


include "header.php";
/*if (isset($_GET['id'])) {

    $init = R::findOne('sportcode', 'id=?', [$idc]);


    @$name = $init->title;
    @$id = $init->id;
}if (isset($_GET['sportcode'])) {


    $init = R::findOne('sportcode', 'title=?', [$title]);


    @$name = $init->title;
    @$id = $init->id;
}*/
?>
    <!-- ########## START: MAIN PANEL ########## -->
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Registered NON  Participants</h6>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap"  width="auto">
              <thead>
                <tr>
                  <th class="wd-15p">First name</th>
                  <th class="wd-15p">Last name</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-10p">ID Number</th>
                  <th class="wd-25p">Mobile</th>
                  <th class="wd-25p">Dob</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $players = R::findAll('volunteers','province=?',[$province]);


              foreach ($players as $player) {
                  $playerid = $player->id;

                  ?>
	              <tr>
		              <td><?php echo $player->fname ?></td>
		              <td><?php echo $player->sname ?></td>
		              <td><img src="<?php echo $player->image ?>" width="20px" height="20px"></td>
		              <td><?php echo $player->idno ?></td>
		              <td><?php echo $player->mobile ?></td>
		              <td><?php echo $player->dob ?></td>

		              <td>
			              <a class="btn btn-success btn-block mg-b-10" href="edit_participant.php?" ><i class="fa fa-edit mg-r-10"></i> Edit</a>
		              </td><!-- delete modal user -->

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

        include "footer.php";
        ?>
