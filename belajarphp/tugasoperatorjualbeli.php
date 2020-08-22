<h>
    <head>
        <title>Tugas jual beli operator</title>
    </head>
<body>
    <?php
        $uang=60000;
        $aqua=3000;
        $mie=2500;
        $saus=5000;
        $jumlah_aqua=2;
        $jumlah_mie=3;
        $total=((2*$aqua)+($mie*3)+($saus*1));
        $kembalian=(($uang)-($total));

        echo"Uang Budi :Rp $uang<br>";
        echo"Aqua  :Rp $aqua<br>";
        echo"mie  :Rp $mie<br>";
        echo"saus  :Rp $saus<br>";
        echo"Jumlah Aqua dibeli  : $jumlah_aqua<br>";
        echo"Jumlah mie dibeli  : $jumlah_mie<br>";
        echo"Total pembelian :Rp $total<br>";
        echo"Total kembalian :Rp $kembalian<br>";

        echo"<hr>Uang Budi :Rp $kembalian";
    
    ?>

</body>

</h