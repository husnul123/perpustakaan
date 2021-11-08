<?php 
    $kode = $_GET['id'];
    $sql = $koneksi->query("DELETE FROM tbl_buku WHERE id_buku='$kode'");

    if ($sql) {
        ?>

            <script type="text/javascript">
            
            window.location.href="?page=buku";
            </script>

        <?php 
       }              
?>