<div id="header">
        <div id="header_DangNhap">
        	<?php 
				if(isset($_SESSION['MaTaiKhoan']) && $_SESSION['MaLoaiTaiKhoan'] == 1)
					include("mThongTinTaiKhoan.php");
				else
					include("mDangNhapTaiKhoan.php");
					
			?>
        </div>
    </div>