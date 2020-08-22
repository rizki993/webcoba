<html>
    <head>
        <title>Percabangan if</title>
    </head>
<body>

    <!-- percabangan if -->
    <?php
        $quiz=80;
        $tugas=80;
        $uts=90;
        $uas=100;
        $nilaiakhir=((0.10*$quiz)+(0.20*$tugas)+(0.30*$uts)+(0.40*$uas));

        echo"Nilai Quiz : .$quiz<br>";
        echo"Nilai tugas : .$tugas<br>";
        echo"Nilai UTS : .$uts<br>";
        echo"Nilai UAS : .$uas<br>";

        printf("Nilai :%.2f <hr>" ,$nilaiakhir);

        if($nilaiakhir>85){
            echo"Grade A";
        }else if($nilaiakhir>75){
            echo"Grade B";
        }else if($nilaiakhir>50){
            echo"Grade C";
        }else if($nilaiakhir>40){
            echo"Grade D";
        }else{
            echo"Grade E";
        }
    
    ?>

</body>
</html>