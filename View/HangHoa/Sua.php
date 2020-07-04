<div style="width: 1000px; float: right; margin: 0 auto;">
<h2><a href="admin.php?mod=hanghoa&act=sua&id=<?php echo $id; ?>">Chỉnh sửa sản phẩm</a></h2>

<div style="min-height: 420px;margin-top:30px;"> 
		<form action="admin.php?mod=hanghoa&act=sua&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data" >
			<table cellpadding="10" >
				<tr>
					<td>Tên nhà sản phẩm</td>
					<td><input type="text" name="txtProductName" id="txtProductName" value="<?php echo $row['TenHH']; ?>"/></td>
				</tr>
				
				<tr>
					<td>Loại (*)</td>
					<td>
				        <select name="slCategory">
				            <?php
								foreach($cate as $rowcate)
								{
									if($rowcate['MaLoai']==$row['TenLoai'])
									{
										echo "<option value=\"$rowcate[MaLoai]\" selected=\"selected\" >$rowcate[TenLoai]</option>";
									}else{
										echo "<option value=\"$rowcate[MaLoai]\" >$rowcate[TenLoai]</option>";
									}
								}
							?>
				        </select>
			    	</td>
				</tr>

				<tr>
					<td>Giá (*)</td>
					<td><input type="text" name="txtPrice" id="txtPrice" value="<?php echo $row['DonGia']; ?>" /></td>
				</tr>
				<tr>
					<td>Ảnh</td>
					<td><img src="Upload/<?php echo $row['Hinh'] ?>" width="100" /></td>
				</tr>
				<tr>
					<td><input type="file" name="txtImageUrl" id="txtImageUrl"/></td>
					<td>&nbsp;</td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>