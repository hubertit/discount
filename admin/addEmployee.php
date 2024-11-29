<?php require("configs/globals.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Employee Registration </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <link href="assets/css/customers/customer-profile.css" rel="stylesheet" type="text/css"/>
    <!--  END CUSTOM STYLE FILE  -->
</head>

<body class="sidebar-noneoverflow">

<!--  BEGIN NAVBAR  -->
<?php require("templates/navBar.php"); ?>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <?php require("templates/sideBar.php"); ?>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-spacing">

                <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing offset-md-2">

                    <div class="skills layout-spacing ">
                        <div class="widget-content widget-content-area">



                            <form action="" method="post" enctype="multipart/form-data" class="ml-5 mr-5 mt-5">
                                <?php require("scripts/main.php"); ?>
                                <h3 class="">Employee Registration</h3>

                                <div class="row mt-3 mb-5">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Names</label>
                                            <input type="text" class="form-control" placeholder="" name="names" value=""
                                                   required>
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control" placeholder="Telephone" name="phone"
                                                   value="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" placeholder="Email" name="email"
                                                   value="" required>
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role">
                                                <option value="Admin">Admin</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Accountant">Accountant</option>
                                                <option value="Driver">Driver</option>
                                                <option value="Cashier">Cashier</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-primary" name="addEmployee">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php require("templates/footer.php"); ?>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="plugins/select2/select2.min.js"></script>
<script src="plugins/select2/custom-select2.js"></script>

<script>
    $(document).ready(function () {

        $(".addEmployee").addClass("active");
        $("#employees").addClass("show");
        App.init();
    });

    var ss = $(".basic").select2({
        tags: true,
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>