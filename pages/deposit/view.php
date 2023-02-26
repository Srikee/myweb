<div class="card">
    <div class="card-header">
        ฝากเงิน
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="account_id" class="form-label">เลขบัญชี</label>
                <select name="account_id" id="account_id" class="form-select" required>
                    <option value="">กรุณาเลือกบัญชี</option>
                    <?php
                        $sql = "SELECT * FROM account";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                            echo '<option value="'.$row["account_id"].'">'.$row["account_id"].'-'.$row["account_name"].'</option>';
                        }
                    ?>
                </select>
                <div class="form-text">ใส่เลขที่บัญชี ตัวอย่าง ACC-00001</div>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">ยอดเงิน</label>
                <input type="number" class="form-control" id="amount" name="amount">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-submit">ยืนยันการฝากเงิน</button>
        </form>
    </div>
</div>
<?php
    
    // 
    // echo $list_id;

    if( isset($_POST["btn-submit"]) ) {
        $list_id = GetMaxId("list", "list_id");
        $list_date = date("Y-m-d H:i:s");
        $amount = $_POST["amount"];
        $account_id = $_POST["account_id"];
        $staff_id = $_SESSION["staff_id"];
        $list_type = "1";
        $sql = "
            INSERT INTO `list`(
                `list_id`, 
                `list_date`, 
                `amount`, 
                `account_id`, 
                `staff_id`, 
                `list_type`
            ) VALUES (
                '$list_id', 
                '$list_date', 
                '$amount', 
                '$account_id', 
                '$staff_id', 
                '$list_type'
            )
        ";
        $conn->query($sql);
        echo "
            <script>
                alert('ฝากเงินเรียบร้อย');
                 location.href = './?page=deposit';
            </script>
        ";
    }
?>