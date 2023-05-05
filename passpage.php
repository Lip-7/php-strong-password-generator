<?php
session_start();
$password = $_SESSION['password'];
?>


<!DOCTYPE html>
<!-- <?php ?> -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/passpage.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" relative">
    <div class="box mt-7">
        <div class="inner">
            <span><?php echo $password ?></span>
        </div>
        <div class="inner">
            <span>Password</span>
        </div>
    </div>
    <div id="passText" class="passText absolute cursor-pointer">
        <h1 id="password" class=" text-9xl"><?php echo $password ?></h1>
    </div>
    <script src="./js/passscript.js"></script>
</body>

</html>