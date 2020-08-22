<?php
include "header.php";
?>
    <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Postingan</h4>
                        <p class="card-description">
                        Masukkan Postingan Anda
                        </p>
                        <form class="forms-sample" action="proses/proses_inputuser.php" method="POST" >
                            <div class="form-group">
                                <label for="exampleInputName1">Judul Postingan</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="Judul">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Konten</label>
                                <input type="password" class="form-control" id="exampleInputName1" placeholder="Password" name="pass">
                            </div>
                            
                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal di-posting</label>
                                    <input type="date" class="form-control" id="exampleInputName1" placeholder="">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-success mr-2" name="input_user">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                    </div>
            </div>
    </div>

<?php
include "footer.php";
?>
</body>
</html>