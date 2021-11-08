<?php
    include "../../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>
	<style type="text/css">
		body{font-family:Arial;}
		h1{margin:0; font-weight:bold;}
		h2{margin:20; font-weight:bold;}
		h3{margin:0; font-weight:bold;}
		h4{margin:0; font-weight:bold;}
		h5{margin:0; font-weight:bold;}
		h6{margin:0; font-weight:bold;} 
		p{margin:0;}
		.kop{text-align:center;}
		.left{width:100%; float:left; height:auto; overflow: hidden;}
		.right{width:100%; float:right; height: auto; overflow:hidden; margin-bottom:100px;}
	</style>
</head>

<body onload="window.print()">

	<h4 align="center">DAFTAR BUKU PERPUSTAKAAN</h4> <br>
	
	<table border="2" align="center">
		<caption>   </caption>
		<thead>
			<tr>
		        <th>NO</th>
		        <th  width="15%" align="center">ID BUKU</th>
		        <th >GAMBAR SAMPUL</th>
		        <th width="35%" align="center">JUDUL</th>
		        <th >PENGARANG</th>
		        <th >PENERBIT</th>
		        <th >KATEGORI</th>
       
             </tr>
		</thead>
		<tbody>
			<?php 
			$NO = 1;
			$sql = mysqli_query($koneksi,"select * from tbl_buku");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $NO++; ?></td>
              <td><?php echo $data['id_buku'] ?></td>
              <td><?php echo $data['gambar_sampul'] ?></td>
              <td><?php echo $data['judul'] ?></td>
              <td><?php echo $data['pengarang'] ?></td>
              <td><?php echo $data['penerbit'] ?></td>
              <td><?php echo $data['kategori'] ?></td>
			</tr>
			<?php 
			}
			?>
			<table width="100%" border="0">
							<tr>
								<td width="30%"></td>
								<td width="30%"></td>
								<td width="30%">
									<br>
									Praya, <?php echo date("d F  Y"); ?><br>
									Petugas <br><br><br><br>
									<b>____________________<br><b>

								</td>
							</tr>
						</table>
		</tbody>
	</table>
</body>