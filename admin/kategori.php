<?php
include"header.php";
?>

<?php
if (isset($_POST['input_kategori'])) {
    
    $id = uniqid();
    $kategori = $_POST['nama_kategori'];

    if (!empty($kategori)){
        $query_input = "INSERT INTO kategori VALUES(md5('$id),'$kategori')";
        $simpan = mysqli_query($koneksi, $query_input);
        if (isset($_GET['aksi'])) {
            if($simpan && $_GET['aksi'] == 'create'){
                header('location:kategori.php');
            }
        }
    }else {
        echo '<script>alert("Data Gagal disimpan")</script>';
    }

}
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Form Kategori</h4>
                    <p class="card-description">
                        Masukkan Kategori Anda
                    </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Kategori</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukkan nama kategori">
                            </div>

                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>    
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include"footer.php";
?>

</body>
</html>