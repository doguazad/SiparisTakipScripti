<?php
include ("access.php");
if (isset($_POST['doneral'])) { echo "Sayın:"; echo "&nbsp;"; echo $_POST['ad']; echo "&nbsp;";
    echo "Döner"; echo "&nbsp;"; echo "Siparişiniz bile ulaşmıştır.";
    echo "&nbsp;"; echo "<br>"; echo "Gönderilecek Adres:"; echo "&nbsp;";
    echo $_POST['adres']; echo "&nbsp;"; echo "<br>"; echo "Telefon Numaranız:";
    echo "&nbsp;"; echo $_POST['telefon'];  
    echo "&nbsp;"; echo "<br>";  echo "IP Adresiniz: "; echo "&nbsp;";
    echo $_SERVER["REMOTE_ADDR"]; header("Refresh: 13; url=index.php?Succes");}

elseif(isset($_POST['tostal'])){
    { echo "Sayın:"; echo "&nbsp;"; echo $_POST['ad']; echo "&nbsp;";
        echo "Tost"; echo "&nbsp;"; echo "Siparişiniz bile ulaşmıştır.";
        echo "&nbsp;"; echo "<br>"; echo "Gönderilecek Adres:"; echo "&nbsp;";
        echo $_POST['adres']; echo "&nbsp;"; echo "<br>"; echo "Telefon Numaranız:";
        echo "&nbsp;"; echo $_POST['telefon'];  
        echo "&nbsp;"; echo "<br>";  echo "IP Adresiniz: "; echo "&nbsp;";
        echo $_SERVER["REMOTE_ADDR"]; header("Refresh: 13; url=index.php?Succes");
}
elseif(isset($_POST['cigkofteal'])){
    { echo "Sayın:"; echo "&nbsp;"; echo $_POST['ad']; echo "&nbsp;";
        echo "Çiğ Köfte"; echo "&nbsp;"; echo "Siparişiniz bile ulaşmıştır.";
        echo "&nbsp;"; echo "<br>"; echo "Gönderilecek Adres:"; echo "&nbsp;";
        echo $_POST['adres']; echo "&nbsp;"; echo "<br>"; echo "Telefon Numaranız:";
        echo "&nbsp;"; echo $_POST['telefon'];  
        echo "&nbsp;"; echo "<br>";  echo "IP Adresiniz: "; echo "&nbsp;";
        echo $_SERVER["REMOTE_ADDR"]; header("Refresh: 13; url=index.php?Succes");
}
else{
    echo "5XX SERVER ERROR";     header("Refresh: 3; url=index.php?ServerError"); }
$save=$db->prepare("INSERT INTO siparistakip set
Adres=:Adres,
Telefon=:Telefon,
IP=:IP,
Siparis=:Siparis,
Ad=:Ad");
$insert=$save->execute(array(
'Adres'=>$_POST['adres'],
'Telefon'=>$_POST['telefon'],
'IP'=>$_SERVER["REMOTE_ADDR"],
'Siparis'=>$_POST['yemekadi'],
'Ad'=>$_POST['ad']));?>