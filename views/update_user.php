<?php
session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
include('../partial/head.php');
require('../functions/settings.php');

/* Load This Page With Logged In User Session */
$login_id = mysqli_escape_string($mysqli, $_SESSION['login_id']);


$sql2 = mysqli_query($mysqli, "SELECT * FROM auth WHERE auth_id='$login_id'");
 if (mysqli_num_rows($sql2) != 0) {
        while ($user = mysqli_fetch_array($sql2)) { ?>

<body class="crm_body_bg">
<?php include('../partial/navbar.php') ?>
            <section class="main_content dashboard_part large_header_bg">

                <div class="container-fluid g-0">
                    <div class="row">
                        <div class="col-lg-12 p-0 ">
                            <div class="header_iner d-flex justify-content-between align-items-center">
                                <div class="sidebar_icon d-lg-none">
                                    <i class="ti-menu"></i>
                                </div>
                                <div class="serach_field-area d-flex align-items-center">
                                    <div class="search_inner">
                                        <form action="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search here...">
                                            </div>
                                            <button type="submit"> <img src="../public/img/icon/icon_search.svg" alt=""> </button>
                                        </form>
                                    </div>
                                    <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                                </div>
                                <div class="header_right d-flex justify-content-between align-items-center">
                                    <div class="header_notification_warp d-flex align-items-center">
                                        <li>
                                            <a class="bell_notification_clicker nav-link-notify" href="#"> <img src="../public/img/icon/bell.svg" alt="">
                                            </a>

                                            <div class="Menu_NOtification_Wrap">
                                                <div class="notification_Header">
                                                    <h4>Notifications</h4>
                                                </div>
                                                <div class="Notification_body">



                                                </div>
                                                <div class="nofity_footer">
                                                    <div class="submit_button text-center pt_20">
                                                        <a href="#" class="btn_1">See More</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>

                                    </div>

                                    <div class="profile_info">
                                        <img src="../public/img/staf/default.jpg" alt="#">
                                        <div class="profile_info_iner">


                                            <div class="profile_author_name">
                                                <p>User</p>
                                                <h5><?php echo $user['auth_first_name'] ?> <?php echo $user['auth_last_name']   ?></h5>
                                            </div>
                                            <div class="profile_info_details">
                                                <a href="profile">My Profile </a>
                                                <a href="setting">Settings</a>
                                                <a href="logout">Log Out </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php 
$login_id=mysqli_escape_string($mysqli, $_GET['id']);
$sql = mysqli_query($mysqli, "SELECT * FROM auth WHERE auth_id='$login_id'");
if (mysqli_num_rows($sql) > 0) {
    while ($auth = mysqli_fetch_array($sql)) {
?>
                <div class="main_content_iner ">
                    <div class="container-fluid p-0">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="dashboard_header mb_50">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="dashboard_header_title">
                                                <h3> Edit <?php echo $auth['auth_first_name'] ?></h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="dashboard_breadcam text-end">
                                                <p><a href="dashboard">Dashboard</a> <i class="fas fa-caret-right"></i> Edit User</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="white_card card_height_100 mb_30">
                                    
                                    <div class="white_card_body">
                                    <div class="white_card_body">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>First Name</label>
                                                    <input type="hidden" class="form-control" name="auth_id" value="<?php echo $auth['auth_id'] ?>">
                                                    <input type="text" class="form-control" name="auth_first_name" value="<?php echo $auth['auth_first_name'] ?>">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control"  name="auth_last_name" value="<?php echo $auth['auth_last_name'] ?>">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control"  name="auth_email" value="<?php echo $auth['auth_email'] ?>">
                                                </div>
                                               
                                                <div class="col-sm-10">
                                        <button type="submit" name="update_auth" class="btn btn-primary">Save</button>
                                 
                                    
                                                </div>
                                            </div>
                                            </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }} ?>
                </div>
                </div>
                </div>
                </div>
                </div>
 
                <?php } } ?>
                <?php include('../partial/footer.php') ?>
                    </section>
                    <?php include('../partial/script.php') ?>

                </body>

                </html>