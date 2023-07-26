<?php
include 'include/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Home-page</title>
<?php
     include 'include/stylelinks.php';
     ?>


</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->

        <?php
        include 'include/navbar.php';
        ?>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.html">Aptech</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Admin</li>
                    <li class="dropdown">
                        <a href="home.php" ><i class="fas fa-house"></i><span>Dashboard</span></a>
                        <a href="user.php" ><i class="fas fa-user"></i><span>User</span></a>
                    </li>
                </ul>
            </aside>
        </div>

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Welcome to Aptech</h1>
                </div>

                <div class="section-body">
                </div>
            </section>
        </div>

        <!-- Start app Footer part -->
     <?php
     include 'include/footer.php';
     ?>
</div>

<!-- General JS Scripts -->
<?php
     include 'include/javascript.php';
     ?>
</body>

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>