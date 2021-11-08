<?php 
     include "koneksi.php";

              $query = $koneksi->query("SELECT max(id_kategori) as noakhir from tbl_kategori");
              $data = $query->fetch_assoc();
              $kode = $data['noakhir'];
              $urutan = (int) substr($kode, 5, 3);
              $urutan++;
              $huruf = "BOOK-";
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
              <h3 class="box-title">TAMBAH DATA KATEGORI BUKU PERPUSTAKAAN</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID_BUKU</label>
                  <input type="text" class="form-control" name="id_kategori" value="<?php echo $nmr; ?>" readonly>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">KATEGORI BUKU</label>
                  <input type="text" class="form-control" name="kategori" placeholder="Enter Kategori" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">DISKRIPSI</label>
                  <input type="text" class="form-control" name="diskripsi" placeholder="Enter Judul Buku">
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
              $id_kategori = $_POST['id_kategori'];
              $kategori = $_POST['kategori'];
              $diskripsi = addslashes( $_POST['diskripsi']);
             
              

                
                $sql = $koneksi->query("insert into tbl_kategori (id_kategori,kategori,diskripsi)values('$id_kategori','$kategori','$diskripsi')");

                if ($sql) {
                  ?>

                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=kategori";
                    </script>
                    

                  <?php
                }


            }
          

     ?>