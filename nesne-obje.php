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

<h1>Nesne  Obje</h1>


<script>
    // 1. obje yöntemi
    var opel = {
        marka: "opel",
        model: "corsa",
        yil: "2020",
        otomatik: true
    }
    console.log(opel);
    console.log(opel.model);
    //yada
    console.log(opel["yil"]);
    console.log(opel.otomatik);

    // 2.obje yöntemi
    var toyota = new Object();
    toyota.marka = "toyota";
    toyota.model = "yaris";
    toyota.yil = "2023";
    toyota.renk = "mavi";
    toyota.ototmaik = true;

    console.log(toyota);// hepsini getirir

    console.log(toyota.marka);
    //yada
    console.log(toyota["marka"]);

    // buradakini değiştirmek istediğimizde
    toyota.model = "auris";
    console.log(toyota);

    // arabalar adında değişkenle hepsini göstermek için

//--------------------------------------
    var arabalar = [
        {
            marka: "opel",
            model: "corsa",
            yil: "2020",
            otomatik: true
        },
        {
            marka: "mazda",
            model: "cx",
            yil: "2022",
            otomatik: true
        }
    ];

    console.log(arabalar); // 2 objedyide döndürür
    console.log(arabalar[0].marka); // ilk arraydaki  marka isimini verir

    for (var i = 0; i < arabalar.length; i++) {
         console.log(arabalar[i]);// yaptığımızda arabalar içindekileri 2 ayrı obje olarak bize getirir
         console.log(arabalar[i].marka); // arabalar içindeki  markaların hepsini sıralı şekilde getirir
    }

    //------------------------------------------

    var calisanlar = [
        {
            adi: "emre",
            soyadi:"yaman",
            telefon:"555555",
            adres:"Edirne",
            meslek:"php developer",
            diller: ["arapca","ingilizce"],
            hobiler:["fps oyunları","yazılım","haberler"]
        },
        {
            adi: "ahmet",
            soyadi: "naga",
            telefon: "6666",
            adres: "istanbul",
            meslek:"çaycı",
            diller:["türkçe","kürtçe"],
            hobiler: ["gezmek","yemek"]
        },
        {
            adi: "muhammed",
            soyadi:"emin",
            telefon:"21312",
            adres: "ankara",
            meslek: "öğretmen",
            diller: ["almanca", "fransızca"],
            hobiler: ["sohbet","gezmek"]
        }
    ];
    // console.log(calisanlar);// hepsini verir
     calisanlar.forEach(function (personel) {
        console.log(personel.adi+" "+personel.soyadi);//personelerin sıralı adı soy adı
         personel.diller.forEach(function (dil) {  //personeli yakaladıktan sonra personel içinden dillere ulabiliriz
             console.log(dil);
         });
    });



</script>

</body>
</html>