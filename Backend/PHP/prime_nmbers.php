
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Numeri primi</title>
        <?php
            function stampaPrimi($min, $max) {
                if($min <= 0)
                    $min = 1;
                if($min > $max)
                    return;
                if($max >= 2)
                    echo "1 2 ";
                for($i = $min; $i < $max; $i++) {
                    for($x = 2; $x < $i; $i++) {
                        if($i%2 != 0) {
                            echo "$i ";
                            break;
                        }
                    }
                }

            }
            function stampaFibonacci($n) {
                $a = 0;
                $b = 1;
                while($a < $n) {
                    echo "$a ";
                    $a = $b;
                    $b = $a+$b;
                }
            }
        ?>
    </head>
    <body>
        <?php
            $min = 0;
            $max = 100;
            echo "<h4>Numeri primi da $min a $max:</h4>";
            stampaPrimi($min, $max);
            echo "<hr>";
            $nfib = 10;
            echo "<h4>Sequenza di Fibonacci fino a $nfib</h4>";
            stampaFibonacci($nfib);
        ?>
    </body>
</html>
