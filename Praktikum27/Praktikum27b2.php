<?php
//NOMOR 2
if (isset ($_POST['submit_27b2'])){
    $n = $_POST['nn'];
    $m = $_POST['mm'];

    for((int) $i=0; $i<$n; $i++){
        for ((int) $j=0; $j<$m; $j++){
            echo '<form action ="" method="POST">
            Input X['.$i.']['.$j.'] : <input type="number" name="x['.$i.']['.$j.']" ><br /><br />';
        }
    }
    
    echo '<input type="hidden" name="n2" value="'.$n.'">
    <input type="hidden" name="m2" value="'.$m.'">
    <input type="submit" name="submit2" >
    </form>';

}

if (isset ($_POST['submit2'])){
    $n = $_POST['n2'];
    $m = $_POST['m2'];
    $x = $_POST['x'];

    echo "Nilai array awal= "."<br/>";
    for ((int) $i=0; $i<$n; $i++){
        for ((int) $j=0; $j<$m; $j++){
            echo 'X['.$i.']['.$j.'] = ' .$x[$i][$j]; echo '&nbsp&nbsp&nbsp';
        }
        echo '<br />';
    }
    echo ' ';

    $p         = $x[0][1];
    $x[0][1]   = $x[3][0];
    $x[3][0]   = $p;

    echo "<br/>";
    echo "Nilai array baru = " ."<br>";
    for ((int) $i=0; $i<$n; $i++){
        for ((int) $j=0; $j<$m; $j++){
            echo 'X['.$i.']['.$j.'] = ' .$x[$i][$j]; echo '&nbsp&nbsp&nbsp';
        }
        echo '<br />';
    }
    echo ' ';
}



?>