<div class="row">
    <div class="col-md-12">
        <h4>Tambah Data Pengguna</h4>
        <form action="index.php?page=dashboard_store" method="post">
            <div class="mt-3">
                <label for="nama_cust" class="form-label">Nama</label>
            </div>
            <input type="text" name="nama_cust" id="nama_cust" class="form-control" placeholder="Masukkan Nama">
            <div class="mt-2">
                <label for="alamat" class="form-label">Alamat</label>
            </div>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">
            <div class="mt-2">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
            </div>
            <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon">
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary mt-2">
        </form>
    </div>
</div>