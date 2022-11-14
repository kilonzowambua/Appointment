<?php
session_start();
include('../config/config.php');
include('../functions/auth.php');
 ?>

<!DOCTYPE html>
<html>
<?php include('../partial/head.php')?>
<body class="crm_body_bg">
    <div class="col-lg-12">
        <div class="white_box mb_30">
            <div class="row justify-content-center">
                <div class="col-lg-4">

                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Log in</h5>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="">
                                    <input type="text" class="form-control" placeholder="Enter Email" name="login_email">
                                </div>
                                <div class="">
                                    <input type="password" class="form-control" placeholder="Enter Password" name="login_password">
                                </div>
                                <button name="Login" type="submit" class="btn_1 full_width text-center">Log in</button>
                                <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal" href="#"> Sign Up</a></p>
                                <div class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php include('../partial/footer.php')?>
   <?php include('../partial/script.php')?>

</body>

</html>