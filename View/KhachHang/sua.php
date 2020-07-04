<div style="width: 1000px; float: right; margin: 0 auto;">

<h2><span><a href="admin.php?mod=khachhang&act=sua&id=<?php echo $id; ?>">Chỉnh sửa nhóm thành viên</a></span></h2>

<form action="admin.php?mod=khachhang&act=sua&id=<?php echo $id; ?>" method="post" class="form">
	<p><label>Tên khách hàng (*)</label><input type="text" name="txtHoTen" id="txtHoTen" value="<?php echo $row['HoTen']; ?>"/></p>
        <p><label>Điện thoại</label><input type="text" name="txtDienThoai" id="txtDienThoai" value="<?php echo $row['DienThoai']; ?>"/></p>
        <p><label>Email</label><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row['Email']; ?>"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>

</div>