<h4>Tambah Data</h4>
<br>
<form action="index.php?mod=produk&page=save" method="POST">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Nama Tamu</label>
            <input type="text" name="nama_tamu" required value="<?=(isset($_POST['nama_tamu']))?$_POST['nama_tamu']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['nama_tamu']))?$err['nama_tamu']:'';?></span>
        </div>
        <div class="form-group">
            <label for="">NIK</label>
            <input type="text" name="nik" required value="<?=(isset($_POST['nik']))?$_POST['nik']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" required value="<?=(isset($_POST['jenis_kelamin']))?$_POST['jenis_kelamin']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="number" name="alamat" required value="<?=(isset($_POST['alamat']))?$_POST['alamat']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>