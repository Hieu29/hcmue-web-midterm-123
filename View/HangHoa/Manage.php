<br>	
<div style="width: 1000px; float: right; margin-right: 50px;">
<center><h2><a href="admin.php?mod=hanghoa&act=manage">Quản lý sản phẩm</a></h2></center><br>

	<table width="100%">
    <tr class="title"><th>Tên sản phẩm</th><th>Loại</th><th>Giá</th><th>Hình</th><th>Xóa</th><th>Sửa</th></tr>
    <?php

	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['TenHH']."</td><td>";
		echo $row['TenLoai']."</td><td>";
		echo "Giá ".number_format($row["DonGia"],0)." VND</td><td>";
		echo "<img src=\"Upload/$row[Hinh]\" width=\"30\" /></td><td>";
		echo "<a href=\"admin.php?mod=hanghoa&act=xoa&id=$row[MaHH]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=hanghoa&act=sua&id=$row[MaHH]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>

<p class="btn-more box noprint"><strong><a href="admin.php?mod=hanghoa&act=them">Thêm</a></strong></p>
</div> <!-- /article -->