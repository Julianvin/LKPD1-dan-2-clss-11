<?php

function wrapText($text) { /* membuat function */
    $count = str_split($text); /* untuk memecah kata atau string menjadi aray */

    if (count($count) > 50) { /* untuk mengecek apakah panjang kata lebih dari 50 */
        $text = substr($text, 0 , 50); /* untuk mngecek nilai awal start dan akhir jadi bisa di baca (string,mulai,panjang) */
        $text .= "..."; /*menggunakan concet untuk menggabungkan dan merubah kata menjadi ... jika lebih dari 50 */
    }

    echo $text; /* menampilkan output */
}

$kata = "Lorem ipsum dolor sit memet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem."; /* membuat variable kata yang ingin di masukan ke function */

echo "<b>Kalimat awal : </b> " . $kata . "</br>"; /* menampilkan output */

wrapText($kata); /* memanggil function */
?>