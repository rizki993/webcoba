<html>
    <head>
        <title>Biodata with metode post</title>
    </head>
<body>
    <form action="" method="GET">
        <label for=""> Nama :</label>
        <input type="text" name="nama_lengkap">
        <br>
        <label for=""> Tanggal Lahir :</label>
        <input type="date" name="tgl">


        <input type="submit" name="input" value="Tampilkan">
    </form>      
    <?php
        if (isset($_GET["input"])){
            
            $nama =$_GET["nama_lengkap"];
            $tanggal =$_GET["tgl"];

            echo"$nama <br> $tanggal";
        }
    
    
    ?>



</body>


</html>