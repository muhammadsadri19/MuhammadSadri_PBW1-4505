<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!---Sample 1--->
<?php
$jurusan = "D3 Rekayasa Perangkat Lunak Aplikasi";
echo "<br>".substr($jurusan, 3);
echo "<br>".substr($jurusan, -8);
echo "<br>".substr($jurusan, 3, 24);
?>

<br>
<br>

<!---Sample 2--->
<?php

$strings = array (
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain' 
    );
    $search = array (
    'Abdullah',
    'kucing',
    'lucu',
    'bermain' 
    );
    
    $replace = array (
        'Abdurrahman',
        'bebek',
        'gemuk',
        'berenang' 
        );
        $replaced = str_replace ( $search, $replace, $strings );
        foreach ($replaced as $key => $value) {
        echo $value."<br>";
        }
?>

<br>
<br>

<!---Sample 3--->
<?php 
$str = 'My Password'; 
$user = 'username'; 
echo sprintf("The md5 hashed password of %s is: %s\n", $str, md5($str.$user)); 
echo '<br>';
echo sprintf("The sha1 hashed password of %s is: %s\n",$str, sha1($str.$user)); 
echo '<br>';
echo sprintf("The gost hashed password of %s is: %s\n",$str, hash('gost', 
$str.$user)); 
echo '<br>';

?>

<br>
<br>

<!---Sample 4--->
<?php 
function cekPrima($n, $m){

    if($n >= $m){
        echo "Batasan nilai salah !";
    }else{
        $jumlah = 0;
        for ($n; $n <= $m; $n++) { 
            $counter = 0;

            for ($i=1; $i <= $m ; $i++) { 
                if($n % $i == 0){
                    $counter++;
                }
            }
            if($counter == 2){
                echo "$n, ";
                $jumlah++;
            }
        }

        echo 'ditemukan ' .$jumlah. ' bilangan Prima<br>';
    }
}
cekPrima(1, 11);
?>

<br>
<br>


<!---Sample 5--->
<?php 

function isPrime($number){
    //cek 1 bukan bilangan prima
    if($number == 1){
        return false;
    }

    //cek 2 hanya satu-satunya bilangan genap berupa bilangan prima
    if($number == 2){
        return true;
    }

    //algoritma akar kuadrat mempercepat pengujian bilangan prima yang lebih besar
    $x =  sqrt($number);
    $x = floor($x);

    for ($i = 2; $i <= $x ; $i++) { 
        if($number % $i == 0){
            break;
        }
    }

    if($x == $i - 1){
        return true;
    }else{
        return false;
    }
}

function cekAngkaPrima($n, $m){
    $jumlah = 0;
    for ($i = $n; $i <= $m; $i++) { 
        if(isPrime($i)){
            echo $i. ', ';
            $jumlah++;
        }
    }
    echo "<br>jumlah bilangan prima ".$jumlah. "<br>";
}

cekAngkaPrima(0, 100);
?>
</body>
</html>
