<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <title>
            Praktikum 11
        </title>
    </head>
    <body>
        <pre>
            <?php
                //Nomor 2
                if (isset ($_POST['submit_27a2'])){
                    $n = $_POST['no_2'];
                    $n = 6;

                    for ((int) $i=0; $i<$n ; $i++){
                            echo '
                                <form method = "POST">
                                    Masukkan X['.$i.'] : <input type = "number" name="x['.$i.']" required="required"/>
                            ';
                    }
                    echo '
                                    <input type="hidden" name="n2" value="'.$n.'"/>
                                    <input type="submit" name="submit2" value="Submit" />
                                </form>
                    ';
                }

                if (isset ($_POST['submit2'])){
                    $n = $_POST['n2'];
                    $x = $_POST['x'];
                    echo "Menukar letak Array 1 Dengan 3";
                    echo "</br>";
                    for ((int) $i=0; $i<$n ; $i++){
                        echo "X".($i+1)." = ".$x[$i]."\t";
                        echo "</br>";
                    } 
                    echo "</br>";
                    echo "Display ";
                    
                    $a=$x[0];
                    $b=$x[2];
                    $x[0]=$x[2];
                    $x[2]=$a;

                    for ((int) $i=0; $i<$n ; $i++){
                        echo "X".($i+1)." = ".$x[$i]."\t";
                        
                    }
                    
                   
                }
            ?>
        </pre>
    </body>
</html>