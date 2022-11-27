<div class="card">
    <div class="card-header">
        เพิ่มข้อมูลสมุดบัญชี
    </div>
    <div class="card-body">
        <a href="./?page=account" class="btn btn-light" style="margin-bottom:20px;">ย้อนกลับ</a>
        <form action="" method="post">
            <div class="mb-3">
                <label for="account_id" class="form-label">เลขที่บัญชี</label>
                <input type="text" class="form-control" id="account_id" name="account_id">
            </div>
            <div class="mb-3">
                <label for="account_name" class="form-label">ชื่อบัญชี</label>
                <input type="text" class="form-control" id="account_name" name="account_name">
            </div>
            <button type="submit" class="btn btn-success" name="btn-submit">ยืนยันการเพิ่ม</button>
        </form>
        <?php
            if( isset($_POST["btn-submit"]) ) {
                $account_id = $_POST["account_id"];
                $account_name = $_POST["account_name"];
                $account_date = date("Y-m-d H:i:s");
                $staff_id = $_SESSION["staff_id"];
                $sql = "
                    INSERT INTO account (
                        account_id,
                        account_name,
                        account_date,
                        staff_id
                    ) VALUES (
                        '$account_id',
                        '$account_name',
                        '$account_date',
                        '$staff_id'
                    )
                ";
                $conn->query($sql);
                echo '
                    <script>
                        alert("เพิ่มบัญชีเรียบร้อยแล้ว");
                        location.href = "./?page=account";
                    </script>
                ';
            }
        ?>
    </div>
</div>