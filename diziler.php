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
<h1>Diziler</h1>

<script>
    var marka = ["opel", "toyoya", "reno", "mazda", "bmw"];
    var ozellik = ["otomatik", "manuel", "yarı otomatik",];
    console.log(marka);
    console.log(marka[3]);

    ozellik.push('renk'); // dizi sonuna ekler
    ozellik.unshift('HB');// dizi başına ekler
    ozellik.pop();        // en sondaki dizi silinir
    ozellik.shift();      // en baştaki dizi silinir
    console.log(ozellik);

    var now = 2024;
    var models = ["opel", "toyoya", "reno", "mazda", "bmw"];
    var years = ["2022", "2021", "2020", "2019", "2000"];

    // for ve foreach sıralama için örnek

    for (var i = 0; i < models.length; i++) {
        console.log(models[i]);
    }

    models.forEach(function (element) {
        console.log(element);
    });


    var model = prompt("arabanızın modelini yazın");
    var year = prompt("arabanızın yaşını yazın");
    models.push(model);
    years.push(year);
    for (var i = 0; i < models.length; i++) {
        console.log(models[i] + ' ' + years[i] + ' ' + (now - years[i]) + ' ' + 'yasinda bir arabanız var');
    }



</script>
</body>
</html>