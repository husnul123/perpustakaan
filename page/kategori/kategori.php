<?php
    include "koneksi.php";
?>
<link rel="stylesheet" type="text/css" href="gaya.css">
<h3>DAFTAR KATEGORI BUKU PERPUSTAKAAN</h3>
<a href="?page=kategori&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px" title="">Tambah</a>
<a target="blank" href="page/kategori/cetak.php" class="btn btn-default" style="margin-bottom: 10px" title=""><i class="fa fa-print"></i> Cetak</a>
<table border="2">
	<tr>
        <th >NO</th>
        <th >ID KATEGORI</th>
        <th >KATEGORI</th>
        <th >DISKRIPSI</th>
        <th>AKSI</th>
             
	</tr>
<?php 
                        $NO = 1;
                        $sql = $koneksi->query("select * from tbl_kategori order by id_kategori ");

                        while ($data = $sql->fetch_assoc() ) {
                       //$warna = ($NO%2==1)?"white":"#eeee";
                  ?>
      			<tr>
                  <td align="center"><?php echo $NO++; ?></td>
                  <td align="center" width="30%"><?php echo $data['id_kategori'] ?></td>
                  <td width="30%"><?php echo $data['kategori'] ?></td>
                  <td width="30%"><?php echo $data['diskripsi'] ?></td>
                  
                  <td>
                    
                    <a href="?page=anggota&aksi=ubah&id=<?php echo $data['id_kategori']; ?>" class=""><i class=""></i><input type="button" class="btn-update"></a>

                    <a onclick="return confirm('Apakah Anda yakin Menghapus Data ini!')" href="?page=anggota&aksi=hapus&id=<?php echo $data['id_kategori']; ?>" ></i><input type="button" class="btn-delete"></a>

                   </td>
                  
                </tr>
                 <?php
            		 }
        		?>
</table>