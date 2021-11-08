<?php
    include "koneksi.php";
?>
<link rel="stylesheet" type="text/css" href="gaya.css">
<h3>DAFTAR BUKU PERPUSTAKAAN</h3>
<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px" title="">Tambah</a>
<a target="blank" href="page/buku/cetak.php" class="btn btn-default" style="margin-bottom: 10px" title=""><i class="fa fa-print"></i> Cetak</a>
<table border="2">
	<tr>
        <th >NO</th>
        <th>ID BUKU</th>
        <th >GAMBAR SAMPUL</th>
        <th >JUDUL</th>
        <th >PENGARANG</th>
        <th >PENERBIT</th>
        <th >KATEGORI</th>
        <th>AKSI</th>
             
	</tr>
              <?php 
                        $NO = 1;
                        $sql = $koneksi->query("select * from tbl_buku order by id_buku ");

                        while ($data = $sql->fetch_assoc() ) {
                       //$warna = ($NO%2==1)?"white":"#eeee";
                  ?>
      			<tr>
                  <td align="center"><?php echo $NO++; ?></td>
                  <td ><?php echo $data['id_buku'] ?></td>
                  <td ><?php echo $data['gambar_sampul'] ?></td>
                  <td width="30%"><?php echo $data['judul'] ?></td>
                  <td ><?php echo $data['pengarang'] ?></td>
                  <td ><?php echo $data['penerbit'] ?></td>
                  <td width="10%"><?php echo $data['kategori'] ?></td>
                  <td>
                    
                    <a href="?page=buku&aksi=ubah&id=<?php echo $data['id_buku']; ?>" class=""><i class=""></i><input type="button" class="btn-update"></a>

                    <a onclick="return confirm('Apakah Anda yakin Menghapus Data ini!')" href="?page=buku&aksi=hapus&id=<?php echo $data['id_buku']; ?>" ></i><input type="button" class="btn-delete"></a>

                   </td>
                  
                </tr>
                 <?php
            		 }
        		?>
</table>