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


    var dogum = prompt("doğum tarihinizi giriniz ");
    var yil = 2023;
    var yas = yil - dogum;
    console.log(yas);
    if (yas < 18) {
        console.log("ehliyet almazsınız");
    } else {
        console.log("ehliyet alabilirsiniz");
    }


    var ay = prompt("kaçıncı ayda olduğunuzu giriniz  ? ");

    switch (ay) {
        case "1":
        case "2":
        case "3":
            console.log("kış");
            break
        case "4":
        case "5":
        case "6":
            console.log("ilkbahar");
            break
        case "7":
        case "8":
        case "9":
            console.log("yaz");
            break
        case "10":
        case "11":
        case "12":
            console.log("sonbahar");
            break
        default:
            console.log("bilgi yanlış");
    }
</script>
</body>
</html>

</script>

</body>
</html>