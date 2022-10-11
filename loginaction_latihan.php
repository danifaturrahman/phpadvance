<?php
    if (isset($_POST['submit'])) {

        // if (isset($_POST['email']) && isset($_POST['password'])) {
            $fn = fopen ('formdata.txt','r');
            $cek = false;

            while(!feof($fn)) {
            
            $take = fgets ($fn);
            $parts = explode ("|",$take);
            
            // if(isset($parts[0]) && isset($parts[1]) && isset($parts[2]) ){
                if(trim($parts[0])==$_POST['email'] && trim($parts[1])==$_POST['password']){
                    $cek = true;
                    break;
            // }
                }
            }

            fclose( $fn );

            if ($cek) {
                echo "Berhasil Login. Selamat datang $parts[2]";
            } else {
                echo "<br/>"."Email atau Password yang anda masukkan salah.";
                include ('login_latihan.php');
            }

        } else {
            include ('login_latihan.php');
        }
    // }
?>