<br>	
<div style="width: 900px; float: right; margin-right: 50px;">
<h2><a href="admin.php?mod=category&act=manage">Quản lý khách hàng</a></h2>

	<table width="100%">
    <tr class="title"><th>Mã khách hàng</th><th>Tên khách hàng</th><th>Điện thoại</th><th>Email</th><th>Xóa</th><th>Sửa</th></tr>
    <?php
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['MaKH']."</td><td>";
		echo $row['HoTen']."</td><td>";
		echo $row['DienThoai']."</td><td>";
		echo $row['Email']."</td><td>";
		echo "<a href=\"admin.php?mod=khachhang&act=xoa&id=$row[MaKH]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=khachhang&act=sua&id=$row[MaKH]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>

<p class="btn-more box noprint"><strong><a href="admin.php?mod=khachhang&act=them">Thêm</a></strong></p>
</div>