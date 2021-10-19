<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        $fval = $_POST['val1'];
        $sval = $_POST['val2'];
        # test if input is_numeric
        if(is_numeric($fval) && is_numeric($sval)){
            # test if calc is not null
            if(isset($_POST['calc'])){
                $ops = $_POST['calc'];
                # switch statement for value of calc
                switch($ops){
                    case 'add':
                        $result = $fval + $sval;
                        break;
                    case 'sub':
                        $result = $fval - $sval;
                        break;
                    case 'mul':
                        $result = $fval * $sval;
                        break;
                    case 'div':
                        $result = $fval / $sval;
                }
                echo "Calculation result: $result";
            }
            else{ echo "No operation - please retry";}
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>