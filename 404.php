<?php
    require('classes/classOrganizationHelper.php');
    $Helper = new OrganizationHelper();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap" rel="stylesheet">
        <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php $Helper->getAsset('dist/css/style.css');?>">

        <title>404 - Page Not Found</title>

        <style>
            body {
                background-color:black;
            }
        </style>
    </head>

    <body class=" bg-black">
        <div class="d-flex vw-100 vh-100">
            <div class="align-self-center mx-auto text-center">
            <img src="<?php $Helper->getAsset('/dist/assets/img/door.gif');?>" alt="A green humanoid figure walking through a door and looking around.">
                <h2 class="text-brand mb-4">404 - Page Not Found</h2>
                <h3 class="text-white">Greenman can't find your content here, try elsewhere</h3>
            </div>
        </div>



    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!-- Custom JS -->
    <script src="<?php $Helper->getAsset('dist/js/app.min.js');?>"></script>
    </body>
    </html>