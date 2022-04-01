<?php
if(isset($_POST['tambah'])){
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_cust']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));
    $telp = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_telp']))));

    $query = mysqli_query($koneksi, "INSERT INTO tb_customer VALUES(null,'$nama','$alamat','$telp')");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>