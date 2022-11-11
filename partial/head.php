<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Appointment</title>
    <link rel="icon" href="../public/img/logo.png" type="image/png">

    <link rel="stylesheet" href="../public/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="../public/vendors/themefy_icon/themify-icons.css" />
    <link rel="stylesheet" href="../public/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="../public/vendors/toastr/toastr.min.css" />


    <link rel="stylesheet" href="../public/vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="../public/css/metisMenu.css">

    <link rel="stylesheet" href="../public/css/style1.css" />
    <link rel="stylesheet" href="../public/css/colors/default.css" id="colorSkinCSS">
    <?php
    /* Alert Sesion Via Alerts */
    if (isset($_SESSION['success'])) {
        $success = $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
</head>