<div style="width: 1000px; float: right; margin: 0 auto;">
<h2><span><a href="admin.php?mod=hanghoa&act=them">Thêm sản phẩm</a></span></h2>

  	<form class="form" method="post" action="admin.php?mod=hanghoa&act=them" enctype="multipart/form-data">
        <p><label>Tên sản phẩm (*)</label><input type="text" name="txtProductName" id="txtProductName" style="margin-left: 10px;" /></p>
        <p><label>Loại (*)</label>
        <select name="slCategory" style="margin-left: 50px;">
        	<option value="0">Chọn loại</option>
            <?php
				foreach($cate as $row)
				{
					echo "<option value=\"$row[MaLoai]\" >$row[TenLoai]</option>";
				}
			?>
        </select></p>
        
        <p><label>Giá (*)</label><input type="text" name="txtPrice" id="txtPrice" value="0" style="margin-left: 85px;"/></p>
        <p><label>Ảnh hiển thị</label><input type="file" name="txtImageUrl" id="txtImageUrl" value="Chọn file" style="margin-left: 125px;"/></p>

        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave"/></p>
        
        <p id="error" class="error"></p>
    </form>
</div>