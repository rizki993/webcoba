<html>
    <head>
        <title>Login PHP</title>
    </head>
<body>
    <?php
        $username="Rizki";
        $password="admin";

        if($username=="Rizki"&&$password=="admin"){
            echo"Anda berhasil login $username";
        }else{
            echo"password atau username anda salah";
        }
    
    ?>
</body>    
</html>