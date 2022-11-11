<?php
if (isset($_POST['Login'])) {
    $login_email = mysqli_real_escape_string($mysqli, $_POST['login_email']);
    $login_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['login_password'])));

    /* Persist Login */
    $stmt = $mysqli->prepare("SELECT auth.auth_email,auth.auth_email,auth.auth_password,auth.auth_access_level,users.user_id,users.user_email,users.user_password FROM auth,users WHERE (auth.auth_email = '{$login_email}' AND auth.auth_password = '{$login_password}') OR (users.user_email = '{$login_email}' AND users.user_password = '{$login_password}')");
    $stmt->execute();
    $stmt->bind_result($auth_email, $auth_password, $auth_id, $auth_access_level,$user_id,$user_email,$user_password);
    $rs = $stmt->fetch();

    /* Session Variables */
    if($login_email==$auth_email){
    $_SESSION['login_id'] = $login_id;
    $_SESSION['login_access_level'] = $login_access_level;
    }elseif ($login_email==$user_email) {
        $_SESSION['user_id'] = $login_id;

    }
   
    if ($rs) {
        /* Pass This Alert Via Session */
        $_SESSION['success'] = 'You have successfully logged in';
        header('Location: dashboard');
        exit;
    } else {
        $err = "Access denied please check your email or password";
    }
}
?>