<?php
    //NOMOR 1
    if (isset ($_POST['submit_27b1'])){
        $n = $_POST['n'];
        $m = $_POST['m'];

        for((int) $i=0; $i<$n; $i++){
            for ((int) $j=0; $j<$m; $j++){
                echo '<form action ="" method="POST">
                Input X['.$i.']['.$j.'] : <input type="number" name="x['.$i.']['.$j.']" ><br /><br />';
            }
        }
        
        echo '<input type="hidden" name="n1" value="'.$n.'">
        <input type="hidden" name="m1" value="'.$m.'">
        <input type="submit" name="submit1" >
        </form>';

    }

    if (isset ($_POST['submit1'])){
        $n = $_POST['n1'];
        $m = $_POST['m1'];
        $x = $_POST['x'];

        echo "Nilai array = "."<br/>";
        for ((int) $i=0; $i<$n; $i++){
            for ((int) $j=0; $j<$m; $j++){
                echo 'X['.$i.']['.$j.'] = ' .$x[$i][$j]; echo '&nbsp&nbsp&nbsp' ;
                    
            }
            echo '<br />';
        }
        
        echo ' ';
    }