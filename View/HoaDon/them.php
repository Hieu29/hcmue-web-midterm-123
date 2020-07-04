<div style="width: 400px; margin: 0 auto;">
<h2><span><a href="index.php?mod=hoadon&act=them">Đặt hàng</a></span></h2>
  <p>
  	<form class="form" method="post" action="index.php?mod=hoadon&act=them" onSubmit="return IsInsertOrder()">
        <p><label>Tên Khách Hàng (*)</label>
        	<select name="txtKhachHang" id="cars">
        		<?php
        			foreach ($khachHangs as $row) {
        				# code...
        				echo '<option value='.$row["MaKH"].">".$row["HoTen"]."</option>";
        			}
        		?>
			    
		  </select>        
		</p>

        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" style="margin-left:140px;"/></p>
        <p id="error" class="error"></p>
    </form>
  </p>
</div>
<?php
	include_once("Controller/Cart/Detail.php");
?>