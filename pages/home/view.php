<?php
    $sql = "SELECT * FROM staff WHERE staff_id='".$_SESSION["staff_id"]."' ";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $staff_name = $data["staff_name"];
    $staff_lname= $data["staff_lname"];
?>
<div class="card">
    <div class="card-header">
        หน้าแรก
    </div>
    <div class="card-body">
        <div style="margin-bottom: 30px;font-size:30px;">ยินดีต้อนรับคุณ...</div>
        <div style="font-size:18px;">
            <?php echo $staff_name; ?> <?php echo $staff_lname; ?>
        </div>
    </div>
</div>