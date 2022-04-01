<?php
if(isset($_GET['id_cust'])){
    $id = $_GET['id_cust'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_customer WHERE id_cust='$id'");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) == 1){
    ?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Data Pengguna</h4>
        <form action="index.php?page=dashboard_update" method="post">
            <input type="hidden" name="id_cust" value="<?= $id ?>">
            <div class="mb-2">
                <label for="nama_cust" class="form-label">Nama</label>
            </div>
            <input type="text" name="nama_cust" id="nama_cust" class="form-control" placeholder="Masukkan Nama"
                value="<?= $data['nama_cust']?>">
            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
            </div>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"
                value="<?= $data['alamat']?>">
            <div class="mb-2">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
            </div>
            <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon"
                value="<?= $data['no_telp']?>">
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    }else{
        header("Location:index.php?page=dashboard");    
    }
}else{
    header("Location:index.php?page=dashboard");
}
?>