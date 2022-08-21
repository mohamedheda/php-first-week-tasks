<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
        $c=1;
        for($i=1;$i<=8;$i++){
            echo "<tr>";
            for($j=1;$j<=8;$j++){
                if($c%2!=0){
                 echo   "<td height=30px width=30px bgcolor=#000000></td>";
                }
                else{
                    echo   "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                }
                $c++;
            }
            echo "</tr>";
            $c++;
        }
        ?>
</body>
</html>
