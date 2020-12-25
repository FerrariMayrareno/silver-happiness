<?php
if (isset ($_POST['submit_27a4'])){
    $n = $_POST['bil'];
    $bil=$n;
    $digit=0;
    

    while($bil != 0){
        $bil = (int) ($bil/10);
        $digit = $digit +1;
    }

    for ( $i=0; $i<$digit ; $i++){
        $hitung = $n%10;
        $aray1[$i]=$hitung;
        $n = (int) ($n/10);
    }


    echo "Array Yang Dimasukkan<br>";
    for ( $i=$digit-1; $i>=0 ; $i--){
        echo "$aray1[$i] &nbsp";
    }

    $min = $aray1[0];
    $posisi = 0;
    $tempat = 0;

    for ($i=$digit-1; $i>=0 ; $i--){
        if ($aray1[$i] <= $min){
            $min = $aray1[$i];
            $posisi = ($digit-$i);
            $tempat = $i;
        }

    }

    echo "<br><br>";
    echo "Nilai Terkecil = $min<br>";
    echo "Letaknya Di Data Ke $posisi<br>";

    // $pertama = 

    $araytemp = $aray1 [($digit-1)];
    $aray1 [($digit-1)] = $aray1[$tempat];
    $aray1[$tempat] = $araytemp;

    echo "<br>Array hasil<br>";

    for ( $i=$digit-1; $i>=0 ; $i--){
        echo "$aray1[$i] &nbsp";
    }



    $temp2 = $aray1[($digit-1)];

    for ( $i=$digit-1; $i>0 ; $i--){
        $geser = ($i-1);
        $aray1[$i] = $aray1[$geser];
    }

    $aray1[0] = $temp2;
        

    echo "<br>Array Setelah Digeser<br>";

    for ( $i=$digit-1; $i>=0 ; $i--){
        echo "$aray1[$i] &nbsp";
    }

}