<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page_4_2</title>
    <style>
        /* Add any desired styling for the footer */
        footer {
        background-color: #B2A4FF;
        padding: 5px;
        text-align: center;
        }
        </style>
</head>
<body>
    <h1>4.2 คำนวณตัวเลข และจัดรูปแบบการแสดงผล : number_format()</h1>
    <?php
    $x=0;
    $y=0;
    ?>
    <h3>
        <?php 
            $x=2;
            $y=2;
            echo "1. ".$x."+".$y." = ".$x+$y; 
        ?> 
    </h3>
    <h3>
        <?php 
            $x=15;
            $y=5;
            echo "2. ".$x."-".$y." = ".$x-$y; 
        ?> 
    </h3>
    <h3>
        <?php 
            $x=5000;
            $y=10;
            echo "3. ".number_format($x)."*".$y." = ".number_format($x*$y); 
        ?> 
    </h3>
    <h3>
        <?php 
            $x=9;
            $y=2;
            echo "4. ".$x."/".$y." = ".($x/$y); 
        ?> 
    </h3>
    <h3>
        <?php 
            $x=25;
            $y=3;
            echo "5. ".$x."/".$y." = ".number_format($x/$y, 2); 
        ?> 
    </h3>
    <h3><a href="index.html">Home</a></h3>
</body>
<footer>
    Copyrights &copy by Thonburi University
</footer>
</html>