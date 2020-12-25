<?php
//NOMOR 4
if (isset ($_POST['submit_27b4'])){
    $n = $_POST['nnnn'];
    $m = $_POST['mmmm'];

    for((int) $i=0; $i<$n; $i++){
        for ((int) $j=0; $j<$m; $j++){
            echo '<form action ="" method="POST">
            Input X['.$i.']['.$j.'] : <input type="number" name="x['.$i.']['.$j.']" ><br /><br />';
        }
    }
    
    echo '<input type="hidden" name="n4" value="'.$n.'">
    <input type="hidden" name="m4" value="'.$m.'">
    <input type="submit" name="submit4" >
    </form>';

}

if (isset ($_POST['submit4'])){
    $n = $_POST['n4'];
    $m = $_POST['m4'];
    $x = $_POST['x'];

    echo "Nilai array = "."<br/>";
    for ((int) $i=0; $i<$n; $i++){
        for ((int) $j=0; $j<$m; $j++){
            echo 'X['.$i.']['.$j.'] = ' .$x[$i][$j]; echo '&nbsp&nbsp&nbsp';
        }
        echo '<br />';
    }
    echo ' ';

    $min = $x[0][0];
    $baris =0 ;
    $kolom = 0;

    for ((int) $i=1; $i<$n; $i++){
        for ((int) $j=1; $j<$m; $j++){
            if ($x[$i][$j]< $min){
                $min = $x[$i][$j];
                $baris = $i+1 ;
                $kolom = $j+1 ;
            }
        }
    }

    echo "<br/>";
    echo "Nilai minimum = " .$min  ."<br/>";
    echo "Posisi baris = " .$baris ."<br/>";
    echo "Posisi kolom = " .$kolom ."<br/>";
}












?>