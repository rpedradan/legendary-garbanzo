<?php
    if(isset($_COOKIE['auth'])){
        echo 'Cookie '. $_COOKIE['auth'].' is set.<br>';
    } else {
        echo 'Cookie is not set.<br>';
    }
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Still Logged In</title>
</head>
<body>
    You are still logged in...
</body>
</html>