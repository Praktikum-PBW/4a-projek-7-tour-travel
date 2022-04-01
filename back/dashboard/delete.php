<?php
if (isset($_GET['id_cust'])){
    $id = $_GET['id_cust'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_customer WHERE id_cust='$id'");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>