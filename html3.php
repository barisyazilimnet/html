<html>
<body>
<form name="yazdirma" method="post" action="#">
<label>Sayıyı Giriniz:</label>
<input type="text" name="sayi"></input>
</form>
<?php
if($_POST){
    $sayi=$_POST["sayi"];
    for($i=0; $i<$sayi; $i++)
    echo "<font color='red'><b>Çok Konuşuyon Rabiaaaaaa</b></font><br>";
}
?>
</body>
</html>