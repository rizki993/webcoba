<html>
    <head>
        <title>Perulangan PHP</title>
    </head>
<body>
    <?php
    // contoh 1
        $i=1;

        for ($i=1; $i<=5 ; $i++){ 
            echo"$i";
        }
    //contoh 2 
        for ($i = 1; ; $i++){
            if($i > 10){
                break;
            }
            echo "$i ";
        }
    echo "<br><br>";

    // contoh 3
    $i=1;
    for (; ; ) {
        if ($i>10){
            break;
        }
    echo "$i ";
    $i++;
    } echo "<br><br>";

    // contoh 4
    for ($i= 1; $i <=10; print"$i", $i++);
    
    ?>

    <?php
    
    $mobil=array(
        "toyota",
        "alphard",
        "Supra",
        "Kijang"
    );

    foreach($mobil as $key => $data){
        echo"".$mobil[2];
    }
    ?>

    <?php
    
    $angka=array(
        1,
        2,
        3,
        4,
    );
    foreach ($mobil as $key => $data){

        echo"".$angka[2]* $angka[3];
    }
    
    
    ?>





</body>
</html>