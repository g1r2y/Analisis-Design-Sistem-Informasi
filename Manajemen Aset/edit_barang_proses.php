<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

include('procedure.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Pengelolaan Aset</title>
<link rel="shortcut icon" href="image/favicon.ico" />
<link href="style/Level3_3.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
    	<div> 
        <p>&nbsp;</p>
        <center>
        <div class="nav">
         	<font color="#FFFFFF" size="+2">
         	<?php
				echo koneksi_db();
				$kode=$_POST['kd_brg'];
				$nama=$_POST['nmBrg'];
				$merk=$_POST['merk'];
				$size=$_POST['Sz'];
				$jml=$_POST['Jml'];
				$harga=$_POST['hrg'];
				$ket=$_POST['ket'];
				$sql="UPDATE barang SET nama_brg='$nama',merk='$merk',ukuran='$size',jumlah=$jml,harga_satuan=$harga,total_biaya=$jml*$harga,keterangan_brg='$ket' WHERE kode_brg='$kode'";
				$res=mysql_query($sql);
				echo "Data Barang Berhasil Di Update";
			?>
         	</font>
         </div>
        </center>
  </div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>