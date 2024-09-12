<?php
function search ($kata){
    echo "Kalimat : " . $kata . "</br>";
    echo 
    $jumlahA = substr_count(strtolower($kata), 'a');
    return $jumlahA;
};

$text = "aa";
search($text);