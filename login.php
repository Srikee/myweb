<?php
    session_start();
    include("config/autoload.php");
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
    <link rel="stylesheet" href="assets/fontawesome-free-6.2.0-web/css/all.min.css">
</head>

<body style="padding-top: 100px;">

    <form action="" method="post" style="width:300px; margin: auto;">
        <div class="fs-2 mb-4">โปรดเข้าสู่ระบบ</div>
        <div class="mb-3">
            <div>Username</div>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <div>Password</div>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary me-2" name="btn-login">
            <i class="fa-solid fa-right-to-bracket"></i>
            เข้าสู่ระบบ
        </button>
        <button type="reset" class="btn btn-light">
            <i class="fa-solid fa-rotate-right"></i>
            ล้าง
        </button>
    </form>
    <?php
        if( isset($_POST["btn-login"]) ) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM staff WHERE username='$username' AND password='$password' ";
            $result = $conn->query($sql);
            if ($result->num_rows==1) {
                $data = $result->fetch_assoc();
                $_SESSION["auth"] = "Y";
                $_SESSION["staff_id"] = $data["staff_id"];
                // header("location: ./");
                echo "<script>location.href='./';</script>";
            } else {
                echo "<script>alert('Login ไม่ผ่าน Lonig ใหม่สะ!!!');</script>";
            }
            $conn->close();
        }
    ?>
</body>

</html>