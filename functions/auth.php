<?php
if(isset($_POST['Login'])) {
    $login_email = mysqli_real_escape_string($mysqli, $_POST['login_email']);
    $login_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['login_password'])));

    $sql1 = "SELECT * FROM  auth WHERE auth_email = '{$login_email}' AND auth_password = '{$login_password}'";
    $sql1 = mysqli_query($mysqli, $sql1);
    $sql2 = "SELECT * FROM  users WHERE user_email = '{$login_email}' AND user_password = '{$login_password}'";
    $sql2 = mysqli_query($mysqli, $sql2);

    if (mysqli_num_rows($sql1) > 0) {
    /* Persist Login */
    $stmt = $mysqli->prepare("SELECT auth_email, auth_password, auth_id,auth_access_level FROM auth 
    WHERE auth_email = '{$login_email}' AND auth_password = '{$login_password}'");
    $stmt->execute();
    $stmt->bind_result($auth_email, $auth_password, $auth_id, $auth_access_level);
    $rs = $stmt->fetch();

    /* Session Variables */
    $_SESSION['login_id'] = $auth_id;
    $_SESSION['login_access_level'] = $auth_access_level;

    if ($rs) {
        /* Pass This Alert Via Session */
        
        $_SESSION['success'] = 'You have successfully logged in Administor';
        header('Location: dashboard.php');
        exit;
    }
   
} elseif (mysqli_num_rows($sql2) > 0) {

    /* Persist Login */
    $stmt = $mysqli->prepare("SELECT user_id,user_email,user_password FROM  users WHERE user_email = '{$login_email}' AND user_password = '{$login_password}' ");
    $stmt->execute();
    $stmt->bind_result($user_id, $user_email, $user_password);
    $rs2 = $stmt->fetch();

     /*Session Variables */

    $_SESSION['login_id'] = $user_id;

   if ($rs2) {
        /* Pass This Alert Via Session */
        $_SESSION['success'] = 'You have successfully logged in As User';
        header("Location: dashboard.php");
        exit;
    }
} else {
        $err = "Access denied please check your email or password";
    }
}
