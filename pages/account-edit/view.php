<?php
    $account_id = $_GET["account_id"];

    $sql = "SELECT * FROM account WHERE account_id='$account_id' ";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $account_name = $data["account_name"];
?>
<div class="card">
    <div class="card-header">
        แก้ไขข้อมูลสมุดบัญชี
    </div>
    <div class="card-body">
        <a href="./?page=account" class="btn btn-light" style="margin-bottom:20px;">ย้อนกลับ</a>
        <form action="" method="post">
            <div class="mb-3">
                <label for="account_id" class="form-label">เลขที่บัญชี</label>
                <input type="text" class="form-control" id="account_id" name="account_id"
                    value="<?php echo $account_id; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="account_name" class="form-label">ชื่อบัญชี</label>
                <input type="text" class="form-control" id="account_name" name="account_name"
                    value="<?php echo $account_name; ?>">
            </div>
            <button type="submit" class="btn btn-warning" name="btn-submit">ยืนยันการแก้ไข</button>
        </form>
        <?php
            if( isset($_POST["btn-submit"]) ) {
                $account_id = $_GET["account_id"];
                $account_name = $_POST["account_name"];
                $sql = "
                    UPDATE account SET
                        account_name='$account_name'
                    WHERE account_id='$account_id'
                ";
                $conn->query($sql);
                echo '
                    <script>
                        alert("แก้ไขบัญชีเรียบร้อยแล้ว");
                        location.href = "./?page=account";
                    </script>
                ';
            }
        ?>
    </div>
</div>