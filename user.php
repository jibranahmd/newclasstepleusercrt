<?php
include 'include/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>User-page</title>
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
                    <h1>All Users Data</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                <a href="creatuser.php" class="btn btn-outline">Creat User</a>

                                </div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <td>Id</td>
                                                <td>First Name</td>
                                                <td>Last Name</td>
                                                <td>Gender</td>
                                                <td>Date of Birth</td>
                                                <td>Action</td>
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                        $q = "SELECT * from `users`;";
                                        $result = mysqli_query($conn,$q);
                                        
                                        
                                        ?>
                                        <tbody>
                                        <?php

                                            if(mysqli_num_rows($result) == 0){
                                                ?>
                                                <td colspan="6" class="text-center">No data found</td>
                                                <?php
                                            }
                                        ?>
                                        <?php
                                        while($row = mysqli_fetch_assoc($result)){
                                        ?>    
                                            <tr>
                                                <td><?= $row["user_id"]?></td>
                                                <td><?= $row["first_name"]?></td>
                                                <td><?= $row["last_name"]?></td>
                                                <td><?= $row["gender"]?></td>
                                                <td><?= $row["date_of_birth"]?></td>
                                                <td>
                                                    <a href="edit.php?id=<?=$row["user_id"]?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                                    <a href="delete.php?id=<?=$row["user_id"]?>" class="btn btn-warning"><i class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                            
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
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