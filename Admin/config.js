function forbidden() {
    document.getElementById('icerik').innerHTML="403 FORBİDDEN";
}

let userName = prompt("Kullanici Adinizi Girin");
let Password = prompt("Sifrenizi Girin");


if (userName == "admin" && Password == "pass") {
    console.log("girs basarili");
}
else{
    forbidden();
}



