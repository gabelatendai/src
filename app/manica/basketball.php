<?php

require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);



include "header.php";

?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Tables</a>
          <span class="breadcrumb-item active">Data Table</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Football</h4>
          <p class="mg-b-0">MashEast</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Basic Responsive DataTable</h6>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap"  width="auto">
              <thead>
                <tr>
                  <th class="wd-15p">First name</th>
                  <th class="wd-15p">Last name</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-10p">ID Number</th>
                  <th class="wd-25p">Mobile</th>
                  <th class="wd-25p">Dob</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $players = R::findAll('volunteer');


              foreach ($players as $player) {
                  $id = $player->id;

                  ?>
	              <tr>
		              <td><?php echo $player->fname ?></td>
		              <td><?php echo $player->sname ?></td>
		              <td><img src="<?php echo $player->image ?>" width="20px" height="20px"></td>

		              <td><?php echo $player->category ?></td>
		              <td><?php echo $player->idno ?></td>
		              <td><?php echo $player->mobile ?></td>
		              <td><?php echo $player->dob ?></td>
		               <td>
			              <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i>View Student</a>
		              </td>
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
