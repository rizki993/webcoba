<html>
    <head>
        <title>TUGAS BIODATA PHP</title>
    </head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="" class="font-weight-bold" > Nama Lengkap :</label>
        <input class="shadow p-3 mb-5 bg-white rounded" type="text" name="nama_lengkap">
        <br>
        <label for="" class="font-weight-bold"> Tanggal Lahir :</label>
        <input type="date" name="tgl">
        <br>
        <label for="" class="font-weight-bold"> Tempat Lahir :</label>
        <input type="text" name="tempat_lahir">
        <br>
        <label for="" class="font-weight-bold"> Jenis Kelamin :</label>
        <input type="radio" name="jk"> Laki-Laki
		<input type="radio" name="jk"> Perempuan
        <br>
        <label for="" class="font-weight-bold"> Hobby :</label>
        <input type="checkbox" name="membaca" value="membaca">Membaca
		<input type="checkbox" name="traveling" value="traveling">Travelling
		<input type="checkbox" name="jogging" value="jogging">Jogging
		<input type="checkbox" name="maingame" value="maingame">Main Game
		<input type="checkbox" name="ngoding" value="ngoding">Ngoding
        <br>
        <label for="" class="font-weight-bold"> Alamat :</label>
        <textarea name="" placeholder="masukkan_alamat"></textarea>
        <br>
        <label for="" class="font-weight-bold"> Kabupaten/Kota :</label>
        <select name="kota">
			<option value="Banda Aceh">Banda Aceh</option>
			<option value="Aceh Besar">Aceh Besar</option>
			<option value="Pidie">Pidie</option>
			<option value="Bireun">Bireun</option>
			<option value="Lhokseumawe">Lhohseumawe</option>
			<option value="Aceh Jaya">Aceh Jaya</option>
			<option value="Aceh Tengah">Aceh Tengah</option>
			<option value="Simeulu">Simeulu</option>
			<option value="Aceh Tamiang">Aceh Tamiang</option>
			<option value="Meulaboh">Meulaboh</option>
		</select>
        <br>
        <label for="" class="font-weight-bold"> Pendidikan :</label>
        <select name="pendidikan">
			<option>SMP/Sederajat</option>
			<option>SMA/Sederajat</option>
			<option>Strata 1</option>
			<option>Strata 2</option>
			<option>Strata 3</option>
		</select>
        <br>
        <label for="" class="font-weight-bold"> Pekerjaan :</label>
        <input type="text" name="pekerjaan">
        <br>
        <label for="" class="font-weight-bold"> Agama :</label>
        <select name="agama">
			<option>Islam</option>
			<option>Kristen Khatolik</option>
			<option>Protestan</option>
			<option>Hindu</option>
			<option>Budha</option>
			<option>Khonghuchu</option>
		</select>
        <br>
        <label for="" class="font-weight-bold"> Foto Diri </label>
        <input type="file" name="foto">
        <br>
        <label for="" class="font-weight-bold"> Password :</label>
        <input type="password" name="kode">
        <br>
        <label for="" class="font-weight-bold"> Username :</label>
        <input type="text" name="user">
        <br>


        <input class="btn btn-danger" type="submit" name="input" value="Tampilkan">
    </form> 
        
    <?php
        if(isset($_POST["input"])){

            $nama =$_POST["nama_lengkap"];
            $tanggal =$_POST["tgl"];
            $tptLahir =$_POST["tempat_lahir"];
            $jnsKelamin =!empty($_POST["jk"])?$_POST["jk"]:'anda belum memilih jenis kelamin';
            $hobby =!empty($_POST["membaca"])?$_POST["membaca"]:'';
            $hobby2 =!empty($_POST["traveling"])?$_POST["traveling"]:'';
            $hobby3 =!empty($_POST["jogging"])?$_POST["jogging"]:'';
            $hobby4 =!empty($_POST["maingame"])?$_POST["maingame"]:'';
            $hobby5 =!empty($_POST["ngoding"])?$_POST["ngoding"]:'';
            $alamat =$_POST["masukkan_alamat"];
            $kota =$_POST["kota"];
            $pendidikan =$_POST["pendidikan"];
            $kerja =$_POST["pekerjaan"];
            $agama =$_POST["agama"];
            $kode =$_POST["kode"];
            $user =$_POST["user"];

            $foto =$_FILES["foto"]["name"];
            if(move_uploaded_file($_FILES['foto']['tmp_name'],"img/".$_FILES['foto']['name'])){
                echo"Gambar Berhasil Diupload";
            }else{
                echo"Gambar gagal diupload";
            }
            $kode=$_POST["kode"];
            $user=$_POST["user"];


            echo"$nama <br>
            $tanggal <br> 
            $tptLahir <br> 
            $jnsKelamin <br>  
            $hobby <br>
            $hobby2 <br>
            $hobby3 <br>
            $hobby4 <br>
            $hobby5 <br>
            $alamat <br>
            $kota <br> 
            $pendidikan<br>
            $kerja<br>
            $agama<br> 
            $foto<br>
            $kode<br>
            $user<br>";
    
        }
    ?>
    <script src="bootstrap/js/JQUERY.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>





</body>
</html>