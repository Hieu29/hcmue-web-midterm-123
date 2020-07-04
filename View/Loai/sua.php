<div style="width: 1000px; float: right; margin: 0 auto;">
<h2><span><a href="admin.php?mod=loai&act=sua&id=<?php echo $id; ?>">Chỉnh sửa loại</a></span></h2>

<form action="admin.php?mod=loai&act=sua&id=<?php echo $id; ?>" method="post" class="form">
	<p><label>Tên loại</label><input type="text" name="txtCategoryName" id="txtCategoryName" value="<?php echo $row['TenLoai']; ?>"/></p>
    <p><label>Mô tả</label><input type="text" name="txtMoTa" id="txtMoTa" value="<?php echo $row['MoTa'] ?>" style="margin-left:  46px;"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" style="margin-left:  74px;"/></p>
</form>

</div>