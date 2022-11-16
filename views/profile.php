<?php
session_start();
require_once('../config/config.php') ?>
<?php require_once('../config/checklogin.php') ?>
<?php include('../partial/head.php');

/* Load This Page With Logged In User Session */
$login_id = mysqli_escape_string($mysqli, $_SESSION['login_id']);

$sql1 = mysqli_query($mysqli, "SELECT * FROM users WHERE user_id='$login_id'");
$sql2 = mysqli_query($mysqli, "SELECT * FROM auth WHERE auth_id='$login_id'");
if (mysqli_num_rows($sql1) != 0) {
    while ($user = mysqli_fetch_array($sql1)) {
?>
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

                                        <!--<div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="../public/img/staf/default.jpg" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#">
                                                    <h5>Cool Marketing </h5>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>-->


                                      
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

            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="dashboard_header mb_50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dashboard_header_title">
                                            <h3> Profile Box</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="dashboard_breadcam text-end">
                                            <p><a href="dashboard">Dashboard</a> <i class="fas fa-caret-right"></i> Profile</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Profile</h3>
                                </div>
                            </div>
                            <div class="profile_card_5">
                                <div class="cover-photo">
                                    <img src="../public/img/staf/default.jpg" class="profile">
                                </div>
                                <div class="profile-name"><?php echo $user['user_first_name'] ?> <?php echo $user['user_last_name']   ?></div>
                                <p class="about">Email :<?php echo $user['user_email'] ?><br>Access Level :User</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php }
         } else if (mysqli_num_rows($sql2) != 0) {
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

                                        <!--<div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="../public/img/staf/default.jpg" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#">
                                                    <h5>Cool Marketing </h5>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>-->


                                      
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

            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="dashboard_header mb_50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dashboard_header_title">
                                            <h3> Profile Box</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="dashboard_breadcam text-end">
                                            <p><a href="dashboard">Dashboard</a> <i class="fas fa-caret-right"></i> Profile</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Profile</h3>
                                </div>
                            </div>
                            <div class="profile_card_5">
                                <div class="cover-photo">
                                    <img src="../public/img/staf/default.jpg" class="profile">
                                </div>
                                <div class="profile-name"><?php echo $user['auth_first_name'] ?> <?php echo $user['auth_last_name']   ?></div>
                                <p class="about">Email :<?php echo $user['auth_email'] ?><br>Access Level :Administrator</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }}?>
        <?php include('../partial/footer.php') ?>
    </section>
    <?php include('../partial/script.php') ?>

</body>

</html>