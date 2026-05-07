<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Kategori</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST">
                <?php  
                // tangkap data ID menggunakan GET
                $id = $_GET["id"];
                if(isset($_POST["submit"])) {
                    $kategori = strtolower($_POST["kategori"]);
                    $cek = mysqli_query($koneksi, "SELECT * FROM kategori WHERE LOWER(kategori)='$kategori'");
                    $check = mysqli_num_rows($cek);
                    if($check > 0) {
                        echo "Data yang dimasukkan sudah ada";
                    } else {
                        $query = mysqli_query($koneksi, "UPDATE kategori SET kategori ='$kategori' WHERE id_kategori = '$id'") ;
                        if ($query) {
                            echo"<script>alert('ubah data berhasil');</script>";
                        } else {
                            echo"<script>alert('ubah data gagal');</script>";
                        }
                    }
                }
                $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori=$id");
                $data = mysqli_fetch_assoc($query);
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-4">Nama Kategori</div>
                        <div class="col-md-8"><input type="text" name="kategori" value= "<?= $data["kategori"]; ?>" class="form-control"></div>
                    </div>
                </div>
                <div class="d-flex align-items-center justifiy-content-between mt-4 mb-0">
                    <div class="col-md-4">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>