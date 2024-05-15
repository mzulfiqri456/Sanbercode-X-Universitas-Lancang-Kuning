<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
      /* 
        SOAL NO 1
        Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

        Contoh: 
        $string = "PHP is never old";
        Output:
        Panjang string: 16, 
        Jumlah kata: 4 
    */
    $example_string = "PHP is never old";

    echo $example_string ;
    echo "<br>Panjang string: " . strlen($example_string) . ", jumlah kata: " . str_word_count($example_string) . "<br>";

    $first_sentence = "Hello PHP!"; 
    $second_sentence = "I'm ready for the challenges"; 
    echo "Panjang string pertama: " . strlen($first_sentence) . ", jumlah kata: " . str_word_count($first_sentence) . "<br>";
    echo "Panjang string kedua: " . strlen($second_sentence) . ", jumlah kata: " . str_word_count($second_sentence) . "<br>";

    
    echo "<h3>Soal No 2</h3>";
       /* 
        SOAL NO 2
        Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
    */
    $string2 = "I love PHP";
    
    echo "<label></label> $string2 <br>";
    $kata = explode(" ", $string2);
    echo "Kata pertama: " . $kata[0] . "<br>";
    echo "Kata kedua: " . substr($string2, 2, 4) . "<br>";
    echo "Kata Ketiga: " . substr($string2, 7, 3) . "<br>"; 

   
    echo "<h3> Soal No 3 </h3>";
         /* 
        SOAL NO 3
        Mengubah karakter atau kata yang ada di dalam sebuah string.
    */
    $string3 = "PHP is old but sexy!";
    echo "$string3<br>"; 
    $modified_string = str_replace("sexy", "awesome", $string3);
    echo "$modified_string"; 
    ?> 
</body>
</html>