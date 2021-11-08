<?php 
     include "koneksi.php";

              $query = $koneksi->query("SELECT max(id_buku) as noakhir from tbl_buku");
              $data = $query->fetch_assoc();
              $kode = $data['noakhir'];
              $urutan = (int) substr($kode, 4, 3);
              $urutan++;
              $huruf = "YES-";
              $nmr = $huruf . sprintf("%03s", $urutan);
                    
     
?>
<!--<link href="https://cdjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">-->
<link rel="stylesheet" type="text/css" href="gaya.css">
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">TAMBAH DATA BUKU PERPUSTAKAAN</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID_BUKU</label>
                  <input type="text" class="form-control" name="id_buku" value="<?php echo $nmr; ?>" readonly>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">GAMBAR SAMPUL</label>
                  <input type="text" class="form-control" name="gambar_sampul" placeholder="Enter Gambar" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">JUDUL</label>
                  <input type="text" class="form-control" name="judul" placeholder="Enter Judul Buku">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">PENGARANG</label>
                  <input type="text" class="form-control" name="pengarang" placeholder="Enter NIK">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">PENERBIT</label>
                  <input type="text" class="form-control" name="penerbit" placeholder="Enter Tempat Lahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">KATEGORI</label>
                  <input type="text" class="form-control" name="kategori" placeholder="Enter Tanggal Lahir">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>


     <?php 

            if (isset($_POST['simpan'])) {
              $id_buku = $_POST['id_buku'];
              $gambar_sampul = $_POST['gambar_sampul'];
              $judul = addslashes( $_POST['judul']);
              $pengarang = addslashes( $_POST['pengarang']);
              $penerbit = $_POST['penerbit'];
              $kategori = $_POST['kategori'];
              

                
                $sql = $koneksi->query("insert into tbl_buku (id_buku,gambar_sampul,judul,pengarang,penerbit,kategori)values('$id_buku','$gambar_sampul','$judul','$pengarang','$penerbit','$kategori')");

                if ($sql) {
                  ?>

                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=buku";
                    </script>
                    

                  <?php
                }


            }
          

     ?>