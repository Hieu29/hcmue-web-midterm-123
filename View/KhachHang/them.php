<div style="width: 1000px; float: right; margin: 0 auto;">
<h2><span><a href="admin.php?mod=khachhang&act=them">Thêm nhóm thành viên</a></span></h2>

  	<form class="form" method="post" action="admin.php?mod=khachhang&act=them">
        <p><label>Tên khách hàng (*)</label><input type="text" name="txtHoTen" id="txtHoTen" /></p>
        <p><label>Điện thoại</label><input type="text" name="txtDienThoai" id="txtDienThoai" /></p>
        <p><label>Email</label><input type="text" name="txtEmail" id="txtEmail" /></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>
        <p id="error" class="error"></p>
    </form>

</div>