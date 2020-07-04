<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sản Phẩm Mới</h2>
                        <div class="product-carousel">



<?php
	foreach($rs as $row){
		// $chuoi = <<<EOD
							
				echo "<div class=\"single-product\">";
                echo    "<div class=\"product-f-image\">";
                echo        "<img src=\"Upload/{$row['Hinh']}\" style=\"height:265px;\">";
                echo        "<div class=\"product-hover\">";
                echo           "<a href=\"Controller/Cart/Add.php?id={$row['MaHH']}\" onclick=\"return insertCart({$row['MaHH']})\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Thêm vào giỏ hàng</a>";
                           
                echo       "</div>";
                echo   "</div>";
                    
                echo    "<h2><a href=\"index.php?mod=products&act=detail&id={$row['MaHH']}\">{$row['TenHH']}</a></h2>";
                    
                echo    "<div class=\"product-carousel-price\">";
                echo       "<ins>{$row['DonGia']}$</ins> <del>{$row['DonGia']}$</del>";
                echo    "</div>";
                echo "</div>";

	}
	
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 