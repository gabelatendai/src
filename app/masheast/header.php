<?php
@session_start();
$conn = mysqli_connect("localhost", "root", "", "src_db");

$id =$_SESSION['user_id'];
$province =$_SESSION['province'];
$in = mysqli_query($conn,"Select * from login where id= '$id'");

$init=mysqli_fetch_array($in);
$sname=$init['sname'];
$fname=$init['fname'];
$image=$init['image'];
$name= $fname ."  ". $sname;
//include "header.php";
//include 'rb.php';


?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>SRC|<?php echo $province ?> </title>

    <!-- vendor css -->
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
	<link href="../lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
</head>


<?php
//include "rb.php";
?>
<!-- ########## START: LEFT PANEL ########## -->
<div  class="br-logo"><a href=""><span>[</span>SRC <i><?php echo $province ?> </i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="index.php" class="br-menu-link active">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="athelate_form.php" class="br-menu-link">
                <i class="menu-item-icon ion-android-add-circle tx-24"></i>
                <span class="menu-item-label">Add Participant</span>
            </a><!-- br-menu-link -->
        </li>
        <li class="br-menu-item">
            <a href="non_participantform.php" class="br-menu-link">
                <i class="menu-item-icon ion-person-add tx-24"></i>
                <span class="menu-item-label">Add Non Participant</span>
            </a><!-- br-menu-link -->
        </li>
	    <!-- br-menu-item --
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Cards &amp; Widgets</span>
            </a><!-- br-menu-link --
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="card-dashboard.html" class="sub-link">Dashboard</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Blog &amp; Social Media</a></li>
                <li class="sub-item"><a href="card-listing.html" class="sub-link">Shop &amp; Listing</a></li>
            </ul>
        </li>-->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Sport Code</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
	<?php
    $in = mysqli_query($conn,"Select * from sportcode");

    while ($init=mysqli_fetch_array($in)){

	            $id= $init['id'];
	            ?>
	    <li class="sub-item"><a href="players.php?id=<?php echo $id; ?>"  class="sub-link"><?php echo $init['title']; ?> </a></li>

	            <?php } ?>
	            <li class="sub-item"><a href="non_participant.php"  class="sub-link">Non Participant</a></li>
<!--
	            <li class="sub-item"><a href="athletics.php"  class="sub-link">Athletics</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Basketbal</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Boxing</a></li>
                <li class="sub-item"><a href="football.php" class="sub-link">Football</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Handball</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Netball</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Darts</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Chess</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Pool</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Tennis</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Volleyball</a></li>
       -->     </ul>
        </li><!-- br-menu-item -->

    </ul><!-- br-sideleft-menu -->

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>

	    <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
          </span>
        </div><!-- input-group -->
	    <img src="../image/plan.png" style="width:80px;height: 60px">
	    <img src="../image/telecel.png" style="width:80px;height: 60px">
	    <img src="../image/telone.png"style="width:80px;height: 60px">
	    <img src="../image/unicef.png" style="width:80px;height: 60px">
    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-email-outline tx-24"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
                <div class="dropdown-menu dropdown-menu-header">
                    <div class="dropdown-menu-label">
                        <label>Messages</label>
                        <a href="">+ Add New Message</a>
                    </div><!-- d-flex -->

                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="" class="media-list-link">
                            <div class="media">
                                <img src="https://via.placeholder.com/500" alt="">
                                <div class="media-body">
                                    <div>
                                        <p>Donna Seay</p>
                                        <span>2 minutes ago</span>
                                    </div><!-- d-flex -->
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="" class="media-list-link read">
                            <div class="media">
                                <img src="https://via.placeholder.com/500" alt="">
                                <div class="media-body">
                                    <div>
                                        <p>Samantha Francis</p>
                                        <span>3 hours ago</span>
                                    </div><!-- d-flex -->
                                    <p>My entire soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media">
                                <img src="https://via.placeholder.com/500" alt="">
                                <div class="media-body">
                                    <div>
                                        <p>Robert Walker</p>
                                        <span>5 hours ago</span>
                                    </div><!-- d-flex -->
                                    <p>I should be incapable of drawing a single stroke at the present moment...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media">
                                <img src="https://via.placeholder.com/500" alt="">
                                <div class="media-body">
                                    <div>
                                        <p>Larry Smith</p>
                                        <span>Yesterday</span>
                                    </div><!-- d-flex -->
                                    <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <div class="dropdown-footer">
                            <a href=""><i class="fas fa-angle-down"></i> Show All Messages</a>
                        </div>
                    </div><!-- media-list -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown">
                <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-bell-outline tx-24"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
                <div class="dropdown-menu dropdown-menu-header">
                    <div class="dropdown-menu-label">
                        <label>Notifications</label>
                        <a href="">Mark All as Read</a>
                    </div><!-- d-flex -->

                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="" class="media-list-link read">
                            <div class="media">
                                <img src="https://via.placeholder.com/500" alt="">
                                <div class="media-body">
                                    <p class="noti-text"><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                                    <span>October 03, 2017 8:45am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="" class="media-list-link read">
                            <div class="media">
                                <img src="https://via.placeholder.com/500" alt="">
                                <div class="media-body">
                                    <p class="noti-text"><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                                    <span>October 02, 2017 12:44am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media">
                                <img src="https://via.placeholder.com/500" alt="">
                                <div class="media-body">
                                    <p class="noti-text">20+ new items added are for sale in your <strong>Sale Group</strong></p>
                                    <span>October 01, 2017 10:20pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media">
                                <img src="https://via.placeholder.com/500" alt="">
                                <div class="media-body">
                                    <p class="noti-text"><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                                    <span>October 01, 2017 6:08pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <div class="dropdown-footer">
                            <a href=""><i class="fas fa-angle-down"></i> Show All Notifications</a>
                        </div>
                    </div><!-- media-list -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down"><?php echo $fname ?> </span>
                    <img src="../admin/<?php echo $image; ?>" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <div class="tx-center">
                        <a href=""><img src="../admin/<?php echo $image ; ?>" class="wd-80 rounded-circle" alt=""></a>
                        <h6 class="logged-fullname"><?php echo $name ?></h6>
                        <p><?php echo $_SESSION['id'] ?></p>
                    </div>
                    <hr>
                    <div class="tx-center">
                       <!-- <span class="profile-earning-label">Earnings After Taxes</span>
                        <h3 class="profile-earning-amount">$13,230 <i class="icon ion-ios-arrow-thin-up tx-success"></i></h3>
                        <span class="profile-earning-text">Based on list price.</span>
                        -->
                    </div>
                    <hr>
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                        <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                        <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                        <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                        <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                        <li><a href="sign-out.php"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
            <a id="btnRightMenu" href="" class="pos-relative">
                <i class="icon ion-ios-chatboxes-outline"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
                <!-- end: if statement -->
            </a>
        </div><!-- navicon-right -->
    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div  class="br-sideright">
    <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 contact-scrollbar active" id="contacts" role="tabpanel">
            <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
            <div class="contact-list pd-x-10">
                <a href="" class="contact-list-link new">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p>Marilyn Tarter</p>
                            <span>Clemson, CA</span>
                        </div>
                        <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0 ">Belinda Connor</p>
                            <span>Fort Kent, ME</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link new">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p>Britanny Cevallos</p>
                            <span>Shiboygan Falls, WI</span>
                        </div>
                        <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link new">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p>Brandon Lawrence</p>
                            <span>Snohomish, WA</span>
                        </div>
                        <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p>Andrew Wiggins</p>
                            <span>Springfield, MA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p>Theodore Gristen</p>
                            <span>Nashville, TN</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p>Deborah Miner</p>
                            <span>North Shore, CA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
            </div><!-- contact-list -->


            <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
            <div class="contact-list pd-x-10">
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p>Marilyn Tarter</p>
                            <span>Clemson, CA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p>Belinda Connor</p>
                            <span>Fort Kent, ME</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p>Britanny Cevallos</p>
                            <span>Shiboygan Falls, WI</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p>Brandon Lawrence</p>
                            <span>Snohomish, WA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p>Andrew Wiggins</p>
                            <span>Springfield, MA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p>Theodore Gristen</p>
                            <span>Nashville, TN</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="https://via.placeholder.com/500" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p>Deborah Miner</p>
                            <span>North Shore, CA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
            </div><!-- contact-list -->

        </div><!-- #contacts -->
        <div class="tab-pane pos-absolute a-0 mg-t-60 attachment-scrollbar" id="attachments" role="tabpanel">
            <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
            <div class="media-file-list">
                <div class="media">
                    <div class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="far fa-file-image tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">IMG_43445</p>
                        <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                        <p class="mg-b-0 tx-12 op-5">1.2mb</p>
                    </div><!-- media-body -->
                    <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-gray-500 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="far fa-file-video tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">VID_6543</p>
                        <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                        <p class="mg-b-0 tx-12 op-5">24.8mb</p>
                    </div><!-- media-body -->
                    <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-gray-500 bg-reef wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="far fa-file-word tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">Tax_Form</p>
                        <p class="mg-b-0 tx-12 op-5">Word Document</p>
                        <p class="mg-b-0 tx-12 op-5">5.5mb</p>
                    </div><!-- media-body -->
                    <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-gray-500 bg-firewatch wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="far fa-file-pdf tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">Getting_Started</p>
                        <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                        <p class="mg-b-0 tx-12 op-5">12.7mb</p>
                    </div><!-- media-body -->
                    <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-gray-500 bg-firewatch wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="far fa-file-pdf tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">Introduction</p>
                        <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                        <p class="mg-b-0 tx-12 op-5">7.7mb</p>
                    </div><!-- media-body -->
                    <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="far fa-file-image tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">IMG_43420</p>
                        <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                        <p class="mg-b-0 tx-12 op-5">2.2mb</p>
                    </div><!-- media-body -->
                    <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="far fa-file-image tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">IMG_43447</p>
                        <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                        <p class="mg-b-0 tx-12 op-5">3.2mb</p>
                    </div><!-- media-body -->
                    <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-gray-500 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="far fa-file-video tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">VID_6545</p>
                        <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                        <p class="mg-b-0 tx-12 op-5">14.8mb</p>
                    </div><!-- media-body -->
                    <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-gray-500 bg-reef wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="far fa-file-word tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">Secret_Document</p>
                        <p class="mg-b-0 tx-12 op-5">Word Document</p>
                        <p class="mg-b-0 tx-12 op-5">4.5mb</p>
                    </div><!-- media-body -->
                    <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
            </div><!-- media-list -->
        </div><!-- #history -->
        <div class="tab-pane pos-absolute a-0 mg-t-60 schedule-scrollbar" id="calendar" role="tabpanel">
            <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
            <div class="pd-x-25">
                <h2 id="brTime" class="br-time"></h2>
                <h6 id="brDate" class="br-date"></h6>
            </div>

            <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
            <div class="datepicker sidebar-datepicker"></div>


            <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
            <div class="pd-x-25">
                <div class="list-group sidebar-event-list mg-b-20">
                    <div class="list-group-item">
                        <div>
                            <h6>Roven's 32th Birthday</h6>
                            <p>2:30PM</p>
                        </div>
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- list-group-item -->
                    <div class="list-group-item">
                        <div>
                            <h6>Regular Workout Schedule</h6>
                            <p>7:30PM</p>
                        </div>
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- list-group-item -->
                </div><!-- list-group -->

                <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-12 tx-spacing-2">+ Add Event</a>
                <br>
            </div>

        </div>
        <div class="tab-pane pos-absolute a-0 mg-t-60 settings-scrollbar" id="settings" role="tabpanel">
            <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

            <div class="sidebar-settings-item">
                <h6 class="tx-13 tx-normal">Sound Notification</h6>
                <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
                <div class="br-switchbutton checked">
                    <input type="hidden" name="switch1" value="true">
                    <span></span>
                </div><!-- br-switchbutton -->
            </div>
            <div class="sidebar-settings-item">
                <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
                <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your phone.</p>
                <div class="br-switchbutton">
                    <input type="hidden" name="switch2" value="false">
                    <span></span>
                </div><!-- br-switchbutton -->
            </div>
            <div class="sidebar-settings-item">
                <h6 class="tx-13 tx-normal">Location Services</h6>
                <p class="op-5 tx-13">Allowing us to access your location</p>
                <div class="br-switchbutton">
                    <input type="hidden" name="switch3" value="false">
                    <span></span>
                </div><!-- br-switchbutton -->
            </div>
            <div class="sidebar-settings-item">
                <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
                <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
                <div class="br-switchbutton checked">
                    <input type="hidden" name="switch4" value="true">
                    <span></span>
                </div><!-- br-switchbutton -->
            </div>
            <div class="sidebar-settings-item">
                <h6 class="tx-13 tx-normal">Your email</h6>
                <div class="pos-relative">
                    <input type="email" name="email" class="form-control" value="janedoe@domain.com">
                </div>
            </div>

            <div class="pd-y-20 pd-x-25">
                <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
                <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account Settings</a>
                <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy Settings</a>
            </div>
        </div>
    </div><!-- tab-content -->
</div><!-- br-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->

<div style="background-image: url('../image/bck.jpg');background-size: contain;background-repeat: no-repeat" class="br-mainpanel">
	<div class="br-pagetitle">

	</div>
	<br>
	<br>
	<br>
	<br>	<br>
	<br>
	<br>
	<br>

		<h4 align="center" style="color: black">Mash East Accreditation System</h4>
		<p class="mg-b-0 text-center" style="color: black">#Child Rights , My Responsibilities</p>

	<h1 class="text-center" style="color: black">
		<?php echo $_SESSION['province']; ?>  Province</h1>