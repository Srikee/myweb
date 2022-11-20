<?php
    session_start();

    include("config/autoload.php");  // ดึงการติดต่อฐานข้อมูล

    if( !isset($_SESSION["auth"]) ) {
        header("location: ./login.php");
        exit();
    }


    if( isset($_GET["page"]) )
        $page = $_GET["page"];
    else 
        $page = "home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link href="assets/index.css" rel="stylesheet">
</head>

<body>
    <?php include("master/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <?php include("master/menu.php"); ?>
            </div>
            <div class="col-9">
                <?php include("pages/".$page."/view.php"); ?>
            </div>
        </div>
    </div>
    <?php include("master/footer.php"); ?>
</body>

</html>