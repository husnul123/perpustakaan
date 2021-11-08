<?php
	include "koneksi.php";
?>
<link rel="stylesheet" type="text/css" href="gaya.css">
<link rel="shortcut icon" type="image/png" href="images/detail.png">

                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				                   
                    <li>
                        <a  href="?page=buku"><i class="fa fa-book fa-3x"></i>DATA BUKU</a>
                    </li>


                    <li>
                        <a  href="?page=kategori"><i class="fa fa-laptop fa-3x"></i> KATEGORI</a>
                    </li>

                      
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="spage-inner">
                <div class="row">
                    <div class="col-md-12">
                     	
                     	<?php

                     		$page = @$_GET['page'];
                     		$aksi = @$_GET['aksi'];


                     		if ($page == "buku") {
                     			if ($aksi == "") {
                     				include "page/buku/buku.php";
                     			}elseif ($aksi== "tambah") {
                     				include "page/buku/tambah.php";
                     			}elseif ($aksi== "ubah") {
                                    include "page/buku/ubah.php";
                                }elseif ($aksi== "hapus") {
                                    include "page/buku/hapus.php";
                                }elseif ($aksi== "cetak") {
                                    include "page/buku/cetak.php";
                                }
                     		}elseif ($page == "kategori") {
                     			if ($aksi == "") {
                     				include "page/kategori/kategori.php";
                     			}elseif ($aksi== "tambah") {
                                    include "page/kategori/tambah.php";
                                }elseif ($aksi== "ubah") {
                                    include "page/kategori/ubah.php";
                                }elseif ($aksi== "hapus") {
                                    include "page/kategori/hapus.php";
                                }elseif ($aksi== "cetak") {
                                    include "page/kategori/cetak.php";
                                }
                     		
                     		
                            }

                     	?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
           
    
    
   
</body>
</html>
