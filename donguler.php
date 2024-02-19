<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>döngüler</h1>

<script>
    // for döngüsü
    for (var i = 0; i < 10; i++) {
        console.log(i);
    }
    // consolda 1 den 10 e kadar sayı yazdırır

    var sehirler = ["Edirne", "İstanbul", "Ankara", "İzmir", "", "Antalya"];

    for (var i = 0; i < sehirler.length; i++) {
        console.log(sehirler[i]);
    }
    // sehirler.length bize array içerisinde kaçtane  sayı olduğunu verir böylelilke dinamik
    // olarak onları yazdırmış oluruz  log içinedede  sehirleri array i olarak gösterirsek hepsini yazdırır


    // while döngüsü

    var i = 0;
    while (i <= 10) {
        console.log(i);
        ++i;
    }

    var sehirler = ["Edirne", "İstanbul", "Ankara", "İzmir","Antalya"];

    var i = 0;
    while (i < sehirler.length) {
        console.log(sehirler[i]);
        i++;
    }


    for (var i = 0; i < 10; i++) {
        if (i%2==0) {
            console.log(i);
        }
    }

    // i%2==0  mod ile çift sayıları yazdırır
    // i%2==1  mod ile tek sayıları yazdırır

    var i = 0;

    while (i < 100) {

        console.log(i);
        i = i + 5;
    }
    // i'ye 5 er ekleyerek getirir


    var userName = "emre";
    var password = "12345";
    var giris = false;

    while (!giris ) {
        var kullanici = prompt("kullanici Adınızı Giriniz");
        var sifre = prompt("Şifrenizi giriniz");

        if ((userName == kullanici) && (password == sifre)) {
            console.log("Başarılı giriş !!");
            giris = true;
        } else {
            console.log("giriş yapılamadı !!");
        }
    }



</script>

</body>
</html>