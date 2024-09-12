<?php

    function chekcAnswer($name, ...$answers) { /* membuat function chekcAnswer dengan parameter $name dan parameter VARIADIIIII $answers */
        $jawaban = ['A', 'D', 'C', 'C', 'B', 'A', 'D', 'B', 'C', 'A']; /* membuat array jawaban benar */
        $score = []; /* membuat array kosong untuk nilai */

        foreach ($answers as $key => $value) { /* membuat foreach dengan parameter jawaban user di ubah menjadi varible key, dan value $key akan di pindahkan ke  */
            if ($jawaban[$key] == $value) {
                $score[$key] = 1;
            } else {
                $score[$key] = 0;
            }
        };

        echo "Nama: $name <br>";
        echo "Jumlah jawaban benar : <b>" . count(array_keys($score, 1)) . "</b><br>"; /* araykeys digunakan untuk mengetahui berapa array yang memiliki nilai yang di pilih */
        print_r($score);
        echo "Jumlah jawaban salah : <b>" . count(array_keys($score, 0)) . "</b><br><br>";
    }

    chekcAnswer('Rizki', 'A', 'B', 'C', 'D', 'A', 'B', 'C', 'D', 'A'); /* memanggil function dan mengisi dengan parameter nama dan jawaban */
    chekcAnswer('Asep', 'B', 'C', 'D', 'A', 'B', 'C', 'D', 'A', 'B');
    ?>