<div class="list-group">
    <a href="./" class="list-group-item list-group-item-action <?php if($page=="home") echo "active"; ?>">หน้าแรก</a>
    <a href="./?page=deposit"
        class="list-group-item list-group-item-action <?php if($page=="deposit") echo "active"; ?>">ฝากเงิน</a>
    <a href="./?page=widthdraw"
        class="list-group-item list-group-item-action <?php if($page=="widthdraw") echo "active"; ?>">ถอนเงิน</a>
    <a href="./?page=check-balance"
        class="list-group-item list-group-item-action <?php if($page=="check-balance") echo "active"; ?>">ตรวจสอบยอดเงิน</a>
    <a href="./?page=account"
        class="list-group-item list-group-item-action <?php if($page=="account") echo "active"; ?>">ข้อมูลสมุดบัญชี</a>
</div>