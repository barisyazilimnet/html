<hmtl>
<body>
<form name="hesapla" method="post" action="#">
<label>1.Sayıyı Giriniz:</label>
<input type="text" name="sayi1"></input>
<br>
<br>
<label>2.Sayıyı Giriniz:</label>
<input type="text" name="sayi2"></input>
<br>
<br>
<input type="submit" value="Hesapla"></input>
<br><br>
<?php

if($_POST){
    $sayi_1=$_POST["sayi1"];
    $sayi_2=$_POST["sayi2"];
    $sonuc1=$sayi_1+$sayi_2;
    $sonuc2=$sayi_1*$sayi_2;
    $sonuc3=$sayi_1/$sayi_2;
    $sonuc4=$sayi_1-$sayi_2;
}  
    echo "<b>İki sayının toplamı :</b>".$sonuc1,
         "<br><b>İki sayının çarpımı :</b>".$sonuc2,
         "<br><b>İki sayının bölümü :</b>".$sonuc3,
         "<br><b>İki sayının farkı :</b>".$sonuc4;
?>
</body>
</html>
