<!DOCTYPE html>
<html lang="en">
<head>
    <title>118140173-A1-PHP dasar lat 2</title>
</head>
<body>
    <?php
    $name=array("lanirne","aduh","qifuat","toda", "anevi","samid","kifuat");
    sort ($name);

    for ($i= "0";$i<= "6";$i++){
        echo"<b>";
        echo$name[$i];
        echo "</b>";
	echo " ";
    }
    ?>
</body>
</html>