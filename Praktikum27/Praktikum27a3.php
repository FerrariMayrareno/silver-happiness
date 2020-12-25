
            <?php
                //Nomor 3
                if (isset ($_POST['submit_27a3'])){
                    $nx = $_POST['nx'];
                    $ny = $_POST['ny'];

                    echo "<br>";
                    echo "Array X";
                    for ((int) $i=0; $i<$nx ; $i++){
                        echo "</br>";
                            echo '
                                <form method = "POST">
                                    Masukkan X['.$i.'] : <input type = "number" name="x['.$i.']" required="required"/>
                            ';
                    }
                    echo "<br>";
                    echo "Array Y";
                    for ((int) $i=0; $i<$ny ; $i++){
                        echo "</br>";
                        echo '
                            <form method = "POST">
                                Masukkan Y['.$i.'] : <input type = "number" name="y['.$i.']" required="required"/>
                        ';
                       
                }
                echo "</br>";
                
                    echo '
                                    <input type="hidden" name="n1" value="'.$nx.'"/>
                                    <input type="hidden" name="n2" value="'.$ny.'"/>
                                    <input type="submit" name="submit1" value="Submit" />
                                </form>
                    ';
                    
                }

                if (isset ($_POST['submit1'])){
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $x  = $_POST['x'];
                    $y  = $_POST['y'];

                  //penggabungan Array X dan Y
    $jumlah = $n1+$n2;
    $p=0;
    for ((int) $i=0; $i<$jumlah; $i++){
        if ($i<$n2){
            $z[$i]  = $y[$i];
            echo"$z[$i]";
        } else {
            $z[$i]  = $x[$p];
            $p=$p+1;
            echo "$p";
        }
    }
 
    


    echo "<br>";
    echo "Hasil Tampilan Digabung  Array : <br>";
    for ((int) $i=0; $i<$n2+$n1 ; $i++){
        echo "Z".($i+1)." = ".$z[$i]  . "\t";
    }

}


                  
                    
                
            
            ?>
 