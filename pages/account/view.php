<div class="card">
    <div class="card-header">
        ข้อมูลสมุดบัญชี
    </div>
    <div class="card-body">
        <button class="btn btn-success">เพิ่มบัญชีใหม่</button>
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
                        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                        echo '
                            <tr>
                                <th scope="row">'.$counter.'</th>
                                <td>'.$row["account_id"].'</td>
                                <td>'.$row["account_name"].'</td> 
                                <td>'.$row["account_date"].'</td>
                                <td>
                                    <button class="btn btn-warning">แก้ไขบัญชี</button>
                                    <button class="btn btn-danger">ลบบัญชี</button>
                                </td>
                            </tr>
                        ';
                        $counter = $counter + 1;
                    }
                ?>



                <!-- <tr>
                    <th scope="row">1</th>
                    <td>ACC-00003</td>
                    <td>มูฮัมหมัด มะดงแซ</td>
                    <td>6/11/2565 17.00 น.</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>ACC-00002</td>
                    <td>ซอฟียะห์ บากา</td>
                    <td>6/11/2565 17.00 น.</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>ACC-00001</td>
                    <td>มูฮัมหมัดอาริฟ หยีดาโอะ</td>
                    <td>6/11/2565 17.00 น.</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>