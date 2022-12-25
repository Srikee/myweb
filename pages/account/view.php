<div class="card">
    <div class="card-header">
        ข้อมูลสมุดบัญชี
    </div>
    <div class="card-body">
        <a href="./?page=account-add" class="btn btn-success" style="margin-bottom:20px;">
            <i class="fa-solid fa-plus"></i> เพิ่มบัญชีใหม่
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">เลขที่บัญชี</th>
                    <th scope="col">ชื่อบัญชี</th>
                    <th scope="col">วันทีเปิดบัญชี</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $sql = "SELECT * FROM account;";
                    $result = $conn->query($sql);
                    $counter = 1;
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <tr>
                                <th scope="row">'.$counter.'</th>
                                <td>'.$row["account_id"].'</td>
                                <td>'.$row["account_name"].'</td> 
                                <td>'.$row["account_date"].'</td>
                                <td>
                                    <a href="./?page=account-edit&account_id='.$row["account_id"].'" class="btn btn-warning">
                                        <i class="fa-solid fa-pen"></i> แก้ไขบัญชี
                                    </a>
                                    <form action="" method="post" class="d-inline">
                                        <button type="submit" 
                                            name="btn-del" 
                                            value="'.$row["account_id"].'" 
                                            class="btn btn-danger" 
                                            onclick="return confirm(\'คุณแน่ใจต้องการลบใช่หรือไม่ ?\')">
                                            <i class="fa-solid fa-trash"></i> ลบบัญชี
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        ';
                        $counter = $counter + 1;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    if( isset($_POST["btn-del"]) ) {
        $account_id = $_POST["btn-del"];
        $sql = "DELETE FROM account WHERE account_id='$account_id' ";
        $conn->query($sql);
        echo '
            <script>
                alert("ลบบัญชีเรียบร้อย");
                location.href = "./?page=account";
            </script>
        ';
    }
?>