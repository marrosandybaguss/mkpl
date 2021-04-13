<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />

    <!-- STYLES -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap-grid.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap-grid.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/css/simple-sidebar.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/css/custom.css') ?>" rel="stylesheet">

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- SIDEBAR -->
        <?php include("includes/sidebar.php"); ?>
        <!--  -->

        <!-- PAGE CONTENT -->
        <div id="page-content-wrapper">
            <?php include("includes/header.php"); ?>

            <?php

            include("pages/products.php");

            ?>

        </div>
        <!--  -->

    </div>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('vendor/twbs/bootstrap/dist/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('vendor/twbs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js') ?>"></script>
    <script src="<?php echo base_url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('public/assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('public/assets/js/jquery.min.js') ?>"></script>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>


    <!-- -->

</body>

</html>