<!-- 1 -->
<?php
for( $a=1;$a<=5;$a++){
    for($b=1;$b<=$a;$b++){
        echo" * ";
    }
echo"<br>";
}
for($a=1; $a<=5; $a++){
    for($c=5; $c>=$a; $c--){
        echo ' * ';
    }   
    echo "<br>";
}
?>
<!-- 2 -->
<?php
foreach(range(1, 50) as $number) {
    if ($number % 3 != 0 && $number % 5 != 0) {
      echo $number . '<br>';
      continue;
    }
    if ($number % 3 == 0 && $number % 5 == 0) echo $number . 'Halo saya hasil merupakan hasil kelipatan dari tiga dan 5';
    if ($number % 3 == 0 && $number % 5 != 0) echo $number .'Halo saya kelipatan tiga';
    if ($number % 5 == 0 && $number % 3 != 0) echo $number . 'Halo saya kelipatan lima';
    
    echo '<br>';
  }
?>
<!-- 3 -->
<?php
$jumlah = 0;
for ($i = 30; $i <= 100; $i++) {
echo "$i + ";
$jumlah += $i;
}
echo "<br/>Jumlah = $jumlah";
?>
<!-- 4 -->
<html>
<body>
<form action="tes.php" method="post">
Apakah akar kuadrat dari 5?<br>
<input name="angka" type="text" placeholder="masukan nilai"/>
<input name="hitung" type="submit" value="Proses" />

<?php 
	if(isset($_POST['hitung'])){
        $y = $_POST['angka'];
        if(sqrt($y)==5){
            echo $y." merupakan hasil perkalian pangkat dari  5";
            }else{
            echo $y." bukan hasil perkalian pangkat dari 5";
        };
        }
	?><br>
    </form>
</body>
</html>
<!-- 5 -->

<!--6-->
<?php
$warna = array('merah', 'kuning', 'hitam',);

echo "Ibu saya pergi berbelanja memakai tas berwarna $warna[0], dan baju berwarna $warna[1], dan memakai sandal berwarna $warna[2].";
?>

<!--7-->
<?php
$a=array("1","2","3","4","5");
array_splice($a, 2,0,"##");
print_r($a); 
?>