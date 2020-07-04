<br>	
<div style="width: 1000px; float: right;">
<h2><span><a href="admin.php?mod=hoadon&act=manage">Quản lý đơn hàng</a></span></h2>
<p>
    <?php
    echo "<div style=\"width:300px;\">";
	foreach($order as $row)
	{
		$count = 0;
		echo "<p>Mã đơn hàng: $row[MaHD]</p>";
		echo "<p>Tên khách hàng: $row[HoTen]</p>";
		echo "<p>Ngày đặt hàng: $row[NgayLapHD]</p>";
		$item = $oi->getChiTietHoaDonByHoaDonId($row['MaHD']);
		echo "<table>";
		echo "<tr><td>Tên sản phẩm</td><td>Số lượng</td><td>Giá</td></tr>";
		$sum=0;
		foreach($item as $rowitem)
		{
			echo "<tr><td>";
			echo $rowitem['TenHH']."</td><td>";
			echo $rowitem['SoLuong']."</td><td>";
			echo $rowitem['DonGia']."</td>";
			echo "</tr>";
			$sum+=$rowitem['SoLuong']*$rowitem['DonGia'];
		}
		echo "</table>";
		echo "Tổng đơn hàng là: ".$sum. "(VNĐ)";
		echo "<br>";
		echo "<a href=\"admin.php?mod=hoadon&act=xoa&id=$row[MaHD]\" onclick=\"return IsDelete()\">Xóa đơn hàng<img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<hr/>";
	}
	?>
    </table>
	</div>
</p>
</div>