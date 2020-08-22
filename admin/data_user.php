<?php
include"header.php"
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Profil Instruktur</h4>
                  <p class="card-description">
                    Masukkan Biodata Anda
                  </p>
                  <form class="forms-sample" action="proses/proses_inputuser.php" method="POST" >
                    <div class="form-group">
                      <label for="exampleInputName1">Nama</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" class="form-control" id="exampleInputName1" placeholder="Password" name="pass">
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputName1">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                      <select class="form-control" id="exampleFormControlSelect2">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>

                      </select>
                    </div> -->

                    <div class="form-group">
                      <label for="exampleInputEmail3">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">No HP</label>
                      <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Email" name="nohp">
                    </div>

                    <div class="form-group">
                      <label for="example-FormControlSelect1">Pilih User</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect" name="level">
                      <option value="admin">Admin</option>
                      <option value="Operator">Operator</option>
                      <option value="Autor">Autor</option>
                      </select>
                    </div>

                    <button type="submit" class="btn btn-success mr-2" name="input_user">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kontrol WEB</h4>
                  <p class="card-description">
                    Mengatur Pengguna
                    <code>Semua</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama User</th>
                          <th>E-mail</th>
                          <th>No. hp</th>
                          <th>Level</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $show_query = mysqli_query($koneksi, "SELECT * FROM user");
                      if(mysqli_num_rows($show_query) == 0 ){
                        echo '<tr><td>Tidak ada Data</td></tr>';
                      }else{
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($show_query)){
                        ?>
                          <tr>
                          <td><?php echo $no?></td>
                          <td><?php echo $data['username']; ?></td>
                          <td><?php echo $data['email']; ?></td>
                          <td><?php echo $data['no_hp']; ?></td>
                          <td><?php echo $data['level'] ?></td>
                        
                          <td>
                            <a href="edit_user.php?id=<?php echo $data['id_user']?>" class="btn btn-danger">Edit</a>
                            <a href="" class="btn btn-info">View</a>
                            <a href="proses/proses_hapus.php?id=<?php echo $data['id_user']?>" onclick="return confirm('apakah anda yakin untuk menghapus?')" class="btn btn-danger">Hapus</a>
                          </td>
                        </tr>
                      <?php
                          $no++;
                        }
                      }
                      ?>
                      </tbody>
                    </table>
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