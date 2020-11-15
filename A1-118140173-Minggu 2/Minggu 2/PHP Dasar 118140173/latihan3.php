<!DOCTYPE html>
<html lang="en">
<head>
    <title>118140173-A1-PHP dasar lat 3</title>
</head>
<body>
    <?php
        
        for ($i="0";$i<="50";$i++){
            if ($i=="2"){
                echo $i;
            }
            else if ($i%2=="1"&&$i!=1){
                echo $i;
            }
            echo "<b>";
	    echo "  ";
        }

    ?>
</body>
</html>