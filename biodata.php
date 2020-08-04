<html>
    <head>
        <title>Biodata with metode post</title>
    </head>
<body>
    <form action="" method="POST">
        <label for=""> Nama :</label>
        <input type="text" name="nama_lengkap">
        <br>
        <label for=""> Tanggal Lahir :</label>
        <input type="date" name="tgl">


        <input type="submit" name="input" value="Tampilkan">
    </form>      
    <?php
        if (isset($_POST["input"])){
            
            $nama =$_POST["nama_lengkap"];
            $tanggal =$_POST["tgl"];

            echo"$nama <br> $tanggal";
        }
    
    
    ?>



</body>


</html>