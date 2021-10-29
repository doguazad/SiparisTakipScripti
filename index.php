<!DOCTYPE html>
<html lang="tr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
  <center>  <h1>Hos Geldiniz</h1></center>
 <div class="container">
 <h2>Siparis ver:</h2>
<form name="siparis" action="config.php" method="POST">
<input type="text" name="ad"placeholder="Adınız" required="required"></input> &nbsp;  <input type="text" name="adres" placeholder="Adresiniz" required="required"></input>&nbsp;  <br>     <input class="type2"placeholder="Telefon Numaranız" type="number"  name="telefon" required="required"></input>
&nbsp; <input  class="type2" type="text" name="yemekadi"placeholder="istediğiniz Yemeğin adı" required="required"></input><br><hr>
<div class="card text-center">
<div class="card-body">
  <h5 class="card-title">Döner</h5>
  <p class="card-text">Ekmek Arası Tavuk Döner</p>
  <button href="#" name="doneral" class="btn btn-primary">Satın Al</button>
</div>
<div class="card-footer text-muted">
  10 tl
</div>
</div>
<hr>
<div class="card text-center">
<div class="card-body">
<h5 class="card-title">Tost</h5>
<p class="card-text">Kaşarlı ve sucuklu tost</p>
<button href="#" name="tostal" class="btn btn-primary">Satın Al</button>
</div>
<div class="card-footer text-muted">
8 tl
</div></div><hr>
<div class="card text-center">
<div class="card-body">
<h5 class="card-title">Çiğ Köfte</h5>
<p class="card-text">Dürüm Çüğ Köfte</p>
<button name="cigkofteal" href="#" class="btn btn-primary">Satın Al</button>
</div>
<div class="card-footer text-muted">15 tl</div></div><hr></form></div></body></html>