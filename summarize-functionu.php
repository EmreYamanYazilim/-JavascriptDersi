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

summarize functionu
özetleme foksiyonu


<script>

    var cumle = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, odit.";

    function ozet(cumle, maxkakter) {
        var ozetcumle = [];
        if (maxkakter > cumle.length) {
            return cumle;

        } else {
            var kelimeler = cumle.split(' ');// boşluklarla ayrılanları array olarak al
            var toplamkarakter = 0;
            for (var i = 0; i < kelimeler.length; i++) {
                toplamkarakter = toplamkarakter + kelimeler[i].length;
                ozetcumle.unshift(kelimeler[i]);//kelimeleri dizi içine aktarma
                if (toplamkarakter > maxkakter) {
                    break;
                }
            }
        }


        return ozetcumle.join(' ')+'...';// arraylar arasına boşluk koy sonunada 3 nokta koy;
    }

    // tekrar tekrar bu işlemi kullanmak için yukarıda bu işlemi function içine alıyoruz


    //direk ozet functionu ile cumleyi ve kaç karakterli olmasını istediğimizi yazabiliriz
    console.log(ozet(cumle, 20));




</script>

</body>
</html>
