<div class="list-group">
    <a href="./" class="list-group-item list-group-item-action <?php if($page=="home") echo "active"; ?>">
        <i class="fa-solid fa-house"></i> หน้าแรก
    </a>
    <a href="./?page=deposit"
        class="list-group-item list-group-item-action <?php if($page=="deposit") echo "active"; ?>">
        <i class="fa-solid fa-hand-holding-dollar"></i> ฝากเงิน
    </a>
    <a href="./?page=widthdraw"
        class="list-group-item list-group-item-action <?php if($page=="widthdraw") echo "active"; ?>">
        <i class="fa-solid fa-dollar-sign"></i> ถอนเงิน
    </a>
    <a href="./?page=check-balance"
        class="list-group-item list-group-item-action <?php if($page=="check-balance") echo "active"; ?>">
        <i class="fa-solid fa-spell-check"></i> ตรวจสอบยอดเงิน
    </a>
    <a href="./?page=account"
        class="list-group-item list-group-item-action <?php if($page=="account" || $page=="account-add" || $page=="account-edit") echo "active"; ?>">
        <i class="fa-solid fa-book"></i> ข้อมูลสมุดบัญชี
    </a>
    <a href="./logout.php" onclick="return confirm('คุณแน่ใจต้องการออกจากระบบใช่หรือไม่ ?')"
        class="list-group-item list-group-item-action">
        <i class="fa-solid fa-right-from-bracket"></i> ออกจากระบบ
    </a>
</div>