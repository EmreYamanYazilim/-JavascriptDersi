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


<script>
    function topla(a,b) {
        return a+b;
    }

    var sonuc = topla(10, 20);
    console.log(sonuc);
    // yada değişken atamak yerine  direk log içinede yazabiliriz
    console.log(topla(40, 55));

    var simdi = 2024;
    function yashesapla(yas) {
        return simdi-yas;
    }
    var emre = yashesapla(1988);
    console.log(emre);

    function emeklilikhesapla(ad, yas) {
        var k_yas = yashesapla(yas);
        var emeklilik = 65 - k_yas;

        if (emeklilik > 0) {
            console.log(ad + " " + emeklilik + "sene sonra  emekli olabilir ");

        } else{
            console.log("sayın"+" "+ad + " zaten emekli oldunuz");
        }
    }

    emeklilikhesapla('emre', '1950');



    function tekcift(sayi) {
        if (sayi % 2 == 0) {
            return true;
        }else{
            return false;
        }
    }
    var sayi = tekcift(17);
    console.log(sayi);

    if (tekcift(18)) {
        console.log("sayı çifttir");
    }else{
        console.log("sayı tektir");
    }

    var modeller = ["opel", "mazda", "reno"];

    function yazdir(dizi) {
        dizi.forEach(function (item) {
            console.log(item);
        });
    }

    yazdir(modeller);



</script>
</body>
</html>