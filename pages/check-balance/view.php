<?php
    $account_id = "";
    $balance = 0;
    if( isset($_POST["btn-submit"]) ) {
        $account_id = $_POST["account_id"];
        // echo $account_id;

        // SQL ดึงผลรวมยอดเงินฝาก
        $sql = "
            SELECT 
                SUM(amount) AS sum1
            FROM `list` 
            WHERE account_id='".$account_id."' AND list_type='1';
        ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $sum1 = $row["sum1"]*1;   // ค่าผลรวมยอดเงินฝาก

        // SQL ดึงผลรวมยอดเงินถอน
        $sql = "
            SELECT 
                SUM(amount) AS sum2
            FROM `list` 
            WHERE account_id='".$account_id."' AND list_type='2';
        ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $sum2 = $row["sum2"];   // ค่าผลรวมยอดเงินถอน
        
        $balance = $sum1 - $sum2;   // ค่ายอดเงินคงเหลือ
        //echo $balance;
    }
?>
<div class="card" style="margin-bottom:20px;">
    <div class="card-header">
        ตรวจสอบยอดเงิน
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
                            $selected = "";
                            if( $row["account_id"]==$account_id ) $selected = "selected";
                            echo '<option value="'.$row["account_id"].'" '.$selected.'>'.$row["account_id"].'-'.$row["account_name"].'</option>';
                        }
                    ?>
                </select>
                <div id="emailHelp" class="form-text">ใส่เลขที่บัญชี ตัวอย่าง ACC-00001</div>
            </div>
            <button type="submit" class="btn btn-primary" name="btn-submit">ตรวจสอบยอดเงิน</button>
        </form>
    </div>
</div>
<div class="card" style="margin-bottom:20px;">
    <div class="card-header">
        ผลการตรวจสอบยอดเงิน
    </div>
    <div class="card-body">
        ยอดเงินคงเหลือ : <?php echo number_format($balance, 0); ?> บาท
    </div>
</div>
<div class="card">
    <div class="card-header">
        ประวัติการฝาก/ถอน เงิน
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <td>วันที่</td>
                <td>การฝาก</td>
                <td>การถอน</td>
                <td>คงเหลือ</td>
            </tr>
            <?php
                $sql = "
                    SELECT 
                        *
                    FROM `list` 
                    WHERE account_id='".$account_id."'
                    ORDER BY list_id ASC;
                ";
                $result = $conn->query($sql);
                $balance = 0;
                while($row = $result->fetch_assoc()) {
                    $list_type = $row["list_type"];
                    $num1 = "-";
                    $num2 = "-";
                    if( $list_type=="1" ) {
                        $num1 = number_format($row["amount"],0);
                        $balance = $balance + $row["amount"];
                    } else if( $list_type=="2" ) {
                        $num2 = number_format($row["amount"],0);
                        $balance = $balance - $row["amount"];
                    }
                    echo '
                        <tr>
                            <td>'.$row["list_date"].'</td>
                            <td>'.$num1.'</td>
                            <td>'.$num2.'</td>
                            <td>'.number_format($balance,0).'</td>
                        </tr>
                    ';
                }
            ?>
        </table>
    </div>
</div>