<?php
if (isset($_POST['submit'])) {

  // if (isset($_POST['email']) && isset($_POST['password'])) {
      $fn = fopen ('formdata.txt','r');
      $cek = false;

      while(!feof($fn)) {
      
      $take = fgets ($fn);
      $parts = explode ("|",$take);

      if(trim($parts[0])==$_POST['email']){
        $cek = true;
        break;
        }
      }
      fclose( $fn );

      if ($cek) {
        echo "<br/>".$_POST['email'];
        echo "<br/>"."sudah ada! Masukkan email lain";
        include ('formdaftar_latihan.php');
        
      } else {
        $fn = fopen ('formdata.txt','a');
        fputs($fn,$_POST['email']."|".$_POST['password']."|".$_POST['name']."\r\n");
        fclose($fn);

        echo "<br/>".$_POST['email'];
        echo "<br/>"."Sudah terdaftar";
      }

    } else {
      include ('formdaftar_latihan.php');
    }

?>

