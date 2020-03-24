<?php

require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

$id = $_GET['id'];
 $init = R::findOne('sportcode', 'id = ?', [$id]);
 R::trash( $init );
echo '<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong class="d-block d-sm-inline-block-force">Well done!</strong> You successfully deleted Sportcode.
</div>';
echo '
                <h2 align="center">
                    <meta content="2;sportcodes.php" http-equiv="refresh"/>
                </h2> ';

?>

