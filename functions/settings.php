<?php
#auth add
if(isset($_POST['add_auth'])){
    $auth_first_name=mysqli_escape_string($mysqli,$_POST['auth_first_name']);
    $auth_last_name = mysqli_escape_string($mysqli,$_POST['auth_last_name']);
    $auth_email =mysqli_escape_string($mysqli,$_POST['auth_email']);
    $auth_password =mysqli_escape_string($mysqli,sha1(md5($user_gen_password)));
    $add_sql="INSERT INTO auth(auth_first_name,auth_last_name,auth_email,auth_password)VALUE('{$auth_first_name}','{$auth_last_name}','{$auth_email}','{$auth_password}')";
    if (mysqli_query($mysqli, $add_sql)) {
        $success = "User is added";
    } else {
        $err = "Failed, please try again"; 
    }
    
}
#user update
if(isset($_POST['update_user'])){
 
    $user_id= mysqli_escape_string($mysqli,$_POST['user_id']);
    $user_first_name=mysqli_escape_string($mysqli,$_POST['user_first_name']);
    $user_last_name = mysqli_escape_string($mysqli,$_POST['user_last_name']);
    $user_email =mysqli_escape_string($mysqli,$_POST['user_email']);

    $update_sql="UPDATE users SET user_first_name='{$user_first_name}',user_last_name='{$user_last_name}',user_email='{$user_email}' WHERE user_id ='{$user_id}'";
    if (mysqli_query($mysqli, $update_sql)) {
        $success = "User's Info update";
    } else {
        $err = "Failed, please try again"; 
    }
    

}

#auth update
if(isset($_POST['update_auth'])){
 
    $auth_id= mysqli_escape_string($mysqli,$_POST['auth_id']);
    $auth_first_name=mysqli_escape_string($mysqli,$_POST['auth_first_name']);
    $auth_last_name = mysqli_escape_string($mysqli,$_POST['auth_last_name']);
    $auth_email =mysqli_escape_string($mysqli,$_POST['auth_email']);

    $update_sql="UPDATE auth SET auth_first_name='{$auth_first_name}',auth_last_name='{$auth_last_name}',auth_email='{$auth_email}' WHERE auth_id ='{$auth_id}'";
    if (mysqli_query($mysqli, $update_sql)) {
        $success = "Administrator's Info update";
    } else {
        $err = "Failed, please try again"; 
    }
    

}

?>