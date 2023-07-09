<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page_4_1</title>
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
    <h1>4.1 แสดงชื่อ-นามสกุล ชื่อเล่น</h1>
    <h2><?php echo "Hello PHP"; ?></h2>
    <?php echo "Mr.Apirak Intaros";
    echo "<br>";
    $nickname="Rak";
    $age=21;
    echo "Nickname : ".$nickname;
    echo "<br>";   
    echo "Age : ".$age." ปี"; 
    ?>
    <h3><a href="index.html">Home</a></h3>
    <!-- <a href="index.html"><input type="button" value="Home"</a>
    <a href="index.html"><button>Home</button></a> -->

</body>
<footer>
    Copyrights &copy by Thonburi University
</footer>
</html>