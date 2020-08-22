<html>
    <head>
        <title>Switch case</title>
    </head>
<body>
    <?php
        $bulan="";
        // statement
        echo"Anda memilih bulan Januari";
        break;

        default:
        // 
        echo"Anda belum memilih nama bulan";
        break;
    
    ?>


    <?php
        $username="operator";
        $password="1111";


        switch($username){
            case "admin"
                echo"Selamat datang admin";
                break;

            case "operator"
                echo"Selamat datang admin";
                break;

            default:
                break;        
        }
    
    ?>


    <?php
        // menggunakan 2 switch
        $username="operator";
        $password="1111";

        switch ($username=="admin" && $password=="1234"){
            case "admin" && "1234" :
                echo"Selamat Datang $username" ;
            break;
        }

        switch ($username=="operator" && $password=="1111"){
            case "operator"&&"1111":

                echo"Selamat Datang $username";
        }
    
    ?>


    <?php
        // menggunakan metode array
        $username="operator";
        $password="1111";

        switch ([$username,$password]) {
            // 
            case ["admin","1234"]:
                // 
                echo"Selamat Datang Admin";
                break;
            
            case ["operator","1111"]
            // 
            echo"Selamat Datang Operator";
            break;
        }
    
    ?>

</body>



</html>