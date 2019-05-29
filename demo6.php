<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 
        $i = 1;
        $t = $i*30 + 7;
        echo date('ymd',strtotime("-{$t} days"));

     ?>
</body>
</html>