<?php
session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
include('../partial/head.php');
require('../functions/settings.php');

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
                                                <h5><?php echo $user['user_first_name'] ?> <?php echo $user['user_last_name']   ?></h5>
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
                                                        <h5><?php echo $user['user_first_name'] ?> <?php echo $user['user_last_name']   ?></h5>
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
                                    <div class="col-lg-12">
                                        <div class="white_card card_height_100 mb_30">
                                            <div class="white_card_body">
                                                <div class="QA_section">
                                                    <div class="white_box_tittle list_header">
                                                        <h4>Users</h4>
                                                        <div class="box_right d-flex lms_block">
                                                            <div class="add_button ms-2">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#add_modal" class="btn_1">Add New</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="QA_table mb_30">

                                                        <table class="table lms_table_active ">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">User FirstName</th>
                                                                    <th scope="col">User LastName</th>
                                                                    <th scope="col">User Email</th>
                                                                    <th scope="col">Manage</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $query=mysqli_query($mysqli,"SELECT* FROM auth");
                                                                if (mysqli_num_rows($query) > 0) {
                                                                    while ($auth = mysqli_fetch_array($query)) {
                                                                ?>
        
                                                                <tr>
                                                                    <td><?php echo $auth['auth_first_name']?></td>
                                                                    <td><?php echo $auth['auth_last_name']?></td>
                                                                    <td><?php echo $auth['auth_email']?></td>
                                                        
                                                                    <td><a data-toggle="modal" href="#update_<?php echo $auth['auth_id']; ?>" class="status_btn"><i class="fas fa-edit"></i>Edit</a></td>
                                                                </tr>
<?php }?>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php  include('../partial/modals/user.php');
}?>

        <div class="modal fade fixed-right" id="add_modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog  modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header align-items-center">
                                            <div class="modal-title">
                                                <h6 class="mb-0">Register New Fiscal Year</h6>
                                            </div>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" enctype="multipart/form-data" role="form">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="">Fiscal Year Start</label>
                                                        <!-- Hide This -->
                                                        <input type="text" required name="fiscal_year_start" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Fiscal Year End</label>
                                                        <input type="text" required name="fiscal_year_end" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Allocated Amount</label>
                                                        <input type="text" required name="fiscal_year_budget_amount" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Status</label>
                                                        <select class="form-control basic" name="fiscal_year_status">
                                                            <option>Active</option>
                                                            <option>Pending</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" name="Add_Fiscal_Year" class="btn btn-warning">Add</button>
                                                </div>
                                                <br>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>           
                  

                <?php }
        } ?>
                <?php include('../partial/footer.php') ?>
                    </section>
                    <?php include('../partial/script.php') ?>

                </body>

                </html>