<html>
<body>
<form name="hesapla" method="post" action="#">
<label><font color="red"><b>1.Sayı Giriniz :</b></font></label>
<br>
<input type="text" name="sayi1"></input>
<br>
<br>
<label><font color="red"><b>2.Sayı Giriniz :</b></font></label>
<br>
<input type="text" name="sayi2"></input>
<br>
<br>
<input type="submit" value="Hesapla"></input>
<br>
<?php
function carpim($a,$b){
    $toplam = 0;
    for($i=1;$i<=$b;$i++){
		$toplam = $toplam + $a;
} 
	return $toplam;
}
if($_POST){
    $sayi_1=$_POST["sayi1"];
    $sayi_2=$_POST["sayi2"];
    echo "<b>Çarpım Sonucu :</b>".carpim($sayi_1,$sayi_2);
}  
?>
</body>
</html>
