<?php
   //NOMOR 3
   if (isset ($_POST['submit_27b3'])){
    $n = $_POST['nnn'];
    $m = $_POST['mmm'];

    for((int) $i=0; $i<$n; $i++){
        for ((int) $j=0; $j<$m; $j++){
            echo '<form action ="" method="POST">
            Input X['.$i.']['.$j.'] : <input type="number" name="x['.$i.']['.$j.']" ><br /><br />';
        }
    }
    
    echo '<input type="hidden" name="n3" value="'.$n.'">
    <input type="hidden" name="m3" value="'.$m.'">
    <input type="submit" name="submit3" >
    </form>';

}

if (isset ($_POST['submit3'])){
    $n = $_POST['n3'];
    $m = $_POST['m3'];
    $x = $_POST['x'];

    echo "Nilai array awal= "."<br/>";
    for ((int) $i=0; $i<$n; $i++){
        for ((int) $j=0; $j<$m; $j++){
            echo 'X['.$i.']['.$j.'] = ' .$x[$i][$j]; echo '&nbsp&nbsp&nbsp';
        }
        echo '<br />';
    }
    echo ' ';


        for ((int) $j=0; $j<$m; $j++){
    $p          = $x[3][$j];
    $x[3][$j]   = $x[0][$j];
    $x[0][$j]   = $p;
    
}
    echo "<br/>";
    echo "Nilai array baru = " ."<br>";
    for ((int) $i=0; $i<$n; $i++){
        for ((int) $j=0; $j<$m; $j++){
            echo 'X['.$i.']['.$j.'] = ' .$x[$i][$j]; echo '&nbsp&nbsp&nbsp';
        }
        echo '<br />';
    }
    echo '<br>';
    for ((int) $i=0; $i<$n; $i++){
        echo '<br>';
        for ((int) $j=0; $j<$m; $j++){
            echo '<br>';
            echo 'X['.$i.']['.$j.'] = ' .$x[$i][$j]; echo '&nbsp&nbsp&nbsp';
        }
    echo ' ';
}
}


?>