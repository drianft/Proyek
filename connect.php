<?php 
 $koneksi=mysqli_connect("localhost","root","","tokosinuraya");
    if ($koneksi == false){
        echo "Koneksi ke server gagal.";
        die();
    }

?>