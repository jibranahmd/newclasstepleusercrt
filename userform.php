<?php
$conn = mysqli_connect("localhost", 'root', '', 'phpdatabase') or die("connection not established!");
?>

<!DOCTYPE html>
<html lang="en">

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> &mdash; Edit User</title>

    <?php

    include 'include/style.php';


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
            <?php
            include 'include/sidebarcontent.php';
            ?>

            <!-- Start app main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Edit</h1>

                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="First NAme">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa-solid fa-calendar"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                                        </div>
                                                        <input type="radio" class="form-control" id="inlineFormInputGroup" placeholder="First NAme">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php
            include 'include/footer.php'
            ?>
        </div>
    </div>

    <?php
    include 'include/script.php';
    ?>
</body>

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->

</html>

<!-- <div class="card-body"> -->